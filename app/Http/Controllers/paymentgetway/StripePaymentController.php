<?php  
namespace App\Http\Controllers\paymentgetway;

use App\Http\Controllers\Controller;
use App\Model\Order;
use App\Model\PaymentResponce;
use Illuminate\Http\Request;
use App\Model\PaymentGateway;
use Illuminate\Support\Facades\Session;
use Stripe;
   
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $request)
    {
        $client_info = PaymentGateway::find(2);
        $stripe_client_id = $client_info->key_id;
        $stripe_secret    = $client_info->secret_token;

        $total = decrypt($request->input('total')) ?? '';
        $orderId = decrypt($request->input('order_id')) ?? '';

        return view('frontend.payment.stripe', compact('stripe_client_id','total','orderId'));
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $client_info = PaymentGateway::find(2);
        $stripe_client_id = $client_info->key_id;
        $stripe_secret    = $client_info->secret_token;


        Stripe\Stripe::setApiKey($stripe_secret);

            $result = Stripe\Charge::create ([
                "amount" => $request->amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" =>  $request->order_id ?? ''
            ]);

            if ($result->status == 'succeeded'){
                $order = Order::find($request->order_id);
                $order->payment_status = 'success';
                $order->save();

                $this->paymentResponce($result);

                Session::flash('success','Order Placed');
                return redirect()->route('checkout-step-four',$request->order_id);

            }else{
                $order = Order::find($request->order_id);
                $order->payment_status = 'failed';
                $order->save();

                $this->paymentResponce($result);
                Session::flash('error','Payment failed');
                return redirect('/');
            }
    }

    private function paymentResponce($request){

        $paymentResponce = new PaymentResponce();

        $paymentResponce->order_id = $request->description;
        $paymentResponce->status = $request->status ?? 'failed';
        $paymentResponce->tran_date = date('Y-m-d h:i:S',strtotime($request->created)) ?? null;
        $paymentResponce->tran_id = $request->payment_method ?? 'failed';
        $paymentResponce->amount = $request->amount/100 ?? null;
        $paymentResponce->store_amount = $request->amount/100 ?? null;
        $paymentResponce->currency = $request->currency ?? null;
        $paymentResponce->bank_tran_id = $request->id ?? null;
        $paymentResponce->card_type = $request->payment_method_details->type ?? null;
        $paymentResponce->card_no =  null;
        $paymentResponce->card_issuer = $request->payment_method_details->card->network ?? null;
        $paymentResponce->card_brand = $request->payment_method_details->card->brand ?? null;
        $paymentResponce->card_issuer_country = $request->payment_method_details->card->country ?? null;
        $paymentResponce->card_issuer_country_code = $request->payment_method_details->card->country ?? null;
        $paymentResponce->currency_type = $request->currency ?? null;
        $paymentResponce->currency_amount =  null;
        $paymentResponce->currency_rate = null;
        $paymentResponce->base_fair = null;
        $paymentResponce->save();
    }
}
