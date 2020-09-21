@extends('backend.layout.layout')
@section('title','Vendor Subscription Plans')

@section('content')
    <div class="fl-page-section">
        <div class="fl-pagetitle">
            <div>
                <h4> <i class="icon icon ion-ios-bookmarks-outline"></i> Vendor Subscription Plans List</h4>
            </div>
            <div class="pagetitle-btn">
                <a href="{{route('vendor-subscription-plan.create')}}" class="btn  btn-info btn-sm custom-btn-1 btn-1 tx-11 tx-uppercase pd-y-8 pd-x-18 tx-mont tx-medium"> <i class="fas fa-plus-circle"></i> Add New</a>
            </div>
        </div>
        <div class="fl-table-section">
            <div class="table_body">
                <div class="table-responsive">
                    <table class="table fl_table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Duration</th>
                            <th scope="col">Product Limitation</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $i = CustomClass::paginationSerial($vendorPlans);
                        @endphp
                        @forelse($vendorPlans as $vendorPlan)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$vendorPlan->title}}</td>
                            <td>{{$vendorPlan->price}}</td>
                            <td>{{$vendorPlan->duration}}</td>
                            <td>{{$vendorPlan->product_limitation}}</td>
                            <td>{{$vendorPlan->description}}</td>
                            <td class="text-center">
                                @if($vendorPlan->status == 0)
                                    <span class="btn btn-sm btn-danger p-1">Inactive</span>
                                    @else
                                    <span class="btn btn-sm btn-success p-1">Active</span>
                                @endif
                            </td>
                            <td>{{date('d-m-Y',strtotime($vendorPlan->created_at))}}</td>
                            <td>{{date('d-m-Y',strtotime($vendorPlan->updated_at))}}</td>
                            <td>
                                <form method="post" action="{{ route('vendor-subscription-plan.destroy',$vendorPlan->id) }}">

                                <a class="status btn btn-sm fl_btn btn-warning" title="" href="{{ route('vendor-subscription-plan.edit',$vendorPlan->id) }}"><i class="fa fa-edit" title="Edit"></i></a>
@csrf
                                    @method('delete')
                                <button type="submit" class="delete status btn btn-sm fl_btn btn-danger" title="Delete"><i class="fa fa-trash"></i></button>

                                </form>
                            </td>
                        </tr>
                            @empty
                            <tr>
                                <td colspan="10">
                                    <h2 class="text-center">No Subscription Plans Found</h2>
                                </td>
                            </tr>
                        @endforelse

                        </tbody>
                        @if(!empty($vendorPlans->links()))
                        <tfoot>
                        <tr>
                            <td colspan="10">
                                {{$vendorPlans->links()}}
                            </td>
                        </tr>
                        </tfoot>
                        @endif
                    </table>
                </div>
            </div>

        </div>
    </div>
    @endsection
