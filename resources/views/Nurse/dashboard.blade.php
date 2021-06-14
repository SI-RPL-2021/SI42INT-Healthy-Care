@extends('Nurse/layout/template')
@section('sidebar')
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item active">
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
      <li class="nav-item">
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
    <a class="navbar-brand" href="javascript:;"><B>DASHBOARD</B></a>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-warning">
          <h4 class="card-title">Notification</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-body">
            <tbody>
              <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Doctor</th>
                        <td>Patient</td>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        <tr>
                            @php
                              $id = $data->id;
                            @endphp
                            <td>{{ $data->date }}</td>
                            <td>{{ $data->time }}</td>
                            <td></td>
                            <td></td>
                            {{-- <td>{{ $data->doctor->full_name }}</td> --}}
                            {{-- <td>{{ $data->patient->full_name }}</td> --}}
                            <td>{{ $data->status }}</td>
                          @if ($data->status == "processed")
                            <td>
                              <a href="updateSchedule?id={{$id}}&action=accept" class="btn btn-primary btn-icon-split ml-2">
                                <span class="text">Accept</span>
                              </a>
                              <a href="updateSchedule?id={{$id}}&action=deny" class="btn btn-danger btn-icon-split ml-2">
                                <span class="text">Deny</span>
                              </a>
                            </td>
                          @else
                            <td></td>
                          @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </tbody>
        </table>
       </div>
      </div>
    </div>
  </div>
@endsection