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
      <li class="nav-item">
        <a class="nav-link" href="{{ route('nurse.notif') }}">
          <i class="material-icons">notifications</i>
          <p>Notifications</p>
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
  
<!-- Content Ends Here -->
@endsection