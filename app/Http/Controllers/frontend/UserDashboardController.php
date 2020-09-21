<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Model\BillingAddress;
use App\Model\Country;
use App\Model\Product;
use App\Model\ShippingAddress;
use App\Model\User;
use App\Model\VendorSubscription;
use App\Model\VendorSubscriptionPlans;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.dashboard.user-detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'                => 'required',
                'email'               => 'email|required|unique:users',
                'password'            => 'min:6',
                'confirm_password'    => 'required|same:password'
            ],
            [
                'name.required'       => 'Full name required',
                'email.required'      => 'Enter a valid Email',
                'password.min'        => 'Enter passowrd atleast 6 character long'
            ]
        );

        $user = new User();
        $user->affiliate_code = md5(time().rand(1,9999));
        $user->name          = $request->name;
        $user->email         = $request->email;
        $user->password      = bcrypt($request->password);
        $user->user_type     = 4;

        if ($user->save()) {

            Auth::login($user);
            session()->flash("success", "Account successfully created");
            return redirect()->route('frontend.user.dashboard');
        } else {
            session()->flash("error", "Account not created");
            return redirect()->back();
        }
    }

    public function BecomeVendor(){
        $vendorPlans = VendorSubscriptionPlans::all();
        return view('frontend.dashboard.become-vendor',compact('vendorPlans'));
    }

    public function vendorSubscription(Request $request){
        $plan = new VendorSubscription();
        $plan->user_id = auth()->id();
        $plan->vendor_subscription_plan_id = $request->plan;
        $plan->expaire_date = Carbon::now()->addDays(30);
        if ($plan->save()){
            $user = User::find(auth()->id());
            $user->user_type = 2;
            $user->save();
            Session::flash('success','You have successfully become a vendor');
            return Redirect::route('backend.dashboard');
        }else{
            Session::flash('error','Unable to subscribe, Please try again');
            return redirect()->back();
        }
    }

    public function editProfile(){
        $countries = Country::where('status','=',1)->get();
        return view('frontend.dashboard.edit-profile',compact('countries'));
    }

    public function updateProfile(Request $request){
        $rules = [
            'name' => 'required',
            'billing_country' => 'required',
            'billing_state' => 'required',
            'billing_postal_code' => 'required',
            'billing_address' => 'required',
            'shipping_country' => 'required',
            'shipping_state' => 'required',
            'shipping_postal_code' => 'required',
            'shipping_address' => 'required',
            'contact_no' => [
                'required',
                Rule::unique('users')->ignore(auth()->id()),
            ],
        ];

        $message = [];

        $validation = Validator::make($request->all(),$rules,$message);

        if ($validation->fails()){
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        }else{
//            Customer Billing address
            $billingAddress = BillingAddress::where('user_id','=',auth()->id())->first();
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
            $shippingAddress->name = $request->name;
            $shippingAddress->email = $request->email;
            $shippingAddress->contact_no = $request->contact_no;
            $shippingAddress->country_id = $request->shipping_country;
            $shippingAddress->state_id = $request->shipping_state ;
            $shippingAddress->post_code = $request->shipping_postal_code;
            $shippingAddress->address = $request->shipping_address;
            $shippingAddress->save();
            session()->flash('success','Information Updated');
            return redirect()->back();
        }
    }

    public function changePassword(){
        return view('frontend.dashboard.change-password');
    }

    public function changePasswordSubmit(Request $request){
        $rules = [
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ];
        $message = [];
        $validation = Validator::make($request->all(),$rules,$message);

        if ($validation->fails()){
            return redirect()->back()
                ->withInput()
                ->withErrors($validation);
        }else{
                $user = User::find(auth()->id());
                $user->password = Hash::make($request->password);
            if ($user->save()){
                Session::flash('success','Password Changed');
                return redirect()->back();
            }else{
                Session::flash('error','Password Not Changed');
                return redirect()->back();
            }
        }
    }

    public function affiliateProduct(){
        $products = Product::whereNotNull('affiliate_commision')->paginate(15);
        return view('frontend.dashboard.affiliate-product',compact('products'));
    }
}
