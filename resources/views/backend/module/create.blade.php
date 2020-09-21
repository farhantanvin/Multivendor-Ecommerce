@extends("backend.layout.layout")
@section("title","create Role")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Create Module
                </h4>
            </div>

            <div class="card-body">
                <div class="fl-form">
                    <form method="post" action="{{route("module.store")}}">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control {{$errors->has("name") ? "is-invalid":""}}" id="name" name="name" placeholder="Enter Activity Name" value="{{old("name")}}">
                                <span class="text-danger"> {{$errors->has("name") ? $errors->first("name") : ""}} </span>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Enter Activity Description">{{old("description")}}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">Activity</label>
                                @foreach($activites as $activity)
                                <div class="icheck-success">
                                    <input name="activities[]" type="checkbox" id="{{ $activity->id }}" value="{{ $activity->id }}">
                                    <label class="ml-3 font-weight-normal text-gray" for="{{ $activity->id }}">
                                        &nbsp; &nbsp; &nbsp; {{$activity->name}}
                                    </label>
                                </div>
                                    @endforeach

                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-dark">Submit</button>
                            <button type="button" class="btn btn-default cancel">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

