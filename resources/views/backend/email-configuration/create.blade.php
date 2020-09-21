@extends('backend.layout.layout')
@section('title','Payment Gateway Create')

@section('content')
    <div class="fl-page-section">
        <div class="fl-input-section">
            <div class="card card_main_body">

                <div class="card-header">
                    <h4>
                        <i class="fas fa-plus-circle"></i>
                        Create Email Configuration
                    </h4>
                </div>
                <div class="card-body">
                    <div class="fl-form">
                        <div class="form">
                            <form method="post" action="{{route('email-configuration.store')}}" data-parsley-validate>
                            <div class="row">
                               @include('backend.email-configuration._form')
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
