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
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.userManagement') }}">
                <i class="material-icons">content_paste</i>
                <p>User Management</p>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin.history') }}">
                <i class="material-icons">library_books</i>
                <p>History Transaction</p>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('nametag')
    <a class="navbar-brand" href="javascript:;"><B>HISTORY TRANSACTION</B></a>
@endsection

<!-- Content Start Here -->
@section('content')
<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
                <i class="material-icons">library_books</i>
            </div>
            <p class="card-category">Total Transactions</p>
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
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">History Transaction</h4>
                        <p class="card-category">Transaction list</p>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped content-centered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID pasien</th>
                                    <th>ID docter</th>
                                    <th>ID medical record</th>
                                    <th>Total Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaction as $data)
                                <tr>
                                    <td>{{ $data->patient_id }}</td>
                                    <td>{{ $data->doctor_id }}</td>
                                    <td>{{ $data->medical_record_id }}</td>
                                    <td>Rp. {{ $data->price }}</td>
                                    <td><a href="transaction/delete/{{ $data->id }}" class="btn btn-danger btn-icon-split ml-2">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Delete</span>
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