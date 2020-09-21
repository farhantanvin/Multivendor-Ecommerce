@extends("backend.layout.layout")
@section("title","edit module")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Module Edit 
                </h4>
            </div>

            <div class="card-body">
                <div class="fl-form">
                    <form method="post" action="{{route("module.update",$module->id)}}">
                        @csrf
                        @method('put')
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control {{$errors->has("name") ? "is-invalid":""}}" id="name" name="name" placeholder="Enter Activity Name" value="{{old("name",$module->name)}}">
                                <span class="text-danger"> {{$errors->has("name") ? $errors->first("name") : ""}} </span>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Enter Activity Description">{{old("description",$module->description)}}</textarea>
                            </div>

                            <div class="form-group select2-parent">
                                <label>Status</label>
                                <select name="status" class="form-control single-select2" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option value="0" {{(old("status") == 0 || $module->status == 0 ) ? "selected" : "" }}>Inactive</option>
                                    <option value="1" {{(old("status") == 1 || $module->status == 1 ) ? "selected" : "" }}>Active</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Activity</label>
                                @foreach($activites as $activity)
                                <div class="icheck-success">
                                    <input name="activities[]" type="checkbox" id="{{ $activity->id }}" value="{{ $activity->id }}"

                                           @foreach($modules_activities as $modules_activity) @if($modules_activity->activity_id==$activity->id) checked @endif @endforeach
                                    >
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

