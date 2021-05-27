@extends('Patient/layout/template')
@section('content')
    <section class="section service gray-bg">
        <h2 class="mb-5 title-color text-center">My Schedule</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <div class="appoinment-wrap mt-lg-0">
                        <table class="table table-bordered table-active">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Doctor</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedule as $data)
                                    <tr>
                                        <td>{{ $data->date }}</td>
                                        <td>{{ $data->time }}</td>
                                        <td>{{ $data->doctor->full_name }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection