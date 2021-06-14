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
        <a class="nav-link" href="{{ route('nurse.record') }}">
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
                  </div>
                  <div class="card-body">
                      <table id="example" class="table table-striped content-centered" style="width:100%">
                          <thead>
                              <tr>
                                  <th>No.</th>
                                  <th>ID Pasien</th>
                                  <th>Nama Pasien</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $i=1; ?>
                              @foreach ($data as $datas)
                              <tr>
                                  <td>{{ $i }}</td>
                                  <td>{{ $datas->user_id }}</td>
                                  <td>{{ $datas->full_name}}</td>
                                  {{-- medicalRecord?id={{$id}} --}}
                                  <td><a href="" class="btn btn-primary btn-icon-split ml-2">
                                      <span class="text">Detail</span>
                                  </a></td>
                              </tr>
                              <?php $i++; ?>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Content Ends Here -->
@endsection