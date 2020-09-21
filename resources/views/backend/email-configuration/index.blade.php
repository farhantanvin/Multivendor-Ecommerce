@extends('backend.layout.layout')
@section('title','Payment Gateway')

@section('content')
    <div class="fl-page-section">
        <div class="fl-pagetitle">
            <div>
                <h4> <i class="icon icon ion-ios-bookmarks-outline"></i>Email Configuration List</h4>
            </div>
            <div class="pagetitle-btn">
                <a href="{{route('email-configuration.create')}}" class="btn  btn-info btn-sm custom-btn-1 btn-1 tx-11 tx-uppercase pd-y-8 pd-x-18 tx-mont tx-medium"> <i class="fas fa-plus-circle"></i> Add New</a>
            </div>
        </div>
        <div class="fl-table-section">
            <div class="table_body">
                <div class="table-responsive">
                    <table class="table fl_table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Configuration Name</th>
                            <th scope="col">Email From</th>
                            <th scope="col">Status</th>
                            <th scope="col">Created By</th>
                            <th scope="col">Updated By</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $i = CustomClass::paginationSerial($emailConfigurations);
                        @endphp
                        @forelse($emailConfigurations as $emailConfiguration)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$emailConfiguration->configuration_name}}</td>
                            <td>{{$emailConfiguration->from_email}}</td>
                            <td class="text-center">
                                @if($emailConfiguration->status == 0)
                                    <span class="btn btn-sm btn-danger p-1">Inactive</span>
                                    @else
                                    <span class="btn btn-sm btn-success p-1">Active</span>
                                @endif
                            </td>
                            <td>{{$emailConfiguration->createdBy->name}}</td>
                            <td>{{$emailConfiguration->updatedBy->name}}</td>
                            <td>{{date('d-m-Y',strtotime($emailConfiguration->created_at))}}</td>
                            <td>{{date('d-m-Y',strtotime($emailConfiguration->updated_at))}}</td>
                            <td>
                                <form method="post" action="{{ route('email-configuration.destroy',$emailConfiguration->id) }}">

                                <a class="status btn btn-sm fl_btn btn-warning" title="" href="{{ route('email-configuration.edit',$emailConfiguration->id) }}"><i class="fa fa-edit" title="Edit"></i></a>
                                    @csrf
                                    @method('delete')
                                <button type="submit" class="delete status btn btn-sm fl_btn btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                            @empty
                            <tr>
                                <td colspan="7">
                                    <h2 class="text-center">No Configuration Found</h2>
                                </td>
                            </tr>
                        @endforelse

                        </tbody>
                        @if(!empty($emailConfigurations->links()))
                        <tfoot>
                        <tr>
                            <td colspan="8">
                                {{$emailConfigurations->links()}}
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
