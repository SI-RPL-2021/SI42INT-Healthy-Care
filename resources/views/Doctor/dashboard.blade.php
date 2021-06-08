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
            <a class="nav-link" href="">
                <i class="material-icons">content_paste</i>
                <p>Medical Record</p>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('nametag')
<a class="navbar-brand" href="javascript:;"><B>DASHBOARD</B></a>
@endsection

@section('content')
<!-- Content Start Here -->
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Notification</h4>
              <p class="card-category"></p>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <td>Patient</td>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datas)
                            <tr>
                                @php
                                    $id = $datas["id"];
                                @endphp
                                <td>{{ $datas["date"] }}</td>
                                <td>{{ $datas["time"] }}</td>
                                <td></td>
                                {{-- <td>{{ $datas->patient->full_name }}</td> --}}
                                <td>{{ $datas["status"] }}</td>
                                <td><a href="updateSchedule?id={{$id}}" class="btn btn-primary btn-icon-split ml-2">
                                    <span class="text">Done</span>
                                </a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
          </div>
        </div>
      </div>
</div>
<!-- Content Ends Here -->
@endsection
