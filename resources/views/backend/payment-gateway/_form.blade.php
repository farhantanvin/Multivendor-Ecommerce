@csrf
<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="name" class="col-md-3 col-form-label">Name<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="name" class="form-control" id="name" value="{{old('name',$paymentGateway->name)}}" data-parsley-required="true" placeholder="Enter Payment Gateway Name">
                <span class="text-danger">@error('name') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="key_id" class="col-md-3 col-form-label">Key/ID</label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="key_id" class="form-control" id="key_id" value="{{old('key_id',$paymentGateway->key_id)}}" placeholder="Enter Payment Gateway Key/Id">
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="secret_token" class="col-md-3 col-form-label">Secret Token</label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="secret_token" class="form-control" id="secret_token" value="{{old('secret_token',$paymentGateway->secret_token)}}" placeholder="Enter Payment Gateway Secret Token">
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="form-group row">
        <label for="sandbox" class="col-md-3 col-form-label">Sandbox</label>
        <div class="col-md-9">
            <select name="sandbox" class="browser-default custom-select form-control" id="sandbox">
                <option @if(empty(old('sandbox',$paymentGateway->sandbox))) selected @endif disabled>Select One</option>
                <option @if(old('sandbox',$paymentGateway->sandbox) == 0) selected @endif value="0">Inactive</option>
                <option @if(old('sandbox',$paymentGateway->sandbox) == 1) selected @endif value="1">Active</option>
            </select>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="email" class="col-md-3 col-form-label">Email</label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="email" name="email" class="form-control" id="email" value="{{old('email',$paymentGateway->email)}}" placeholder="Email">
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="website" class="col-md-3 col-form-label">Website</label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="website" class="form-control" id="website" value="{{old('website',$paymentGateway->website)}}" placeholder="Website URL">
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="retail" class="col-md-3 col-form-label">Retail</label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="retail" class="form-control" id="retail" value="{{old('retail',$paymentGateway->retail)}}" placeholder="Retail">
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="publisher_key" class="col-md-3 col-form-label">Publisher Key</label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="publisher_key" class="form-control" id="publisher_key" value="{{old('publisher_key',$paymentGateway->publisher_key)}}" placeholder="Publisher Key">
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="commission" class="col-md-3 col-form-label">Commission</label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="number" name="commission" step="any" class="form-control" id="commission"  value="{{old('commission',$paymentGateway->commission)}}" placeholder="Commission">
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="form-group row">
        <label for="commission_type" class="col-md-3 col-form-label">Commission Type</label>
        <div class="col-md-9">
            <select name="commission_type" class="browser-default custom-select form-control" id="commission_type">
                <option @if(empty(old('commission_type',$paymentGateway->commission_type))) selected @endif disabled>Select One</option>
                <option @if(old('commission_type',$paymentGateway->commission_type) == 0) selected @endif value="0">Include</option>
                <option @if(old('commission_type',$paymentGateway->commission_type) == 1) selected @endif value="1">Exclude</option>
            </select>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="info_text" class="col-md-3 col-form-label">Info<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <textarea name="info_text" class="form-control" id="info_text" required>{{old('info_text',$paymentGateway->info_text)}}</textarea>
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="form-group row">
        <label for="status" class="col-md-3 col-form-label">Status<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <select name="status" class="browser-default custom-select form-control" id="status" required>
                <option @if(empty(old('status',$paymentGateway->status))) selected @endif disabled>Select One</option>
                <option @if(old('status',$paymentGateway->status) == 0) selected @endif value="0">Inactive</option>
                <option @if(old('status',$paymentGateway->status) == 1) selected @endif value="1">Active</option>
            </select>
        </div>
    </div>
</div>

<div class="col-md-12 text-center mt-3">
    <a href="{{url()->previous()}}" class="btn btn-danger btn-rounded waves-effect waves-light">Cancel</a>
    <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light">Submit</button>
</div>
