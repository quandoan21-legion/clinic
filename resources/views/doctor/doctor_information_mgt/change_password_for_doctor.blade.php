@extends('doctor.layout')
@section('title','Update doctor')
@section('content')

<form method="post" action="{{ route('process_change_password_for_doctor',['doctor_id'=>Session::get('doctor_id')]) }}">
	
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

	
		<div class="table">

			<form >
				{{-- <form id="allInputsFormValidation" class="form-horizontal"  method="post" action="{{ route('process_update_infomation_for_user',['patient_id'=>$array_patient[0]->Session::get('patient_id')]) }}" novalidate="novalidate"> --}}

					{{-- <form method="post" action="{{ route('process_update_admin',['admin_id'=>$array_admin[0]->admin_id]) }}"> --}}

						<legend>Update an Admin</legend>

						@foreach ($result as $each)
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="main-content">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-8">
										<div class="card">
											<div class="header">
												<h4 class="title">Your Profile</h4>
											</div>
											<div class="content">
												<form>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label>Password</label>
																<input type="password" 
																name="password" 
																class="form-control"
																value="{{$each->password}}">
															</div>
														</div>
													</div>
													<button class="btn btn-info btn-fill btn-wd">update</button>
													<div class="clearfix"></div>
												</form>
											</div>
										</div>
									</div>

									<div class="col-md-4">
										<div class="card card-user">
											<div class="content">
												<div class="author">

													<img class="avatar border-gray" src="{{ asset('storage/'.Session::get('profile_image')) }}">

													<h3 class="title">{{$each->name}}<br>
													</h3>

												</div>

											</div>
											<hr>
										</div>
									</div>

								</div>
							</div>
						</div>
						@endforeach
					</form>
				</div>

				@endsection



