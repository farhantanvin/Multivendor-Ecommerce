@extends("backend.layout.layout")
@section("title","Module List")
@section("content")

<div class="fl-page-section">
    <div class="fl-pagetitle">
        <div>
            <h4> <i class="icon icon ion-ios-bookmarks-outline"></i>Module List</h4>
        </div>
        <div class="pagetitle-btn">
            <a href="{{route('module.create')}}" class="btn btn-primary float-right text-white">
                <i class="fas fa-plus-circle"></i>
                Add New
            </a>
        </div>
    </div>
    <div class="fl-table-section">
        <div class="table_body">
            <div class="table-responsive">
               
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Id</th>
                        <th>Created By</th>
                        <th>Updated By</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($modules as $module)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $module->name }}</td>
                        <td>{{ $module->description }}</td>
                        <td>{{$module->id}}</td>
                        <td>{{ $module->createdBy->name ?? '' }}</td>
                        <td>{{ $module->updatedBy->name ?? '' }}</td>
                        <td class="text-center">
                            @if($module->status == 1)
                                <button class="btn btn-xs btn-success">Active</button>
                                @else
                                <button class="btn btn-xs btn-danger">Inactive</button>
                                @endif
                        </td>
                        <td class="text-center">
                            {{-- @if(!empty($aclList[4][3]) || !empty($aclList[4][4])) --}}
                            <form method="post" action="{{ route('module.destroy',$module->id) }}">
                                {{-- @if(!empty($aclList[4][3])) --}}
                                <a class="btn btn-xs btn-warning text-white" href="{{route('module.edit',$module->id)}}" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                {{-- @endif --}}
                                    {{-- @if(!empty($aclList[4][4])) --}}
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
                            <td colspan="8" class="text-center">Nothing Found</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
                {{$modules->links("backend.include.pagination")}}
            </div>

        </div>

    </div>
</div>

@endsection
