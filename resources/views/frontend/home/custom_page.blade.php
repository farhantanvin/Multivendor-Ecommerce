@extends('frontend.layout.layout')
@section('title',$Page->title)
@section('content')


<br>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="fl-page-section">
                <div class="fl-pagetitle">

                    {!!$Page->description!!}

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
