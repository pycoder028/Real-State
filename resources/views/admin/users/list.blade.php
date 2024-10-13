@extends('admin.admin_dashboard')
@section('content')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users List</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Registerd Users</h4>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th> 
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Photo</th>
                                    <th>Phone</th>
                                    <th>Website</th>
                                    <th>Address</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getRecord as $value)
                                <tr class="table-info text-dark">
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->username }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>
                                        @if(!empty($value->photo))
                                        <img src="{{ asset('upload/'.$value->photo) }}" alt="Image" style="width:100%;height:100%;">
                                        @endif
                                    </td>
                                    <td>{{ $value->phone }}</td>
                                    <td>{{ $value->website }}</td>
                                    <td>{{ $value->address }}</td>
                                    <td>
                                        @if($value->role == 'admin')
                                            <span class="badge bg-danger">Admin</span>
                                        @elseif($value->role == 'agent')
                                            <span class="badge bg-warning">Agent</span>
                                        @elseif($value->role == 'user')
                                            <span class="badge bg-success">User</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($value->status == 'active')
                                            <span class="badge bg-success">Active</span>
                                            @else
                                            <span class="badge bg-info">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="padding: 15px; float: right;">
                        {{ $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links()  }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection