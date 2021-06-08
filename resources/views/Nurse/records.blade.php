@extends('Nurse/layout/template')
@section('sidebar')
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('nurse.dashboard') }}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('nurse.profile') }}">
          <i class="material-icons">person</i>
          <p>User Profile</p>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="">
          <i class="material-icons">assignment</i>
          <p>Medical Record</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="material-icons">single_bed</i>
          <p>Kamar Inap</p>
        </a>
      </li>
    </ul>
  </div>
@endsection

@section('nametag')
    <a class="navbar-brand" href="javascript:;"><B>MEDICAL RECORDS</B></a>
@endsection

@section('content')
<!-- Content Start Here -->
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-info">
          <h4 class="card-title">Medical Records</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-body">
            <tbody>
              <table class="table table-bordered">
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
                            <td>
                                <button type="button" class="btn btn-info">Detail</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1202183328</td>
                            <td>Nadya Zahra</td>
                            <td>Nadya Zahra</td>
                            <td>
                                <button type="button" class="btn btn-info">Detail</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    
                </tbody>
            </table>
            </tbody>
        </table>
       </div>
      </div>
    </div>
  </div>
<!-- Content Ends Here -->
@endsection