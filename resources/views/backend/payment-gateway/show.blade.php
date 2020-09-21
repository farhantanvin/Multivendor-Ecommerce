@extends('backend.layout.layout')
@section('title','Payment Gateway')

@section('content')
    <div class="fl-page-section">
        <div class="fl-pagetitle">
            <div>
                <h4> <i class="icon icon ion-ios-bookmarks-outline"></i>Payment Gateway Details</h4>
            </div>
        </div>
        <div class="fl-table-section">
            <div class="table_body">
                <div class="table-responsive">
                    <table class="table fl_table">
                        <tr>
                            <th>Name:</th>
                            <td>{{$paymentGateway->name}}</td>
                            <th>Key/ID:</th>
                            <th>{{$paymentGateway->key_id}}</th>
                        </tr>
                        <tr>
                            <th>Secret Token:</th>
                            <td>{{$paymentGateway->secret_token}}</td>
                            <th>Info Text:</th>
                            <th>{{$paymentGateway->info_text}}</th>
                        </tr>
                        <tr>
                            <th>Sandbox:</th>
                            <td>
                                @if($paymentGateway->sandbox == 0)
                                <label class="bg-danger text-white p-1">Inactive</label>
                                    @else
                                    <label class="bg-success text-white p-1">Active</label>
                                @endif
                            </td>
                            <th>Email:</th>
                            <th>{{$paymentGateway->email}}</th>
                        </tr>
                        <tr>
                            <th>Website:</th>
                            <td>{{$paymentGateway->website}}</td>
                            <th>Retail:</th>
                            <th>{{$paymentGateway->retail}}</th>
                        </tr>
                        <tr>
                            <th>Publisher Key:</th>
                            <td>{{$paymentGateway->publisher_key}}</td>
                            <th>Commission:</th>
                            <th>{{$paymentGateway->commission}}</th>
                        </tr>
                        <tr>
                            <th>Commission Type:</th>
                            <td>
                                @if($paymentGateway->commission_type == 0)
                                    <label class="bg-default text-white p-1">Include</label>
                                @else
                                    <label class="bg-primary text-white p-1">Exclude</label>
                                @endif
                            </td>
                            <th>Status:</th>
                            <th>
                                @if($paymentGateway->status == 0)
                                    <label class="bg-danger text-white p-1">Inactive</label>
                                @else
                                    <label class="bg-success text-white p-1">Active</label>
                                @endif
                            </th>
                        </tr>
                        <tr>
                            <td class="text-right" colspan="4">
                                <a href="{{url()->previous()}}" class="btn btn-primary waves-effect waves-light btn-sm">Back</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
    @endsection
