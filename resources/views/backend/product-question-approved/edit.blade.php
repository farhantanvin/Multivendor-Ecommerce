@extends("backend.layout.layout")
@section("title","reply and approved question")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Reply And Approved Question
                </h4>
            </div>

            <div class="card-body">
                <div class="fl-form">
                    <form method="post" enctype="multipart/form-data" action="{{route('approved-question.store')}}">
                        @csrf
                        <div class="row">

                            <!-- hidden feild input for store database -->

                            <input type="hidden" name="product_id" value="{{$pendingProductComments->product_id}}">
                            <input type="hidden" name="user_id" value="{{$pendingProductComments->user_id}}">
                            <input type="hidden" name="reply_for_id" value="{{$pendingProductComments->id}}">
                            <input type="hidden" name="id" value="{{$pendingProductComments->id}}">


                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label for="comments" class="col-md-9 col-form-label">
                                        <h4>Question:&nbsp; {{$pendingProductComments->comments}}</h4><span
                                            class="text-danger"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group row">
                                    <label for="comments" class="col-md-3 col-form-label">Reply Answer<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" name="comments" class="form-control" id="comments"
                                                value="{{old('comments')}}" data-parsley-required="true"
                                                placeholder="Reply Answer">
                                            <span
                                                class="text-danger">{{$errors->has("comments") ? $errors->first("comments") : ""}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 text-center mt-3">
                                <a href="{{url()->previous()}}"
                                    class="btn btn-danger btn-rounded waves-effect waves-light">Cancel</a>
                                <button type="submit"
                                    class="btn btn-primary btn-rounded waves-effect waves-light">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
