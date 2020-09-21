@extends("backend.layout.layout")
@section("title","Sell Offer")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Create Sell Offer
                </h4>
            </div>

            <div class="card-body">
                <div class="fl-form">
                    <form method="post" enctype="multipart/form-data" action="{{route("offer-sale.store")}}">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class=" form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Select Offer</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <select
                                                class="js-example-basic-single browser-default custom-select form-control"
                                                name="offer_id">
                                                @foreach($offer as $item)
                                                <option value="{{$item->id}}">{{$item->offer_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="text-danger">
                                            {{$errors->has("offer_id") ? $errors->first("offer_id") : ""}}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class=" form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Select Product</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <select
                                                class="js-example-basic-single browser-default custom-select form-control"
                                                name="product_id">
                                                @foreach($product as $item)
                                                <option value="{{$item->id}}">{{$item->product_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="text-danger">
                                            {{$errors->has("product_id") ? $errors->first("product_id") : ""}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 text-center mt-3">
                            <a href="{{url()->previous()}}"
                                class="btn btn-danger btn-rounded waves-effect waves-light">Cancel</a>
                            <button type="submit"
                                class="btn btn-primary btn-rounded waves-effect waves-light">Submit</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
