@extends('backend.layout.layout')
@section('title','Vendor Subscription Plans')

@section('content')
    <div class="fl-page-section">
        <div class="fl-input-section">
            <div class="card card_main_body">

                <div class="card-header">
                    <h4>
                        <i class="fas fa-plus-circle"></i>
                        Create Vendor Subscription Plans
                    </h4>
                </div>
                <div class="card-body">
                    <div class="fl-form">
                        <div class="form">
                            <form method="post" action="{{route('vendor-subscription-plan.store')}}" data-parsley-validate>
                            <div class="row">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <!-- Material input -->
                                        <label for="title" class="col-md-3 col-form-label">Title<span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <div class="md-form mt-0">
                                                <input type="text" name="title" class="form-control" id="title" value="{{old('name')}}" placeholder="Enter Plane Title" required>
                                                <span class="text-danger">@error('title') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <!-- Material input -->
                                        <label for="price" class="col-md-3 col-form-label">Price</label>
                                        <div class="col-md-9">
                                            <div class="md-form mt-0">
                                                <input type="text" name="price" class="form-control" id="price" value="{{old('price')}}" placeholder="Leave Empty For Free" data-parsley-type="number">
                                                <span class="text-danger">@error('price') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <!-- Material input -->
                                        <label for="duration" class="col-md-3 col-form-label">Duration (No. of Days)<span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <div class="md-form mt-0">
                                                <input type="text"   name="duration" class="form-control" id="duration" value="{{old('duration')}}" placeholder="Enter No. of Day" data-parsley-type="number" data-parsley-min="1" required>
                                                <span class="text-danger">@error('duration') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <!-- Material input -->
                                        <label for="product_limitation" class="col-md-3 col-form-label">No of Product<span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <div class="md-form mt-0">
                                                <input type="text"   name="product_limitation" class="form-control" id="product_limitation" value="{{old('duration')}}" placeholder="Enter 0 For Unlimited Upload" data-parsley-type="number" data-parsley-min="0" required>
                                                <span class="text-danger">@error('product_limitation') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <!-- Material input -->
                                        <label for="description" class="col-md-3 col-form-label">Description</label>
                                        <div class="col-md-9">
                                            <div class="md-form mt-0">
                                                <textarea type="text" name="description" class="form-control" id="description" value="{{old('description')}}" placeholder="Enter Plan Description" data-parsley-maxlength="200"></textarea>
                                                <span class="text-danger">@error('price') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 text-center mt-3">
                                    <a href="{{url()->previous()}}" class="btn btn-danger btn-rounded waves-effect waves-light">Cancel</a>
                                    <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light">Submit</button>
                                </div>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
