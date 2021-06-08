@extends('Admin/layout/template')
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
                <div class="col">
                <input type="text" class="form-control" id="tgl_review" name="tgl_review">
                </div>
              </div>
              <div class="form-group row">
                <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                <div class="col">
                  <input type="text" class="form-control" id="gender" name="gender">
                </div>
              </div>
              <div class="form-group row">
                <label for="no_pmr" class="col-sm-3 col-form-label">No. PMR</label>
                <div class="col">
                  <input type="text" class="form-control" id="no_pmr" name="no_pmr">
                </div>
              </div>
              <div class="form-group row">
                <label for="kode_pasien" class="col-sm-3 col-form-label">Kode Pasien</label>
                <div class="col">
                  <input type="text" class="form-control" id="kode_pasien" name="kode_pasien">
                </div>
              </div>
              <div class="form-group row">
                <label for="age" class="col-sm-3 col-form-label">Usia</label>
                <div class="col">
                  <input type="text" class="form-control" id="age" name="age">
                </div>
              </div>
              <div class="form-group row">
                <label for="tinggi_badan" class="col-sm-3 col-form-label">Tinggi Badan</label>
                <div class="col">
                  <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan">
                </div>
              </div>
              <div class="form-group row">
                <label for="weight" class="col-sm-3 col-form-label">Berat Badan</label>
                <div class="col">
                  <input type="text" class="form-control" id="weight" name="weight">
                </div>
              </div>
              <div class="form-group row">
                <label for="alergi" class="col-sm-3 col-form-label">Riwayat Alergi</label>
                <div class="col">
                  <input type="text" class="form-control" id="alergi" name="alergi">
                </div>
              </div>
              <div class="form-group row">
                <label for="rwyt_pengobatan" class="col-sm-3 col-form-label">Riwayat Pengobatan</label>
                <div class="col">
                  <input type="text" class="form-control" id="rwyt_pengobatan" name="rwyt_pengobatan">
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col">
                  <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
              </div>
              <div class="form-group row">
                <label for="penyakit" class="col-sm-3 col-form-label">Penyakit Umum/Spesifik</label>
                <div class="col">
                  <input type="text" class="form-control" id="penyakit" name="penyakit">
                </div>
              </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="condition" class="bmd-label-floating ml-1">Kondisi Umum</label>
                            <textarea class="form-control" id="condition" name="condition" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" value="submit" class="btn btn-primary btn-md">SAVE</button>
                <a href=" " class="btn btn-danger btn-md">CANCEL</a>

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