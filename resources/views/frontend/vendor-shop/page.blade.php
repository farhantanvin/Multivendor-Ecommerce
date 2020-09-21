@extends('frontend.layout.layout')
@section('title','Vendor or Shop Page')
@section('content')

<section class="vandor_shop_page">
    <div class="container">
        <div class="vandor_shop_page_header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="vendor_logo_part">
                        <a href=""><img src="{{asset($shopSettings->logo)}}" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="vendor_header_content">
                        <p><a href="">{{$vendor->name}}</a></p>
                        <p class="vendor_header_btn"><span>Open {{$vendorEstablished}}</span> </p>
                        {{-- <p>95% Positive Review</p>
                        <p class="vendor_header_btn"> <span>Follow</span> <b>5k Followers</b> </p> --}}

                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-3">
                    <div class="vendor_search_page">
                        <form action="" class="d-flex search_form_1">
                            <div class="input-group">
                                <input type="text" placeholder="Search in this shop" class="form-control s_i_1"
                                    aria-label="Text input with dropdown button">

                            </div>
                            <button class="search_btn">Search</button>
                        </form>
                    </div>
                </div> --}}
            </div>
            <div class="vendor_page_menu_part">
                <div class="row">
                    <div class="col-lg-9 col-md-9 m-auto">
                        <div class="vendor_page_menu">
                            <ul class="nav navbar-nav-vendor d-flex  w-100">

                                @forelse($vendorMenu as $item)

                                <li class="nav-item">
                                    <a class="nav-link active"
                                        href="{{route('vendor.page',$item->slug)}}">{{$item->page_title}}</a>
                                </li>
                                @empty
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">{{$vendor->name}}</a>
                                </li>
                                @endforelse

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div>
            {!!$page->description!!}

        </div>

    </div>
</section>


@endsection
