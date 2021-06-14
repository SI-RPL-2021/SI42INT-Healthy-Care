@extends('Doctor/layout/template')
@section('sidebar')
<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link active" href="{{ route('doctor.dashboard') }}">
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
    <li class="nav-item">
      <a class="nav-link" href="{{ route('doctor.record') }}">
        <i class="material-icons">content_paste</i>
        <p>Medical Record</p>
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
  <div class="col-md-9">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Medical Records</h4>
        <p class="card-category">Riwayat Penyakit Pasien</p>
      </div>
      <div class="card-body">

        <!-- Medical Record -->
        <form method="POST" action="{{ route('doctor.medicalRecord') }}" class="form" enctype="multipart/form-data">
          @csrf
          <input type="text" class="form-control" name="Id" value="{{ $data2->user_id }}" hidden>
          <div class="row mt-2">
            <div class="col-md-6">
              <div class="form-group">
                <label for="No_pmr" class="bmd-label-floating ml-2">No. PMR</label>
                <input type="text" class="form-control" id="inputNo_pmr" name="No_pmr" value="{{ $data2->user_id }}" readonly>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="Tgl_review" class="bmd-label-floating ml-2">Tanggal Review</label>
                <input type="date" class="form-control" id="inputTgl_review" name="Tgl_review" value="{{ $data->date }}" readonly>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-4">
              <div class="form-group">
                <label for="Age" class="bmd-label-floating ml-2">Usia</label>
                <input type="number" class="form-control @error('Age') is-invalid @enderror" id="inputAge" name="Age" min="0">
                @error('Age')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="Tinggi_badan" class="bmd-label-floating ml-2">Tinggi badan (cm)</label>
                <input type="number" class="form-control @error('Tinggi_badan') is-invalid @enderror" id="inputTinggi_badan" name="Tinggi_badan" min="0">
                @error('Tinggi_badan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="Berat_badan" class="bmd-label-floating ml-2">Berat badan (kg)</label>
                <input type="number" class="form-control @error('Berat_badan') is-invalid @enderror" id="inputBerat_badan" name="Berat_badan" min="0">
                @error('Berat_badan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-12">
              <div class="form-group">
                <label for="Alergi" class="bmd-label-floating ml-2">Riwayat Alergi</label>
                <textarea class="form-control @error('Alergi') is-invalid @enderror" id="inputAlergi" name="Alergi" cols="30" rows="5"></textarea>
                @error('Alergi')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-12">
              <div class="form-group">
                <label for="Riwayat_pengobatan" class="bmd-label-floating ml-2">Riwayat Pengobatan</label>
                <textarea class="form-control @error('Riwayat_pengobatan') is-invalid @enderror" id="inputRiwayat_pengobatan" name="Riwayat_pengobatan" cols="30" rows="5"></textarea>
                @error('Riwayat_pengobatan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-12">
              <div class="form-group">
                <label for="Alamat" class="bmd-label-floating ml-2">Alamat</label>
                <textarea class="form-control" id="inputAlamat" name="Alamat" cols="30" rows="5" readonly>{{ $data2->address }}</textarea>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-12">
              <div class="form-group">
                <label for="Riwayat_penyakit" class="bmd-label-floating ml-2">Riwayat Penyakit</label>
                <textarea class="form-control @error('Riwayat_penyakit') is-invalid @enderror" id="inputRiwayat_penyakit" name="Riwayat_penyakit" cols="30" rows="5"></textarea>
                @error('Riwayat_penyakit')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-12">
              <div class="form-group">
                <label for="Condition" class="bmd-label-floating ml-2">Kondisi Umum</label>
                <textarea class="form-control @error('Condition') is-invalid @enderror" id="inputCondition" name="Condition" cols="30" rows="5"></textarea>
                @error('Condition')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
          <button type="submit" value="submit" class="btn btn-primary btn-md">SAVE</button>
          <a href="{{ route('doctor.dashboard') }}" class="btn btn-danger btn-md">CANCEL</a>
        </form>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card card-profile">
      <div class="card-avatar">
        <img class="img" src="{{ asset('img/faces/avatar.jpg') }}">
      </div>
      <div class="card-body">
        <h6 class="card-category text-gray">Pasien</h6>
        <h4 class="card-title">{{ $data2->full_name }}</h4>
        <h5 class="card-title mt-2">{{ $data2->user_id }}</h5>
        <h5 class="card-title mt-2">{{ $data2->gender }}</h5>
        <br>
        </p>
      </div>
    </div>
  </div>
</div>

@if ($data3 == TRUE)
<!-- Patient History -->
<div class="row mt-5">
  <div class="col-md-9">
    <div class="card">
      <div class="card-header card-header-warning">
        <h4 class="card-title">Patient History</h4>
        <p class="card-category">Riwayat Penyakit Pasien</p>
      </div>
      <div class="card-body">
        <form class="form" enctype="multipart/form-data">
          @csrf
          <div class="row mt-2">
            <div class="col-md-6">
              <div class="form-group">
                <label for="No_pmr" class="bmd-label-floating ml-2">No. PMR</label>
                <input type="text" class="form-control" id="inputNo_pmr" name="No_pmr" value="{{ $data2->user_id }}" readonly>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="Tgl_review" class="bmd-label-floating ml-2">Tanggal Review</label>
                <input type="date" class="form-control" id="inputTgl_review" name="Tgl_review" value="{{ $data3->date }}" readonly>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-4">
              <div class="form-group">
                <label for="Age" class="bmd-label-floating ml-2">Usia</label>
                <input type="number" class="form-control" id="inputAge" name="Age" value="{{ $data3->usia }}" readonly>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="Tinggi_badan" class="bmd-label-floating ml-2">Tinggi badan (cm)</label>
                <input type="number" class="form-control" id="inputTinggi_badan" name="Tinggi_badan" value="{{ $data3->tinggi_badan }}" readonly>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="Berat_badan" class="bmd-label-floating ml-2">Berat badan (kg)</label>
                <input type="number" class="form-control" id="inputBerat_badan" name="Berat_badan" value="{{ $data3->berat_badan }}" readonly>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-12">
              <div class="form-group">
                <label for="Alergi" class="bmd-label-floating ml-2">Riwayat Alergi</label>
                <textarea class="form-control" id="inputAlergi" name="Alergi" cols="30" rows="5" readonly>{{ $data3->riwayat_alergi }}</textarea>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-12">
              <div class="form-group">
                <label for="Riwayat_pengobatan" class="bmd-label-floating ml-2">Riwayat Pengobatan</label>
                <textarea class="form-control" id="inputRiwayat_pengobatan" name="Riwayat_pengobatan" cols="30" rows="5" readonly>{{ $data3->riwayat_pengobatan }}</textarea>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-12">
              <div class="form-group">
                <label for="Alamat" class="bmd-label-floating ml-2">Alamat</label>
                <textarea class="form-control" id="inputAlamat" name="Alamat" cols="30" rows="5" readonly>{{ $data2->address }}</textarea>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-12">
              <div class="form-group">
                <label for="Riwayat_penyakit" class="bmd-label-floating ml-2">Riwayat Penyakit</label>
                <textarea class="form-control" id="inputRiwayat_penyakit" name="Riwayat_penyakit" cols="30" rows="5" readonly>{{ $data3->penyakit }}</textarea>
              </div>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-12">
              <div class="form-group">
                <label for="Condition" class="bmd-label-floating ml-2">Kondisi Umum</label>
                <textarea class="form-control" id="inputCondition" name="Condition" cols="30" rows="5" readonly>{{ $data3->kondisi_umum }}</textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@else
    
@endif
<!-- Content Ends Here -->
@endsection