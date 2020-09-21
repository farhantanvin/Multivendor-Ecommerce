@extends("backend.layout.layout")
@section("title","Role List")
@section("content")

<div class="fl-page-section">
    <div class="fl-pagetitle">
        <div>
            <h4> <i class="icon icon ion-ios-bookmarks-outline"></i> Role List</h4>
        </div>
        <div class="pagetitle-btn">
            <a href="{{route('role.create')}}"
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
                            <th>Description</th>
                            <th>Created By</th>
                            <th>Updated By</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($roles as $role)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->info }}</td>
                            <td>{{ $role->createdBy->name ?? '' }}</td>
                            <td>{{ $role->updatedBy->name ?? '' }}</td>
                            <td class="text-center">
                                @if($role->status == 1)
                                    <button class="btn btn-xs btn-success">Active</button>
                                @else
                                    <button class="btn btn-xs btn-danger">Inactive</button>
                                @endif
                            </td>
                            <td class="text-center">
                                {{-- @if(!empty($aclList[1][3]) || !empty($aclList[1][4])) --}}
                                    <form method="post" action="{{ route('role.destroy',$role->id) }}">
                                        {{-- @if(!empty($aclList[1][3])) --}}
                                            <a class="btn btn-xs btn-warning text-white" href="{{route('role.edit',$role->id)}}" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        {{-- @endif --}}
                                        {{-- @if(!empty($aclList[1][4])) --}}
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-xs btn-danger text-white delete" title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        {{-- @endif --}}
                                    </form>
                                {{-- @endif --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Nothing Found</td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
                {{$roles->links("backend.include.pagination")}}
            </div>

        </div>

    </div>
</div>

@endsection
