@extends('frontend.layout.layout')
@section('title','Customer Dashboard')
@section('content')
    <!-- Customer Dashboard Page  -->
    <section class="customer_dashboard_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="customer_d_heading">
                        <h3>@yield('user-d-title','User Dashboard')</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    @include('frontend.dashboard.include.menu')
                </div>
                <div class="col-lg-9">
                    @yield('user-d-content')
                </div>
            </div>
        </div>
    </section>
@endsection
