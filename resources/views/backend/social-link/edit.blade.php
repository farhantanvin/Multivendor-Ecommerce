@extends("backend.layout.layout")
@section("title","Edit Social Link")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Edit Social Link
                </h4>
            </div>
            <div class="card-body">
                <div class="fl-form">
                    <form method="post" action="{{ route('social.link.update')}}">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Facebook Url</label>
                                <input type="url" class="form-control {{$errors->has("fb_link") ? "is-invalid":""}}"
                                    id="fb_link" name="fb_link" placeholder="Facebook url"
                                    value="{{old('fb_link',$socialLink->fb_link)}}">
                                <span class="text-danger">
                                    {{$errors->has("fb_link") ? $errors->first("fb_link") : ""}} </span>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Twitter Url</label>
                                <input type="url"
                                    class="form-control {{$errors->has("twetter_link") ? "is-invalid":""}}"
                                    id="twetter_link" name="twetter_link" placeholder="Twitter url"
                                    value="{{old('twetter_link',$socialLink->twetter_link)}}">
                                <span class="text-danger">
                                    {{$errors->has("fb_link") ? $errors->first("fb_link") : ""}} </span>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Instagram Url</label>
                                <input type="url"
                                    class="form-control {{$errors->has("instagram_link") ? "is-invalid":""}}"
                                    id="twetter_link" name="instagram_link" placeholder="Instagram url"
                                    value="{{old('instagram_link',$socialLink->instagram_link)}}">
                                <span class="text-danger">
                                    {{$errors->has("instagram_link") ? $errors->first("instagram_link") : ""}}
                                </span>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Pinterest Url</label>
                                <input type="url"
                                    class="form-control {{$errors->has("pintarest_link") ? "is-invalid":""}}"
                                    id="pintarest_link" name="pintarest_link" placeholder="Pinterest url"
                                    value="{{old('pintarest_link',$socialLink->pintarest_link)}}">
                                <span class="text-danger">
                                    {{$errors->has("instagram_link") ? $errors->first("instagram_link") : ""}}
                                </span>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">LinkeDin Url</label>
                                <input type="url"
                                    class="form-control {{$errors->has("linkedin_link") ? "is-invalid":""}}"
                                    id="linkedin_link" name="linkedin_link" placeholder="LinkeDin url"
                                    value="{{old('linkedin_link',$socialLink->linkedin_link)}}">
                                <span class="text-danger">
                                    {{$errors->has("linkedin_link") ? $errors->first("linkedin_link") : ""}} </span>
                            </div>
                        </div>

                        <div class="col-md-12 text-center mt-3">
                            <a href="{{url()->previous()}}"
                                class="btn btn-danger btn-rounded waves-effect waves-light">Cancel</a>
                            <button type="submit"
                                class="btn btn-primary btn-rounded waves-effect waves-light">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
