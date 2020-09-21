@extends('backend.layout.layout')

@section('content')
<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Addmission Form
                </h4>
            </div>
            <div class="card-body">
                <div class="fl-form">
                    <div class="form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="inputPassword3" placeholder="UserName">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Default input -->
                                    <label for="inputPassword3" class="col-md-3 col-form-label">Password <span>*</span></label>
                                    <div class="col-md-9">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Material input -->
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-9">
                                    <div class="md-form mt-0">
                                        <input type="email" class="form-control" id="inputEmail3MD" placeholder="Email">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <!-- Material input -->
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-9">
                                    <div class="md-form mt-0">
                                        <input type="email" class="form-control" id="inputEmail3MD" placeholder="Email">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                            
                                <div class=" form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Select 2</label>
                                    <div class="col-md-9">
                                        <div class="input-group mb-3">
                                            <select class="js-example-basic-single browser-default custom-select form-control" name="state" multiple="">
                                                <!--<option selected>Choose...</option>-->
                                                <option value="AL">Alabama</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AL">Alabama</option>
                                                <option value="WY">Wyoming</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AL">Alabama</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Select </label>
                                    <div class="col-md-9">
                                        <select class="browser-default custom-select form-control">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="form-label" class="col-md-3  control-label ">Start Date <span style="color:red">*</span></label>
                                    <div class="col-md-9">
                                        <input autocomplete="off"  type="text" name="start_date" value="" class="form-control fc-datepicker " placeholder="Start Date" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center mt-3">
                                <button type="button" class="btn btn-info btn-rounded waves-effect waves-light">Info</button>
                                <button type="button" class="btn btn-default btn-rounded waves-effect waves-light">Info</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
@endsection