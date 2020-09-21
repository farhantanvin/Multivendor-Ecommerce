@extends("backend.layout.layout")
@section("title","Users List")
@section("content")

<div class="fl-page-section">
    <div class="fl-pagetitle">
        <div>
            <h4> <i class="icon icon ion-ios-bookmarks-outline"></i> Users List</h4>
        </div>
        <div class="pagetitle-btn">
          
            <a href="{{route('user.create')}}" class="btn btn-primary float-right text-white">
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
                        <th>Email</th>
                        <th>role</th>
                        <th>Created By</th>
                        <th>Updated By</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{$user->role->name ?? ''}}</td>
                            <td>{{$user->creator->name ?? ''}}</td>
                            <td>{{$user->updator->name ?? ''}}</td>
                            <td class="text-center">
                                @if($user->status == 1)
                                    <button class="btn btn-xs btn-success">Active</button>
                                @else
                                    <button class="btn btn-xs btn-danger">Inactive</button>
                                @endif
                            </td>
                            <td class="text-center">
                                {{-- @if(!empty($aclList[6][3]) || !empty($aclList[6][4])) --}}
                                    <form method="post" action="{{ route('user.destroy',$user->id) }}">
                                        {{-- @if(!empty($aclList[6][3])) --}}
                                            <a class="btn btn-xs btn-warning text-white" href="{{route('user.edit',$user->id)}}" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                        {{-- @endif --}}
                                        {{-- @if(!empty($aclList[6][4])) --}}
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
                            <td colspan="10" class="text-center">Nothing Found</td>
                        </tr>
                    @endforelse

                    </tbody>
                </table>
                {{$users->links("backend.include.pagination")}}
            </div>

        </div>

    </div>
</div>

@endsection
