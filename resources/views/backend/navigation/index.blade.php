@extends("backend.layout.layout")
@section("title","Navigation List")
@section("content")

<div class="fl-page-section">
    <div class="fl-pagetitle">
        <div>
            <h4> <i class="icon icon ion-ios-bookmarks-outline"></i> Navigation List</h4>
        </div>
        <div class="pagetitle-btn">
            <a href="{{route('navigation.create')}}"
                class="btn  btn-info btn-sm custom-btn-1 btn-1 tx-11 tx-uppercase pd-y-8 pd-x-18 tx-mont tx-medium"> <i
                    class="fas fa-plus-circle"></i> Add New</a>
        </div>
    </div>
    <div class="fl-table-section">
        <div class="table_body">
            <div class="table-responsive">
                <table class="table fl_table">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Menu Position</th>
                            <th>Type</th>
                            <th>Serial</th>
                            <th>Url</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = \App\CustomClass\OwnLibrary::paginationSerial($navigation)
                        @endphp
                        @forelse($navigation as $item)
                        <tr>
                            <td class="text-center">{{$i++}}</td>
                            <td class="text-center">{{ $item->name }}</td>
                            <td class="text-center">
                                @if($item->position ==1)
                                {{'Header Menu'}}

                                @elseif($item->position == 2)
                                {{'Middle'}}
                                @elseif($item->position == 3)
                                {{'Footer Menu'}}
                                @endif
                            </td>
                            <td class="text-center">
                                @if($item->type = 1)
                                {{'Page'}}
                                @else
                                {{'Custom Url'}}
                                @endif
                            </td>
                            <td class="text-center">{{$item->serial}}</td>
                            <td class="text-center">{{$item->url}}</td>
                            <td class="text-center">
                                @if($item->status == 1)
                                <button class="btn btn-sm btn-success">Active</button>
                                @else
                                <button class="btn btn-sm btn-danger">Inactive</button>
                                @endif
                            </td>
                            <td class="text-center">
                                <form method="post" action="{{ route('navigation.destroy',$item->id) }}">
                                    @method('delete')
                                    @csrf

                                    &nbsp;<a class="status btn btn-sm fl_btn btn-warning" title=""
                                        href="{{route('navigation.edit',$item->id)}}"><i class="fa fa-edit"></i></a>
                                    <button type="submit" class="status btn btn-sm fl_btn btn-danger delete"
                                        title="Delete">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">Nothing Found</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>

                {{$navigation->links("backend.include.pagination")}}

            </div>

        </div>

    </div>
</div>





@endsection
