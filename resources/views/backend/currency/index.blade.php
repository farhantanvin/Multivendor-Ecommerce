@extends('backend.layout.layout')
@section('title','Payment Gateway')

@section('content')
    <div class="fl-page-section">
        <div class="fl-pagetitle">
            <div>
                <h4> <i class="icon icon ion-ios-bookmarks-outline"></i>Payment Gateway List</h4>
            </div>
            <div class="pagetitle-btn">
                <a href="{{route('currencys.create')}}" class="btn  btn-info btn-sm custom-btn-1 btn-1 tx-11 tx-uppercase pd-y-8 pd-x-18 tx-mont tx-medium"> <i class="fas fa-plus-circle"></i> Add New</a>
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
                            <th scope="col">Currency Symbol</th>
                            <th scope="col">Multiplication of USD</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $i = CustomClass::paginationSerial($currencys);
                        @endphp
                        @forelse($currencys as $currency)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$currency->name}}</td>
                            <td>{{$currency->symbol}}</td>
                            <td>{{$currency->multiplication_of_doller}}</td>
                            <td class="text-center">
                                @if($currency->status == 0)
                                    <span class="btn btn-sm btn-danger p-1">Inactive</span>
                                    @else
                                    <span class="btn btn-sm btn-success p-1">Active</span>
                                @endif
                            </td>
                            <td>{{date('d-m-Y',strtotime($currency->created_at))}}</td>
                            <td>{{date('d-m-Y',strtotime($currency->updated_at))}}</td>
                            <td>
                                <form method="post" action="{{ route('currencys.destroy',$currency->id) }}">

                                <a class="status btn btn-sm fl_btn btn-warning" title="" href="{{ route('currencys.edit',$currency->id) }}"><i class="fa fa-edit" title="Edit"></i></a>
@csrf
                                    @method('delete')
                                <button type="submit" class="delete status btn btn-sm fl_btn btn-danger" title="Delete"><i class="fa fa-trash"></i></button>

                                </form>
                            </td>
                        </tr>
                            @empty
                            <tr>
                                <td colspan="7">
                                    <h2 class="text-center">No Currency Found</h2>
                                </td>
                            </tr>
                        @endforelse

                        </tbody>
                        @if(!empty($currencys->links()))
                        <tfoot>
                        <tr>
                            <td colspan="8">
                                {{$currencys->links()}}
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
