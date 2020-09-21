<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraController extends Controller
{
    
    public function form1(){
        return view('backend.extra.form1');
    }
    public function form2(){
        return view('backend.extra.form2');
    }
    public function single_product(){
        return view('frontend.extra.single_product');
    }
    public function search_page(){
        return view('frontend.extra.search_page');
    }
    public function vandor_page(){
        return view('frontend.extra.vandor_page');
    }
    public function customer_dashboard(){
        return view('frontend.extra.customer_dashboard');
    }
    public function contact_page(){
        return view('frontend.extra.contact_page');
    }
    public function checkout1(){
        return view('frontend.extra.checkout1');
    }
    public function checkout2(){
        return view('frontend.extra.checkout2');
    }
    public function checkout3(){
        return view('frontend.extra.checkout3');
    }
    public function checkout4(){
        return view('frontend.extra.checkout4');
    }
    public function cartpage1(){
        return view('frontend.extra.cartpage1');
    }

}
