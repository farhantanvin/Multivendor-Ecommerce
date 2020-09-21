@extends("backend.layout.layout")
@section("title","edit offer")
@section("content")

<div class="fl-page-section">
    <div class="fl-input-section">
        <div class="card card_main_body">

            <div class="card-header">
                <h4>
                    <i class="fas fa-plus-circle"></i>
                    Edit Offer
            </div>
            <div class="card-body">
                <div class="fl-form">
                    <form method="post" enctype="multipart/form-data" action="{{route('offer.update',$offer->id)}}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="text" class="col-md-3 col-form-label">Offer Name</span></label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="text" placeholder="Offer Name"
                                                name="offer_name" value="{{old("offer_name",$offer->offer_name)}}">
                                            <span class="text-danger">
                                                {{$errors->has("offer_name") ? $errors->first("offer_name") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="text" class="col-md-3 col-form-label">Offer discount
                                        Amount</span></label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="text" placeholder="Offer Amount"
                                                name="offer_amount"
                                                value="{{old("offer_amount",$offer->offer_amount)}}">
                                            <span class="text-danger">
                                                {{$errors->has("offer_amount") ? $errors->first("offer_amount") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="datepicker" class="col-md-3 col-form-label">Start Date
                                    </label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="datepicker"
                                                placeholder="Start Date" name="start_date"
                                                value="{{old("start_date",$offer->start_date)}}">
                                            <span class="text-danger">
                                                {{$errors->has("start_date") ? $errors->first("start_date") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="datepicker1" class="col-md-3 col-form-label">End Date
                                    </label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <input type="text" class="form-control" id="datepicker1"
                                                placeholder="Start Date" name="end_date"
                                                value="{{old("end_date",$offer->end_date)}}">
                                            <span class="text-danger">
                                                {{$errors->has("end_date") ? $errors->first("end_date") : ""}}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class=" form-group row">
                                    <label for="inputEmail3MD" class="col-md-3 col-form-label">Status</label>
                                    <div class="col-md-9">
                                        <div class="md-form mt-0">
                                            <div class="input-group mb-3">
                                                <select
                                                    class="js-example-basic-single browser-default custom-select form-control"
                                                    name="status">
                                                    <option value="0"
                                                        {{(old("status") == 0 ||$offer->status == 0 ) ? "selected" : "" }}>
                                                        Inactive</option>
                                                    <option value="1"
                                                        {{(old("status") == 1 || $offer->status == 1 ) ? "selected" : "" }}>
                                                        Active</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 text-center mt-3">
                                <a href="{{url()->previous()}}"
                                    class="btn btn-danger btn-rounded waves-effect waves-light">Cancel</a>
                                <button type="submit"
                                    class="btn btn-primary btn-rounded waves-effect waves-light">Update</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    //$.("#datepicker").datepicker({ dateFormat: "yy-mm-dd" });
    $( function() {
    $( "#datepicker" ).datepicker({ dateFormat: "MM-dd-YY" });
  } );

  $( function() {
$( "#datepicker1" ).datepicker({ dateFormat: "MM-dd-YY" });
} );
</script>

@endsection
