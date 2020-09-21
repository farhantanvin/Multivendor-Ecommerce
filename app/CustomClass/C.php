<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OwnLibrary
 *
 * @author SAHADAT
 */

namespace App\CustomClass;

class C {

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
    
    public static function pr($arr = null){
        
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        return;
    }
    
    public static function toBangla($input = null){
        
        $formatArr = array('1' => '১', '2' => '২', '3' => '৩', '4' => '৪', '5' => '৫',
            '6' => '৬', '7' => '৭', '8' => '৮', '9' => '৯', '0' => '০');
        
        $inputArr = str_split($input);
        
        $output = '';
        if(!empty($inputArr)){
            foreach($inputArr as $k){
                if(!empty($formatArr[$k])){
                    $output .= $formatArr[$k];
                }else{
                    $output .= $k;
                }
            }
        }    
        
        return $output;
        
    }

}
