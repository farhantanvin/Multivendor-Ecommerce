@extends('backend.layout.layout')

@section('content')
<div class="fl-page-section">
    <div class="fl-pagetitle">
        <div>
            <h4> <i class="icon icon ion-ios-bookmarks-outline"></i> Student List</h4>
        </div>
        <div class="pagetitle-btn">
            <a href="http://localhost/ciid/public/student/create" class="btn  btn-info btn-sm custom-btn-1 btn-1 tx-11 tx-uppercase pd-y-8 pd-x-18 tx-mont tx-medium"> <i class="fas fa-plus-circle"></i> Add New</a>
        </div>
    </div>
    <div class="fl-table-section">
        <div class="table_body">
            <div class="table-responsive">
                <table class="table fl_table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Heading</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>
                            <a target="_blank" class="status btn btn-sm fl_btn btn-success" title="" href=""><i class="fa fa-eye"></i></a>
                            <a class="status btn btn-sm fl_btn btn-warning" title="" href=""><i class="fa fa-edit"></i></a>
                            <a class="status btn btn-sm fl_btn btn-danger" title="" href=""><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>
                            <a target="_blank" class="status btn btn-sm fl_btn btn-success" title="" href=""><i class="fa fa-eye"></i></a>
                            <a class="status btn btn-sm fl_btn btn-warning" title="" href=""><i class="fa fa-edit"></i></a>
                            <a class="status btn btn-sm fl_btn btn-danger" title="" href=""><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>Cell</td>
                        <td>
                            <a target="_blank" class="status btn btn-sm fl_btn btn-success" title="" href=""><i class="fa fa-eye"></i></a>
                            <a class="status btn btn-sm fl_btn btn-warning" title="" href=""><i class="fa fa-edit"></i></a>
                            <a class="status btn btn-sm fl_btn btn-danger" title="" href=""><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>
@endsection