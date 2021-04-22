@extends('Admin/layout/template')
@section('sidebar')
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.profile') }}">
                <i class="material-icons">person</i>
                <p>My Profile</p>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="">
                <i class="material-icons">content_paste</i>
                <p>User Management</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.history') }}">
                <i class="material-icons">library_books</i>
                <p>Hitory Transaction</p>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('nametag')
    <a class="navbar-brand" href="javascript:;"><B>USER MANAGEMENT</B></a>
@endsection

<!-- Content Start Here -->
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="material-icons">close</i>
    </button>
    <span>
        <strong>{{ $message }}</strong>    
    </span>
</div>
@elseif ($message = Session::get('failed'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <i class="material-icons">close</i>
        </button>
        <span>
            <strong>{{ $message }}</strong>    
        </span>
    </div>
@endif
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
                <i class="material-icons">person</i>
            </div>
            <p class="card-category">Total Accounts</p>
            <h1 class="card-title m-2">{{ $count }}</h1>
        </div>
        <div class="card-footer"></div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary row">
                        <div class="col-md-6">
                            <h4 class="card-title">User Account</h4>
                            <p class="card-category">Account list</p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <a href="{{ route('admin.addAccount') }}" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah Akun Baru</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped content-centered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Create at</th>
                                    <th>Update at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($account as $data)
                                <tr>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->role }}</td>
                                    <td>{{ $data->created_at }}</td>
                                    <td>{{ $data->updated_at }}</td>
                                    <td><a href="account/delete/{{ $data->id }}" class="btn btn-danger btn-icon-split ml-2">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Delete</span>
                                        </a>
                                        <a href="" class="btn btn-primary btn-icon-split ml-2">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-pen"></i>
                                            </span>
                                            <span class="text">Edit</span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection