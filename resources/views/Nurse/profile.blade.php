@extends('Nurse/layout/template')

@section('content')

<!-- Content Start Here -->
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
                <label for="full_name" class="col-sm-3 col-form-label">Nama Lengkap</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="full_name" value="" name="full_name">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="email" value=" Tahun" name="email">
                </div>
              </div>
              <div class="form-group row">
                <label for="position" class="col-sm-3 col-form-label">Jabatan</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="position" value="" name="position">
                </div>
              </div>
              <div class="form-group row">
                <label for="Age" class="col-sm-3 col-form-label">Age</label>
                <div class="col-sm-6">
                  <input type="number" readonly class="form-control-plaintext" id="age" value="" name="age">
                </div>
              </div>
              <div class="form-group row">
                <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="gender" value="" name="gender">
                </div>
              </div>
              <div class="form-group row">
                <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="address" value="" name="address">
                </div>
              </div>
              <div class="form-group row">
                <label for="birth" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-6">
                  <input type="date" readonly class="form-control-plaintext" id="birth" value="" name="birth">
                </div>
              </div>
              <div class="form-group row">
                <label for="unit" class="col-sm-3 col-form-label">Unit Kerja</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="unit" value="" name="unit">
                </div>
              </div>
              <div class="form-group row">
                <label for="instance" class="col-sm-3 col-form-label">Instansi Kerja</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="instance" value="" name="instance">
                </div>
              </div>
              <div class="form-group row">
                <label for="religion" class="col-sm-3 col-form-label">Agama</label>
                <div class="col-sm-6">
                  <input type="text" readonly class="form-control-plaintext" id="religion" value="" name="religion">
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

<!-- Content Ends Here -->
@endsection