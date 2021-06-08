@extends('Doctor/layout/template')
@section('sidebar')
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('doctor.profile') }}">
                <i class="material-icons">person</i>
                <p>My Profile</p>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="material-icons">content_paste</i>
                <p>Medical Record</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="material-icons">notifications</i>
                <p>Notification</p>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('nametag')
    <a class="navbar-brand" href="javascript:;"><B>MEDICAL RECORDS</B></a>
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

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary row">
                        <div class="col-md-6">
                            <h4 class="card-title">Medical Records</h4>
                            <p class="card-category">Records list</p>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <a href=" " class="btn btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="material-icons">add</i>
                                </span>
                                <span class="text">Tambah Data Baru</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped content-centered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Pasien</th>
                                    <th>Nama Dokter</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>1202183328</td>
                                    <td>Nadya Zahra</td>
                                    <td>Nadya Zahra</td>
                                    <td><a href=" " class="btn btn-danger btn-icon-split ml-2">
                                            <span class="icon text-white-50">
                                                <i class="material-icons">clear</i>
                                            </span>
                                            <span class="text">Delete</span>
                                        </a>
                                        <a href=" " class="btn btn-primary btn-icon-split ml-2">
                                            <span class="icon text-white-50">
                                                <i class="material-icons">edit</i>
                                            </span>
                                            <span class="text">Edit</span>
                                        </a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection