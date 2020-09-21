@extends('backend.layout.layout')
@section('title','Payment Gateway')

@section('content')
    <div class="fl-page-section">
        <div class="fl-pagetitle">
            <div>
                <h4> <i class="icon icon ion-ios-bookmarks-outline"></i>Payment Gateway List</h4>
            </div>
            <div class="pagetitle-btn">
                <a href="{{route('payment-gateway.create')}}" class="btn  btn-info btn-sm custom-btn-1 btn-1 tx-11 tx-uppercase pd-y-8 pd-x-18 tx-mont tx-medium"> <i class="fas fa-plus-circle"></i> Add New</a>
            </div>
        </div>
        <div class="fl-table-section">
            <div class="table_body">
                <div class="table-responsive">
                    <table class="table fl_table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Info Text</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $i = CustomClass::paginationSerial($paymentGateways);
                        @endphp
                        @forelse($paymentGateways as $paymentGateway)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$paymentGateway->name}}</td>
                            <td>{{$paymentGateway->info_text}}</td>
                            <td class="text-center">
                                @if($paymentGateway->status == 0)
                                    <span class="btn btn-sm btn-danger p-1">Inactive</span>
                                    @else
                                    <span class="btn btn-sm btn-success p-1">Active</span>
                                @endif
                            </td>
                            <td>{{date('d-m-Y',strtotime($paymentGateway->created_at))}}</td>
                            <td>{{date('d-m-Y',strtotime($paymentGateway->updated_at))}}</td>
                            <td>
                                <form method="post" action="{{ route('payment-gateway.destroy',$paymentGateway->id) }}">

                                    <a class="status btn btn-sm fl_btn btn-success" title="" href="{{ route('payment-gateway.show',$paymentGateway->id) }}"><i class="fa fa-eye" title="Show"></i></a>

                                <a class="status btn btn-sm fl_btn btn-warning" title="" href="{{ route('payment-gateway.edit',$paymentGateway->id) }}"><i class="fa fa-edit" title="Edit"></i></a>
@csrf
                                    @method('delete')
                                <button type="submit" class="delete status btn btn-sm fl_btn btn-danger" title="Delete"><i class="fa fa-trash"></i></button>

                                </form>
                            </td>
                        </tr>
                            @empty
                            <tr>
                                <td colspan="7">
                                    <h2 class="text-center">No Gateway Found</h2>
                                </td>
                            </tr>
                        @endforelse

                        </tbody>
                        @if(!empty($paymentGateways->links()))
                        <tfoot>
                        <tr>
                            <td colspan="7">
                                {{$paymentGateways->links()}}
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
