@extends('backend.layout.layout')
@section('title','Payment Gateway Create')

@section('content')
    <div class="fl-page-section">
        <div class="fl-input-section">
            <div class="card card_main_body">

                <div class="card-header">
                    <h4>
                        <i class="fas fa-plus-circle"></i>
                        Edit Payment Gateway
                    </h4>
                </div>
                <div class="card-body">
                    <div class="fl-form">
                        <div class="form">
                            <form method="post" action="{{route('vendor-subscription-plan.update',$vendorSubscriptionPlan->id)}}" data-parsley-validate>
                                @csrf
                                @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <!-- Material input -->
                                        <label for="title" class="col-md-3 col-form-label">Title<span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <div class="md-form mt-0">
                                                <input type="text" name="title" class="form-control" id="title" value="{{old('title',$vendorSubscriptionPlan->title)}}" placeholder="Enter Plane Title" required>
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
                                                <input type="text" name="price" class="form-control" id="price" value="{{old('price',$vendorSubscriptionPlan->price)}}" placeholder="Leave Empty For Free" data-parsley-type="number">
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
                                                <input type="text"   name="duration" class="form-control" id="duration" value="{{old('duration',$vendorSubscriptionPlan->duration)}}" placeholder="Enter No. of Day" data-parsley-type="number" data-parsley-min="1" required>
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
                                                <input type="text"   name="product_limitation" class="form-control" id="product_limitation" value="{{old('product_limitation',$vendorSubscriptionPlan->product_limitation)}}" placeholder="Enter 0 For Unlimited Upload" data-parsley-type="number" data-parsley-min="0" required>
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
                                                <textarea type="text" name="description" class="form-control" id="description" value="{{old('description')}}" placeholder="Enter Plan Description" data-parsley-maxlength="200">{{$vendorSubscriptionPlan->description}}</textarea>
                                                <span class="text-danger">@error('price') {{$message}} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group row">
                                        <label for="status" class="col-md-3 col-form-label">Status<span class="text-danger">*</span></label>
                                        <div class="col-md-9">
                                            <select name="status" class="browser-default custom-select form-control" id="status" required>
                                                <option @if(old('status') == null  && $vendorSubscriptionPlan->status == null) selected @endif>Select One</option>
                                                <option @if(old('status',$vendorSubscriptionPlan->status) == 0) selected @endif value="0">Inactive</option>
                                                <option @if(old('status',$vendorSubscriptionPlan->status) == 1) selected @endif value="1">Active</option>
                                            </select>
                                            <span class="text-danger">@error('status') {{$message}} @enderror</span>
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
