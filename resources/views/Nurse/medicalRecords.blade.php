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
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Medical Records</h4>
            <p class="card-category">Riwayat Penyakit Pasien</p>
          </div>
          <div class="card-body">

            <form class="form" enctype="multipart/form-data">
            @csrf

              <div class="form-group row">
                <label for="tgl_review" class="col-sm-3 col-form-label">Tanggal Review</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="tgl_review" name="tgl_review">
                </div>
              </div>
              <div class="form-group row">
                <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="gender" name="gender">
                </div>
              </div>
              <div class="form-group row">
                <label for="kode_pasien" class="col-sm-3 col-form-label">Kode Pasien</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="kode_pasien" name="kode_pasien">
                </div>
              </div>
              <div class="form-group row">
                <label for="age" class="col-sm-3 col-form-label">Usia</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="age" name="age">
                </div>
              </div>
              <div class="form-group row">
                <label for="tinggi_badan" class="col-sm-3 col-form-label">Tinggi Badan</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="tinggi_badan" name="tinggi_badan">
                </div>
              </div>
              <div class="form-group row">
                <label for="weight" class="col-sm-3 col-form-label">Berat Badan</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="weight" name="weight">
                </div>
              </div>
              <div class="form-group row">
                <label for="alergi" class="col-sm-3 col-form-label">Riwayat Alergi</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="alergi" name="alergi">
                </div>
              </div>
              <div class="form-group row">
                <label for="rwyt_pengobatan" class="col-sm-3 col-form-label">Riwayat Pengobatan</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="rwyt_pengobatan" name="rwyt_pengobatan">
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="alamat" name="alamat">
                </div>
              </div>
              <div class="form-group row">
                <label for="penyakit" class="col-sm-3 col-form-label">Penyakit Umum/Spesifik</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="penyakit" name="penyakit">
                </div>
              </div>
              <div class="form-group row">
                <label for="condition" class="col-sm-3 col-form-label">Kondisi Umum</label>
                <div class="col-md-6">
                  <textarea readonly class="form-control-plaintext" id="condition" name="condition" cols="30" rows="5"></textarea>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <img class="img" src="{{ asset('img/faces/avatar.jpg') }}">
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">Pasien</h6>
            <h4 class="card-title"></h4>
            <p class="card-description">
              
              <br>
            </p>
          </div>
        </div>
      </div>
    </div>
<!-- Content Ends Here -->
@endsection