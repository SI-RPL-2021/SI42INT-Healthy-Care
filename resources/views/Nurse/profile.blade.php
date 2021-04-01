@extends('Nurse/template')

@section('content')

<!-- Content Start Here -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Profil Anda</h4>
            <p class="card-category">Data Lengkap Pegawai</p>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group row">
                <label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="nama_lengkap" value="(Nama Lengkap)">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="email" value="(mail@example.com)">
                </div>
              </div>
              <div class="form-group row">
                <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="jabatan" value="(Jabatan)">
                </div>
              </div>
              <div class="form-group row">
                <label for="umur" class="col-sm-3 col-form-label">Umur</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="umur" value="(Umur)">
                </div>
              </div>
              <div class="form-group row">
                <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="gender" value="(Gender)">
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="alamat" value="(Alamat)">
                </div>
              </div>
              <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">Tempat, Tanggal Lahir</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="ttl" value="(Tempat, Tanggal Lahir)">
                </div>
              </div>
              <div class="form-group row">
                <label for="unit" class="col-sm-3 col-form-label">Unit Kerja</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="unit" value="(Unit Kerja)">
                </div>
              </div>
              <div class="form-group row">
                <label for="instansi" class="col-sm-3 col-form-label">Instansi Kerja</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="instansi" value="(Instansi Kerja)">
                </div>
              </div>
              <div class="form-group row">
                <label for="agama" class="col-sm-3 col-form-label">Agama</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="agama" value="(Agama)">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-avatar">
            <a href="javascript:;">
              <img class="img" src="{{ asset('img/faces/avatar.jpg') }}">
            </a>
          </div>
          <div class="card-body">
            <h6 class="card-category text-gray">Suster Jaga</h6>
            <h4 class="card-title">Nadya Zahra</h4>
            <p class="card-description">
              No.Telp: 08131xxxx 
              <br>
              1901023500098
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Content Ends Here -->
@endsection