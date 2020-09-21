@extends('frontend.layout.layout')
@section('title','Conatct Page')
@section('content')

<section class="conatct_page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="checkout_col col_shadow">
                    <div class="checkout_step_title">
                        <h3>Contact Multivendor</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                
                <div class="contact_col_step col_shadow">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="multivandor_contact_form">
                                <p>Contact</p>
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Name">             
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="" placeholder="Phone Number">             
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="" placeholder="Email Address">             
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="" rows="2" placeholder="Message"></textarea>
                                    </div>
                                    <button class="btn">Send</button>
                                </form>
                            </div>
                            
                            
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="multivandor_address_list">
                                <div class="f_col_1">
                                        <div class="multivandor_address_title">
                                        <p>Address</p>
                                        </div>
                                        <div class="f_logo">
                                            <a href="" ><img src="{{asset('/public/frontend/assets/images/logo2.png')}}" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="f_number">
                                            <p class="multivandor_address_subtitle">Phone</p>
                                            <a href="">+8801672939834</a>
                                            <a href="">+8801672939834</a>
                                        </div>
                                        <div class="f_address mt-1">
                                            <p class="multivandor_address_subtitle">Address</p>
                                            <a href="">21/B Banani ,Dhaka,Bangladesh</a>
                                        </div>
                                        <div class="f_socila_icon mt-2">
                                            <p class="multivandor_address_subtitle">Social Media</p>
                                            <ul class="list-unstyled d-flex mt-1">
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="col-lg-12 mt-3">
                            <div class="contact_page_map">
                                <iframe width="772" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=772&amp;height=300&amp;hl=en&amp;q=Dhaka%20Dhaka+(MultiVandor)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> 
                            </div>
                        </div>
                    </div>

                </div>

   
            </div>


            <div class="col-lg-4 col-md-4">
                <div class="col_shadow contact_page_right_part">
                    <div class="contact_page_right_img">
                        <img src="{{asset('/public/frontend/assets/images/others/supersale.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="contact_page_right_content">
                        <p class="mt-3 pb-1">Sign Up for Newsletter and get a "BDT 1000 Tk OFF" on your new purchase.</p>
                        <div class="form-group">
                            <input type="text" class="form-control hover_input" id="" placeholder="Enter Email Address">             
                        </div>
                    </div>
                    
                    <div class="cart_part_button">
                        <button class="btn btn_5">Sign Up For Newsletter</button>
                    </div>
                </div>
            </div>
        </div>


        

    </div>
</section>

@endsection