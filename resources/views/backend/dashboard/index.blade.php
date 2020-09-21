@extends('backend.layout.layout')
@section('title','Feits Dashboard')
@section('content')
<div class="fl-page-section">
    <!-- <div class="row">
        <div class="col-12">
            <h1>Dashboard</h1>
        </div>
    </div> -->
    <div class="row mt-5">
        <div class="col-md-3">
            <div class="d_col">
                <a href="#">
                    <div class="card my_card_1 my_card">
                        <div class="card-body">
                            <p><i class="fas fa-hourglass-start"></i></p>
                            <p>Pending Item In Order</p>
                            <h2>{{$pendingItemInOrder}}</h2>
                        </div>
                    </div>
                </a>
            
            </div>
        </div>
        <div class="col-md-3">
            <div class="d_col">
                <a href="#">
                    <div class="card my_card_2 my_card">
                        <div class="card-body">
                            <p><i class="fas fa-truck"></i></p>
                            <p>Processing Item In Order</p>
                            <h2>{{$processingItemInOrder}}</h2>
                        </div>
                    </div>
                </a>
            
            </div>
        </div>
        <div class="col-md-3">
            <div class="d_col">
                <a href="#">
                    <div class="card my_card_11 my_card">
                        <div class="card-body">
                            <p><i class="fas fa-check-double"></i></p>
                            <p>Complete Item In Order</p>
                            <h2>{{$completeItemInOrder}}</h2>
                        </div>
                    </div>
                </a>
            
            </div>
        </div>
        <div class="col-md-3">
            <div class="d_col">
                <a href="#">
                    <div class="card my_card_3 my_card">
                        <div class="card-body">
                            <p><i class="fas fa-times-circle"></i></p>
                            <p>Cancel Item In Order</p>
                            <h2>{{$cancelItemInOrder}}</h2>
                        </div>
                    </div>
                </a>
            
            </div>
        </div>
        {{--<div class="col-md-3">--}}
            {{--<div class="d_col">--}}
                {{--<a href="#">--}}
                    {{--<div class="card my_card_4 my_card">--}}
                        {{--<div class="card-body">--}}
                            {{--<p><i class="fas fa-street-view"></i></p>--}}
                            {{--<p>Total</p>--}}
                            {{--<h2>2</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{----}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-md-3">--}}
            {{--<div class="d_col">--}}
                {{--<a href="#">--}}
                    {{--<div class="card my_card_5 my_card">--}}
                        {{--<div class="card-body">--}}
                            {{--<p><i class="fas fa-user-friends"></i></p>--}}
                            {{--<p>Total</p>--}}
                            {{--<h2>2</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{----}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-3">--}}
            {{--<div class="d_col">--}}
                {{--<a href="#">--}}
                    {{--<div class="card my_card_6 my_card">--}}
                        {{--<div class="card-body">--}}
                            {{--<p><i class="fas fa-street-view"></i></p>--}}
                            {{--<p>Total</p>--}}
                            {{--<h2>2</h2>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</a>--}}
            {{----}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
    
</div>
@endsection
