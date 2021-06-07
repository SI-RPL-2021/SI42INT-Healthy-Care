@extends('Patient/layout/template')
@section('content')
    <!-- Slider Start -->

<section class="features mt-3 bg-image bg-fluid"
style="
  background-image: url('../img/bg/slider-bg-1.jpg');
  height: 60vh;">
	<div class="container">
        <div class="row ml-2 mb-5">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="btn-container mt-5">
                        <h1 class="mb-3 mt-3">Your most trusted health partner</h1>
                    </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 Hours Service</span>
						<h4 class="mb-3">Online Appoinment</h4>
						<p class="mb-4">Get All time support for emergency.We have introduced the principle of family medicine.</p>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Timing schedule</span>
						<h4 class="mb-3">Working Hours</h4>
						<ul class="w-hours list-unstyled">
		                    <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 16:00</span></li>
		                    <li class="d-flex justify-content-between">Thu - Fri : <span>8:00 - 16:00</span></li>
		                </ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Emegency Cases</span>
						<h4 class="mb-3">1-800-700-6200</h4>
						<p>Get All time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="cta-section mt-5">
	<div class="container mt-5">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3">58</span>k
						<p>Happy People</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3">700</span>+
						<p>Surgery Comepleted</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3">40</span>+
						<p>Expert Doctors</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
						<span class="h3">20</span>
						<p>Worldwide Branch</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section service gray-bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2>Appoinment Schedule</h2>
					<div class="divider mx-auto my-4"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<form id="#" class="form" action="#">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <select class="form-control dynamic" name="Specialist1" id="spesialist" data-dependent="doctor">
                                    <option>Choose Specialist</option>
                                    @foreach ($data as $specialist)
                                        <option value="{{$specialist->specialist}}">{{$specialist->specialist}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <select class="form-control" name="Doctor1" id="doctor">
                                        <option>Select Doctors</option>
                                        @foreach ($data as $doctor)
                                            <option value="{{$doctor->id}}">{{$doctor->full_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <table class="table table-bordered table-active">
                                <thead>
                                  <tr>
                                    <th>CLOCK</th>
                                    <th>MON</th>
                                    <th>TUE</th>
                                    <th>WED</th>
                                    <th>THU</th>
                                    <th>FRI</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th>08:00 - 10:00</th>
                                    <td>PENUH</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                  </tr>
                                  <tr>
                                    <th>10:00 - 11:00</th>
                                    <td>PENUH</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                  </tr>
                                  <tr>
                                    <th>13:00 - 14:00</th>
                                    <td>PENUH</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                  </tr>
                                  <tr>
                                    <th>14:00 - 15:00</th>
                                    <td>PENUH</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                  </tr>
                                  <tr>
                                    <th>15:00 - 16:00</th>
                                    <td>PENUH</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                    <td>TERSEDIA</td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
		</div>
	</div>
</section>

<section class="section appoinment">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12 ">
				<div class="appoinment-wrap mt-5 mt-lg-0">
					<h2 class="mb-2 title-color">Book appoinment</h2>
					<form method="POST" action="{{ route('patient.appointment') }}" class="form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" name="Specialist @error('Specialist') is-invalid @enderror" id="spesialist">
                                    <option>Choose Specialist</option>
                                    @foreach ($data as $specialist)
                                        <option value="{{$specialist->specialist}}">{{$specialist->specialist}}</option>
                                    @endforeach
                                    </select>
                                    @error('Specialist')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control" name="Doctor @error('Doctor') is-invalid @enderror" id="doctor">
                                        <option>Select Doctors</option>
                                        @foreach ($data as $doctor)
                                            <option value="{{$doctor->id}}" {{ old('Doctor') == $doctor->id ? 'selected' : '' }}>{{$doctor->full_name}}</option>
                                        @endforeach
                                    </select>
                                    @error('Doctor')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="Date" id="date" type="date" class="form-control @error('Date') is-invalid @enderror" placeholder="dd/mm/yyyy">
                                    @error('Date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <select class="form-control @error('Time') is-invalid @enderror" id="time" name="Time">
                                    <option>Time</option>
                                    <option value="08:00 - 10:00">08:00 - 10:00</option>
                                    <option value="10:00 - 11:00">10:00 - 11:00</option>
                                    <option value="13:00 - 14:00">13:00 - 14:00</option>
                                    <option value="14:00 - 15:00">14:00 - 15:00</option>
                                    <option value="15:00 - 16:00">15:00 - 16:00</option>
                                    </select>
                                    @error('Time')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input name="Phone" id="phone" type="text" class="form-control @error('Phone') is-invalid @enderror" placeholder="Phone Number">
                                    @error('Phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group-2 mb-4">
                            <textarea name="Message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" value="submit" class="btn btn-main btn-round-full"> Make Appoinment <i class="icofont-simple-right ml-2  "></i></button>
                    </form>
                </div>
			</div>
		</div>
	</div>
</section>
@endsection