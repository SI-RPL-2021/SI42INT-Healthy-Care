@extends('Admin/layout/template')
@section('sidebar')
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.profile') }}">
                <i class="material-icons">person</i>
                <p>My Profile</p>
            </a>
        </li>
        <li class="nav-item  active">
            <a class="nav-link" href="">
                <i class="material-icons">content_paste</i>
                <p>User Management</p>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="material-icons">library_books</i>
                <p>Hitory Transaction</p>
            </a>
        </li>
    </ul>
</div>
@endsection

@section('nametag')
    <a class="navbar-brand" href="javascript:;"><B>USER MANAGEMENT</B></a>
@endsection

<!-- Content Start Here -->
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">User Profile</h4>
                        <p class="card-category">Your profile</p>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Level</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>tiger@gmail.com</td>
                                    <td>08131xxxxx</td>
                                    <td>Admin</td>
                                    <td>2011/04/25</td>
                                     <td>
                                        <a href="#" class="badge badge-warning">Edit</a>
                                        <a href="#" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>garrett@gmail.com</td>
                                    <td>08131xxxxx</td>
                                    <td>Admin</td>
                                    <td>2011/07/25</td>
                                     <td>
                                        <a href="#" class="badge badge-warning">Edit</a>
                                        <a href="#" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ASTON COX</td>
                                    <td>ashton@gmail.com</td>
                                    <td>08131xxxxx</td>
                                    <td>Nurse</td>
                                    <td>2009/01/12</td>
                                     <td>
                                        <a href="{{ route('admin.editNurse') }}" class="badge badge-warning">Edit</a>
                                        <a href="#" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>cedric@gmail.com</td>
                                    <td>08131xxxxx</td>
                                    <td>Nurse</td>
                                    <td>2012/03/29</td>
                                     <td>
                                        <a href="#" class="badge badge-warning">Edit</a>
                                        <a href="#" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AIRI SATOU</td>
                                    <td>airi@gmail.com</td>
                                    <td>08131xxxxx</td>
                                    <td>Doctor</td>
                                    <td>2008/11/28</td>
                                     <td>
                                        <a href="{{ route('admin.editDoctor') }}" class="badge badge-warning">Edit</a>
                                        <a href="#" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>brielle@gmail.com</td>
                                    <td>08131xxxxx</td>
                                    <td>Doctor</td>
                                    <td>2012/12/02</td>
                                     <td>
                                        <a href="#" class="badge badge-warning">Edit</a>
                                        <a href="#" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>herrod@gmail.com</td>
                                    <td>08131xxxxx</td>
                                    <td>Admin</td>
                                    <td>2012/08/06</td>
                                     <td>
                                        <a href="#" class="badge badge-warning">Edit</a>
                                        <a href="#" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>rhona@gmail.com</td>
                                    <td>08131xxxxx</td>
                                    <td>Admin</td>
                                    <td>2010/10/14</td>
                                     <td>
                                        <a href="#" class="badge badge-warning">Edit</a>
                                        <a href="#" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>colleen@gmail.com</td>
                                    <td>08131xxxxx</td>
                                    <td>Doctor</td>
                                    <td>2009/09/15</td>
                                     <td>
                                        <a href="#" class="badge badge-warning">Edit</a>
                                        <a href="#" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>sonya@gmail.com</td>
                                    <td>08131xxxxx</td>
                                    <td>Doctor</td>
                                    <td>2008/12/13</td>
                                    <td>
                                        <a href="#" class="badge badge-warning">Edit</a>
                                        <a href="#" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection