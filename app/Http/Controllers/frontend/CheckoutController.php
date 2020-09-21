<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Model\BillingAddress;
use App\Model\Country;
use App\Model\CouponToOrder;
use App\Model\Discount;
use App\Model\DiscountToUser;
use App\Model\Order;
use App\Model\OrderBillingAddress;
use App\Model\OrderDetail;
use App\Model\OrderShippingAddress;
use App\Model\PaymentGateway;
use App\Model\ShippingAddress;
use App\Model\ShippingOption;
use App\Model\SiteSetting;
use App\Model\User;
use Cart;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    public function checkoutStep1(){
        if (Cart::count() <= 0){
            session()->flash('error','Add some product to your cart');
            return redirect()->route('home.index');
        }
        $countries = Country::orderBy('country_name')->where('status','=',1)->get();
        return view('frontend.checkout.checkout1',compact('countries'));
    }

    public function checkoutStep1Submit(Request $request){

        if (Cart::count() <= 0){
            session()->flash('error','Add some product to your cart');
            return redirect()->route('home.index');
        }

        $rules = [
            'name' => 'required',
            'billing_country' => 'required',
            'billing_state' => 'required',
            'billing_postal_code' => 'required',
            'billing_address' => 'required',
        ];

        $message = [

        ];

        if (!Auth::check()){
            $rules['email'] =  'required|email|unique:users';
            $rules['contact_no'] =  'required|unique:users';
            $rules['password'] =  'required';
            $rules['confirm_password'] =  'required|same:password';
        }

        if (empty($request->same_sa_billing)){
            $rules['shipping_country'] =  'required|';
            $rules['shipping_state'] =  'required';
            $rules['shipping_postal_code'] =  'required';
            $rules['shipping_address'] =  'required';
        }

        $validation = Validator::make($request->all(),$rules,$message);

        if ($validation->fails()){
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        }else{
//            register user if not register
            if (!Auth::check()){
                $user = new User();
                $user->affiliate_code = md5(time().rand(1,9999));
                $user->user_type = 4;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->contact_no = $request->contact_no;
                $user->password = Hash::make($request->password);
                $user->save();
                $userId = $user->id;
                Auth::loginUsingId($userId);
            }

//            Customer Billing address
            $billingAddress = BillingAddress::where('user_id','=',auth()->id())->first();

            if (!$billingAddress){
                $billingAddress = new BillingAddress();
                $billingAddress->user_id = auth()->id();
            }
            $billingAddress->name = $request->name;
            $billingAddress->email = $request->email;
            $billingAddress->contact_no = $request->contact_no;
            $billingAddress->country_id = $request->billing_country;
            $billingAddress->state_id = $request->billing_state;
            $billingAddress->post_code = $request->billing_postal_code;
            $billingAddress->address = $request->billing_address;
            $billingAddress->save();

//            Customer Shipping address
            $shippingAddress = ShippingAddress::where('user_id','=',auth()->id())->first();

            if (!$shippingAddress){
                $shippingAddress = new ShippingAddress();
                $shippingAddress->user_id = auth()->id();
            }
            $shippingAddress->name = $request->name;
            $shippingAddress->email = $request->email;
            $shippingAddress->contact_no = $request->contact_no;

            $shippingAddress->country_id = empty($request->same_sa_billing) ?                                                       $request->shipping_country : $request->billing_country;

            $shippingAddress->state_id = empty($request->same_sa_billing) ?                                                       $request->shipping_state : $request->billing_state;

            $shippingAddress->post_code = empty($request->same_sa_billing) ?                                                       $request->shipping_postal_code :                                                         $request->billing_postal_code;

            $shippingAddress->address = empty($request->same_sa_billing) ?                                                       $request->shipping_address : $request->billing_address;
            $shippingAddress->save();

            return redirect()->route('checkout-step-two');
        }
    }

    public function checkoutStep2(){
        if (Cart::count() <= 0){
            session()->flash('error','Add some product to your cart');
            return redirect()->route('home.index');
        }

        $shippingMethods = ShippingOption::where('status','=',1)->get();
        return view('frontend.checkout.checkout2',compact('shippingMethods'));
    }

    public function checkoutStep2Submit(Request $request){
        if (Cart::count() <= 0){
            session()->flash('error','Add some product to your cart');
            return redirect()->route('home.index');
        }
        Session::put('shippingMethod',$request->options);
        return redirect()->route('checkout-step-three');
    }

    public function checkoutStep3(){

        if (Cart::count() <= 0){
            session()->flash('error','Add some product to your cart');
            return redirect()->route('home.index');
        }

        $shippingMethods = ShippingOption::where('status','=',1)->get();
        $paymentMethods = PaymentGateway::where('status','=',1)->get();
        return view('frontend.checkout.checkout3',compact('shippingMethods','paymentMethods'));
    }

    public function checkoutStep3Submit(Request $request){

        if (Cart::count() <= 0){
            session()->flash('error','Add some product to your cart');
            return redirect()->route('home.index');
        }

        Session::put('paymentMethod',$request->payment_method);

        $totalDeliveryCharge = 0;
        foreach(Cart::content() as $row){
            $totalDeliveryCharge = $totalDeliveryCharge + ($row->options['delivery'] * $row->qty);
        }

        $orderConfig = [
            'table' => 'orders',
            'length' => 15,
            'prefix' => date('ymd'),
            'reset_on_prefix_change' => true
        ];

        $orderId = IdGenerator::generate($orderConfig);
        $total = Cart::total(2,'.','') + $totalDeliveryCharge;
        $order = new Order();
        $order->id = $orderId;
        $order->order_number  = $orderId;
        $order->customer_id  = auth()->id();
        $order->shipping_method  = Session::get('shippingMethod');
        $order->payment_method  = Session::get('paymentMethod');
        $order->order_date  = date('Y-m-d');
        $order->order_status  = 3;
        $order->order_tax  = Cart::tax();
        $order->order_tracking_number  = $orderId;
        $order->delivery_charge  = $totalDeliveryCharge;
        $order->discount  = Cart::discount();
        $order->subtotal  = Cart::priceTotal();
        $order->total  = $total;
        $order->created_by = auth()->id();
        $order->updated_by = auth()->id();

        if ($order->save()){
            $orderDetailsConfig = [
                'table' => 'order_details',
                'length' => 15,
                'prefix' => date('ymd'),
                'reset_on_prefix_change' => true
            ];

            foreach(Cart::content() as $row){
                $orderDetails = new OrderDetail();
                $orderDetails->id = IdGenerator::generate($orderDetailsConfig);
                $orderDetails->order_id = $orderId;
                $orderDetails->order_number = $orderId;
                $orderDetails->vendor_id = $row->options['vendor_id'];
                $orderDetails->product_id = $row->id;
                $orderDetails->product_varient_id = $row->options['product_varient_id'];
                $orderDetails->product_varient_name = $row->options['product_varient'];
                $orderDetails->quantity = $row->qty;
                $orderDetails->price = $row->price;
                $orderDetails->regular_price = $row->options['regular_price'];
                $orderDetails->delivery_charge = $row->options['delivery'] * $row->qty;
                $orderDetails->vat = $row->tax;
                $orderDetails->discount = $row->discount;
                $orderDetails->total = $row->total;
                $orderDetails->order_status = 3;
                $orderDetails->created_by = Auth::id();
                $orderDetails->updated_by = Auth::id();
                $orderDetails->save();
            }

            if (!empty(Session::get('coupons'))){

                $couponToOrderConfig = [
                    'table' => 'coupon_to_orders',
                    'length' => 15,
                    'prefix' => date('ymd'),
                    'reset_on_prefix_change' => true
                ];

                foreach(Session::get('coupons') as $coupon){
                    $couponToOrder = new CouponToOrder();
                    $couponToOrder->id = IdGenerator::generate($couponToOrderConfig);
                    $couponToOrder->discount_id = $coupon['coupon_id'];
                    $couponToOrder->coupon_code = $coupon['coupon_name'];
                    $couponToOrder->order_id = $orderId;
                    $couponToOrder->user_id = Auth::id();
                    $couponToOrder->discount = (float)Cart::initial(2,'.','') *(float)($coupon['coupon_amount']/100);
                    $couponToOrder->save();
                }
            }

            $orderShippingConfig = [
                'table' => 'order_shipping_addresses',
                'length' => 15,
                'prefix' => date('ymd'),
                'reset_on_prefix_change' => true
            ];

            $orderShipping = new OrderShippingAddress();
            $orderShipping->id = IdGenerator::generate($orderShippingConfig);
            $orderShipping->order_id = $orderId;
            $orderShipping->customer_id = Auth::id();
            $orderShipping->name = Auth::user()->name;
            $orderShipping->email = Auth::user()->email;
            $orderShipping->contact_no = Auth::user()->contact_no;
            $orderShipping->state_id = Auth::user()->shipping->state_id;
            $orderShipping->country_id = Auth::user()->shipping->country_id;
            $orderShipping->address = Auth::user()->shipping->address;
            $orderShipping->customer_postal_code = Auth::user()->shipping->post_code;
            $orderShipping->created_by = Auth::id();
            $orderShipping->updated_by = Auth::id();
            $orderShipping->save();

            $orderBillingConfig = [
                'table' => 'order_billing_addresses',
                'length' => 15,
                'prefix' => date('ymd'),
                'reset_on_prefix_change' => true
            ];

            $orderBilling = new OrderBillingAddress();
            $orderBilling->id = IdGenerator::generate($orderBillingConfig);
            $orderBilling->order_id = $orderId;
            $orderBilling->customer_id = Auth::id();
            $orderBilling->name = Auth::user()->name;
            $orderBilling->email = Auth::user()->email;
            $orderBilling->contact_no = Auth::user()->contact_no;
            $orderBilling->state_id = Auth::user()->billing->state_id;
            $orderBilling->country_id = Auth::user()->billing->country_id;
            $orderBilling->address = Auth::user()->billing->address;
            $orderBilling->customer_postal_code = Auth::user()->billing->post_code;
            $orderBilling->created_by = Auth::id();
            $orderBilling->updated_by = Auth::id();
            $orderBilling->save();

            $siteSetting = SiteSetting::find(1);
            $paymentMethod = PaymentGateway::find(Session::get('paymentMethod'));
            $data = [
                'siteSetting' => $siteSetting,
                'paymentMethod' => $paymentMethod,
                'content' => Cart::content(),
                'orderId' => $orderId,
            ];
            Mail::to(Auth::user()->email)->send(new \App\Mail\OrderReceive($data));

            Cart::destroy();
            Session::forget('coupons');

            if (Session::get('paymentMethod') == 2){
                return redirect('stripe-form?total='.encrypt($total).'&order_id='.encrypt($orderId));
            }

            if (Session::get('paymentMethod') == 5){
                return redirect('ssl-commerz?total='.$total.'&order_id='.$orderId);
            }

            return redirect()->route('checkout-step-four',$orderId);

        }else{
            Session::flash('error','Something went wrong please try again');
            return redirect()->back();
        }
    }

    public function checkoutStep4($id){
        $order =Order::find($id);
        $shippingMethods = ShippingOption::where('status','=',1)->get();
        $paymentMethods = PaymentGateway::where('status','=',1)->get();
        return view('frontend.checkout.checkout4',compact('order','shippingMethods','paymentMethods'));
    }

    public function counpon(Request $request){

        $coupon = Discount::where('name','=',$request->coupon)->first();

//        Check Coupon exist
        if (!$coupon){
            session()->flash('error','Sorry! Coupon code not found into the system.');
            return redirect()->back();
        }
//        Check Coupon exist


//        Check Coupon is start
        if (strtotime($coupon->start_date) > strtotime(date('Y-m-d h:i:s'))){
            session()->flash('error','Sorry! Coupon is not applicable until '.$coupon->start_date);
            return redirect()->back();
        }
//        Check Coupon is start

//        Check Coupon is expaire
        if (strtotime($coupon->expired_date) < strtotime(date('Y-m-d h:i:s'))){
            session()->flash('error','Sorry! Coupon is expaire.');
            return redirect()->back();
        }
//        Check Coupon is expaire

        //        User is eligable to use this coupon
        if ($coupon->type == 'specific_user'){
            $coupotToUserCheck = DiscountToUser::where('discount_id','=',$coupon->id)
                ->where('user_id','=',Auth::id())->first();
            if (!$coupotToUserCheck){
                session()->flash('error','Sorry! You can not use this coupon');
                return redirect()->back();
            }
        }
//        User is eligable to use this coupon

        //        Check user already used this coupon or not
        $orderToCoupon = CouponToOrder::where('discount_id','=',$coupon->id)
            ->where('user_id','=',Auth::id())->get();

        if (count($orderToCoupon) >= $coupon->validity_times){
            session()->flash('error','You already use this coupon.');
            return redirect()->back();
        }
//        Check user already used this coupon or not


        $oldCoupons = array();

        $CouponArray = [
            'coupon_id'       => $coupon->id,
            'coupon_name'     => $coupon->name,
            'coupon_amount' => $coupon->amount
        ];

        if (Session::has('coupons')){
            $oldCoupons = Session::get('coupons');
        }

        if(in_array($coupon->id, array_column($oldCoupons, 'coupon_id'))) { // search value in the array
            session()->flash('warning','Coupon already added to the cart.');
            return redirect()->back();
        }

        array_push($oldCoupons,$CouponArray);
        Session::put('coupons',$oldCoupons);
        return redirect()->back();
    }

}
