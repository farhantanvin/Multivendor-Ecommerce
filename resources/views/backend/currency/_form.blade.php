@csrf
<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="name" class="col-md-3 col-form-label">Name<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="name" class="form-control" id="name" value="{{old('name',$currency->name)}}" placeholder="Enter Currency Name" required>
                <span class="text-danger">@error('name') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="symbol" class="col-md-3 col-form-label">Symbol<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="symbol" class="form-control" id="symbol" value="{{old('symbol',$currency->symbol)}}" placeholder="Enter Currency Symbol" required>
                <span class="text-danger">@error('symbol') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="multiplication_of_doller" class="col-md-3 col-form-label">Multiplication of USD<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text"   name="multiplication_of_doller" class="form-control" id="multiplication_of_doller" value="{{old('multiplication_of_doller',$currency->multiplication_of_doller)}}" placeholder="Enter Multiplication of USD Amount" data-parsley-type="number" data-parsley-min="1" required>
                <span class="text-danger">@error('multiplication_of_doller') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
</div>



<div class="col-6">
    <div class="form-group row">
        <label for="status" class="col-md-3 col-form-label">Status<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <select name="status" class="browser-default custom-select form-control" id="status" required>
                <option @if(old('status') == null  && $currency->status == null) selected @endif>Select One</option>
                <option @if(old('status',$currency->status) == 0) selected @endif value="0">Inactive</option>
                <option @if(old('status',$currency->status) == 1) selected @endif value="1">Active</option>
            </select>
            <span class="text-danger">@error('status') {{$message}} @enderror</span>
        </div>
    </div>
</div>

<div class="col-md-12 text-center mt-3">
    <a href="{{url()->previous()}}" class="btn btn-danger btn-rounded waves-effect waves-light">Cancel</a>
    <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light">Submit</button>
</div>
