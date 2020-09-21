@csrf
<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="configuration_name" class="col-md-3 col-form-label">Configuration Name<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="configuration_name" class="form-control" id="configuration_name" value="{{old('configuration_name',$emailConfiguration->configuration_name)}}" placeholder="" required data-parsley-maxlength="50">
                <span class="text-danger">@error('configuration_name') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="mail_engine" class="col-md-3 col-form-label">Mail Engine<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="mail_engine" class="form-control" id="mail_engine" value="{{old('mail_engine',$emailConfiguration->mail_engine)}}" placeholder="" required data-parsley-maxlength="30">
                <span class="text-danger">@error('mail_engine') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="mail_host" class="col-md-3 col-form-label">Mail Host<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="mail_host" class="form-control" id="mail_host" value="{{old('mail_host',$emailConfiguration->mail_host)}}" placeholder="" required data-parsley-maxlength="100">
                <span class="text-danger">@error('mail_host') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="mail_port" class="col-md-3 col-form-label">Mail Port<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="mail_port" class="form-control" id="mail_port" value="{{old('mail_port',$emailConfiguration->mail_port)}}" placeholder="" required data-parsley-maxlength="10">
                <span class="text-danger">@error('mail_port') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="encryption" class="col-md-3 col-form-label">Encryption<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="encryption" class="form-control" id="encryption" value="{{old('encryption',$emailConfiguration->encryption)}}" placeholder="" required data-parsley-maxlength="20">
                <span class="text-danger">@error('encryption') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="username" class="col-md-3 col-form-label">User Name<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="username" class="form-control" id="username" value="{{old('username',$emailConfiguration->username)}}" placeholder="" required data-parsley-maxlength="30">
                <span class="text-danger">@error('username') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="password" class="col-md-3 col-form-label">Password<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="password" class="form-control" id="password" value="{{old('password',$emailConfiguration->password)}}" placeholder="" required data-parsley-maxlength="50">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="from_email" class="col-md-3 col-form-label">From Email<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="email" name="from_email" class="form-control" id="from_email" value="{{old('from_email',$emailConfiguration->from_email)}}" placeholder="" required>
                <span class="text-danger">@error('from_email') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group row">
        <!-- Material input -->
        <label for="from_name" class="col-md-3 col-form-label">From Name<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <div class="md-form mt-0">
                <input type="text" name="from_name" class="form-control" id="from_name" value="{{old('from_name',$emailConfiguration->from_name)}}" placeholder="" required>
                <span class="text-danger">@error('from_name') {{$message}} @enderror</span>
            </div>
        </div>
    </div>
</div>

<div class="col-6">
    <div class="form-group row">
        <label for="status" class="col-md-3 col-form-label">Status<span class="text-danger">*</span></label>
        <div class="col-md-9">
            <select name="status" class="browser-default custom-select form-control" id="status" required>
                <option @if(old('status') == null  && $emailConfiguration->status == null) selected @endif>Select One</option>
                <option @if(old('status',$emailConfiguration->status) == 0) selected @endif value="0">Inactive</option>
                <option @if(old('status',$emailConfiguration->status) == 1) selected @endif value="1">Active</option>
            </select>
            <span class="text-danger">@error('status') {{$message}} @enderror</span>
        </div>
    </div>
</div>

<div class="col-md-12 text-center mt-3">
    <a href="{{url()->previous()}}" class="btn btn-danger btn-rounded waves-effect waves-light">Cancel</a>
    <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light">Submit</button>
</div>
