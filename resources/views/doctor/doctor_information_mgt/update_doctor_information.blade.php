@extends('doctor.layout')
@section('title','Update doctor')
@section('content')

<form method="post" action="{{ route('process_update_doctor',['doctor_id'=>Session::get('doctor_id')]) }}">
	
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

	
	@foreach ($result as $each)
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					value="{{$each->name}}"
					name="name"
					email="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					value="{{$each->email}}"
					name="email"
					email="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="password"
					name="password"
					value="{{$each->password}}"
					email="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Phone number</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="number"
					value="{{$each->phone_numb}}"
					name="phone_numb"
					number="true"
					/>
				</div>
				
			</div>


			
		</fieldset>


		

		
		<button class="btn btn-primary btn-fill btn-wd">Update</button>

@endforeach
</form>
	
@endsection



