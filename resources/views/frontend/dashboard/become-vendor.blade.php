@extends('frontend.dashboard.layout.layout')
@section('user-d-title','User Details')
@section('user-d-content')
    <div class="customer_d_tab_right">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane  active" id="d_customer_info">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d_customer_row_title">
                            <p>Subscription Plans</p>
                        </div>
                        <div class="d_customer_row_info">
                            <form method="post" action="{{route('frontend.vendor.subscription')}}">
                                @csrf
                            <table class="table">
                                <tr class="text-center">
                                    <th>Select Plan</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Duration</th>
                                    <th>Product Limitation</th>
                                </tr>
                                @forelse($vendorPlans as $vendorPlan)
                                <tr class="text-center">
                                    <td>
                                        <input type="radio" name="plan" value="{{$vendorPlan->id}}" required>
                                    </td>
                                    <td>{{$vendorPlan->title}}</td>
                                    <td>{{($vendorPlan->price == 0) ? 'Free' : $vendorPlan->price}}</td>
                                    <td>{{$vendorPlan->duration}} Days</td>
                                    <td>{{$vendorPlan->product_limitation}} Products</td>
                                </tr>
                                    @empty
                                    <tr class="text-center">
                                        <th colspan="5">No Subscription Plans Found</th>
                                    </tr>
                                @endif
                                @if(count($vendorPlans) > 0)
                                    <tr>
                                        <td class="text-right" colspan="5">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </td>
                                    </tr>
                                    @endif
                            </table>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
