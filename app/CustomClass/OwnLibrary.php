<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\CustomClass;


use App\Model\PaymentResponce;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class OwnLibrary {

    //put your code here
    public static function numberformat($num = 0){
        return number_format($num, 2, '.', ',');
    }
    
    public static function printDate($date = '0000-00-00'){
        return date('F jS, Y', strtotime($date));
    }
    
    public static function printDateTime($dateTime = '0000-00-00 00:00:00'){
        return date('F jS, Y h:i A', strtotime($dateTime));
    }

    public static function paginationSerial($modelObject){
        return ($modelObject->currentpage()-1)* $modelObject->perpage() + 1;
    }
    
    public static function uploadFile($image,$folderName){
        $image_name = Str::random(20);
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path = 'public/upload/'.$folderName.'/';
        $image_url = $upload_path . $image_full_name;
        $image->move($upload_path, $image_full_name);
        return $image_url;
    }

    public static function formatted_date($param=null, $format=null, $type=null){
        if( !$param || $param=='' || substr($param,0,4)=='0000' ) return false;
        if($format){
            return date($format, strtotime($param));
            
        }elseif( $type=='full' ){
            return date("F d, Y h:i a", strtotime($param));
            
        }elseif( $type=='time' ){
            return date("h:i a", strtotime($param));
            
        }else{
            return date("F d, Y", strtotime($param));   
        }
    }

    public static function validateAccess($moduleId = null, $activityId = null) {
        $haystack = Session::get('acl');
        $needle = array($moduleId => $activityId);
        if (!self::in_array_r($needle, $haystack)) {
            $url = route('admin.login');
            echo "<script> location.href='".$url."'; </script>";
            exit;
        }
    }

    public static function in_array_r($needle, $haystack) {
        $needleArr = array_keys($needle);
        $needleKey = $needleArr[0];
        $needleVal = $needle[$needleKey];
        foreach ($haystack as $key => $item) {
            if ($needleKey == $key) {
                foreach ($item as $activityItem) {
                    if ($needleVal == $activityItem) {
                        return true;
                    }
                }
            }
        }
        return false;
    }
}
