@extends("backend.layout.layout")
@section("title","edit category")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Role Edit 
                </h4>
            </div>

            <div class="card-body">
                <div class="fl-form">
                    <form method="post" action="{{route("role.update",$role->id)}}">
                        @method('put')
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control {{$errors->has("name") ? "is-invalid":""}}" id="name" name="name" placeholder="Enter Role Name" value="{{old('name',$role->name)}}">
                                <span class="text-danger"> {{$errors->has("name") ? $errors->first("name") : ""}} </span>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="info" placeholder="Enter Role Description">{{old('description',$role->info)}}</textarea>
                            </div>

                            <div class="form-group select2-parent">
                                <label>Status</label>
                                <select name="status" class="form-control single-select2" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                    <option value="0" {{(old("status") == 0 || $role->status == 0 ) ? "selected" : "" }}>Inactive</option>
                                    <option value="1" {{(old("status") == 1 || $role->status == 1 ) ? "selected" : "" }}>Active</option>
                                </select>
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
