<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\CustomClass;


use App\Model\PaymentGateway;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class SslcommerzLogInfo {

	public static function SslcommerzInfo($total = 0, $orderId = null, $store_id=null, $store_password=null){

		$post_data = array();
		$post_data['store_id'] = $store_id;
		$post_data['store_passwd'] = $store_password;
		$post_data['total_amount'] = $total;
		$post_data['currency'] = "USD";
		$post_data['tran_id'] = $orderId ?? "SSLCZ_TEST_".uniqid();
		$post_data['success_url'] = url('/')."/ssl-redirect/success";
		$post_data['fail_url'] = url('/')."/ssl-redirect/fail";
//		$post_data['cancel_url'] = url('/')."/order/submit";
		$post_data['cancel_url'] = url('/')."/ssl-redirect/cancel";
		# $post_data['multi_card_name'] = "mastercard,visacard,amexcard";  # DISABLE TO DISPLAY ALL AVAILABLE

		# EMI INFO
//		$post_data['emi_option'] = "1";
//		$post_data['emi_max_inst_option'] = "9";
//		$post_data['emi_selected_inst'] = "9";

		# CUSTOMER INFORMATION
		$post_data['cus_name'] = "Test Customer";
		$post_data['cus_email'] = "test@test.com";
		$post_data['cus_add1'] = "Dhaka";
		$post_data['cus_add2'] = "Dhaka";
		$post_data['cus_city'] = "Dhaka";
		$post_data['cus_state'] = "Dhaka";
		$post_data['cus_postcode'] = "1000";
		$post_data['cus_country'] = "Bangladesh";
		$post_data['cus_phone'] = "01711111111";
		$post_data['cus_fax'] = "01711111111";

		# SHIPMENT INFORMATION
		$post_data['ship_name'] = "testlemon85mu";
		$post_data['ship_add1 '] = "Dhaka";
		$post_data['ship_add2'] = "Dhaka";
		$post_data['ship_city'] = "Dhaka";
		$post_data['ship_state'] = "Dhaka";
		$post_data['ship_postcode'] = "1000";
		$post_data['ship_country'] = "Bangladesh";

		# OPTIONAL PARAMETERS
		$post_data['value_a'] = $orderId ?? 0;
		$post_data['value_b '] = "ref002";
		$post_data['value_c'] = "ref003";
		$post_data['value_d'] = "ref004";

		# CART PARAMETERS
		$post_data['cart'] = json_encode(array(
		    array("product"=>"DHK TO BRS AC A1","amount"=>"200.00"),
		    array("product"=>"DHK TO BRS AC A2","amount"=>"200.00"),
		    array("product"=>"DHK TO BRS AC A3","amount"=>"200.00"),
		    array("product"=>"DHK TO BRS AC A4","amount"=>"200.00")
		));
//		$post_data['product_amount'] = "100";
//		$post_data['vat'] = "5";
//		$post_data['discount_amount'] = "5";
//		$post_data['convenience_fee'] = "3";


		# REQUEST SEND TO SSLCOMMERZ
		$direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v3/api.php";

		$handle = curl_init();
		curl_setopt($handle, CURLOPT_URL, $direct_api_url );
		curl_setopt($handle, CURLOPT_TIMEOUT, 30);
		curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($handle, CURLOPT_POST, 1 );
		curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


		$content = curl_exec($handle );

		$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

		if($code == 200 && !( curl_errno($handle))) {
			curl_close( $handle);
			$sslcommerzResponse = $content;
		} else {
			curl_close( $handle);
			echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
			exit;
		}

		# PARSE THE JSON RESPONSE
		$sslcz = json_decode($sslcommerzResponse, true );

		if(isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="" ) {
		        # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
		        # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
			echo "<meta http-equiv='refresh' content='0;url=".$sslcz['GatewayPageURL']."'>";
			# header("Location: ". $sslcz['GatewayPageURL']);
			exit;
		} else {
			echo "JSON Data parsing error!";
		}
	}


	public static function sslSuccess(){
		$val_id=urlencode($_POST['val_id']);

        $client_info       = PaymentGateway::find(5);
        $store_id          = $client_info->key_id;
        $store_password    = $client_info->secret_token;

		$store_id=urlencode($store_id);
		$store_passwd=urlencode($store_password);
		$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

		$handle = curl_init();
		curl_setopt($handle, CURLOPT_URL, $requested_url);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

		$result = curl_exec($handle);

		$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

		if($code == 200 && !( curl_errno($handle)))
		{

			# TO CONVERT AS ARRAY
			# $result = json_decode($result, true);
			# $status = $result['status'];

			# TO CONVERT AS OBJECT
			return $result = json_decode($result);

			# TRANSACTION INFO
			// $status = $result->status;
			// $tran_date = $result->tran_date;
			// $tran_id = $result->tran_id;
			// $val_id = $result->val_id;
			// $amount = $result->amount;
			// $store_amount = $result->store_amount;
			// $bank_tran_id = $result->bank_tran_id;
			// $card_type = $result->card_type;

			# EMI INFO
			// $emi_instalment = $result->emi_instalment;
			// $emi_amount = $result->emi_amount;
			// $emi_description = $result->emi_description;
			// $emi_issuer = $result->emi_issuer;

			# ISSUER INFO
			// $card_no = $result->card_no;
			// $card_issuer = $result->card_issuer;
			// $card_brand = $result->card_brand;
			// $card_issuer_country = $result->card_issuer_country;
			// $card_issuer_country_code = $result->card_issuer_country_code;

			# API AUTHENTICATION
			// $APIConnect = $result->APIConnect;
			// $validated_on = $result->validated_on;
			// $gw_version = $result->gw_version;

		} else {

			return "Failed to connect with SSLCOMMERZ";
		}
	}
	
}
