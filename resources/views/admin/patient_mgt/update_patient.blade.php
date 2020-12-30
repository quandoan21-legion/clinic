@extends('admin.layout')
@section('content')
@section('title','Update doctor')


@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		

		
<form method="post" action="{{ route('process_update_patient',['patient_id'=>$array_patient[0]->patient_id]) }}">
	@foreach ($array_patient as $each)
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="name"
					value="{{$each->name}}"
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
					type="email"
					name="email"
					email="true"
					value="{{$each->email}}"
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
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Age</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="date"
					name="dob"
					number="true"
					value="{{$each->dob}}"
					/>
				</div>
				
			</div>


			
		</fieldset>

		<fieldset>
			<label class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-5"class="form-control">
			<input type ="radio" id="female" name="gender" value="0">
			<label for  ="female">Female</label><br>
			<input type ="radio" id="male" name="gender" value="1" checked="">
			<label for  ="male">Male</label>
			
		</div>



			
		</fieldset>



			
		



		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Address</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="address"
					value="{{$each->address}}"
					/>
				</div>
				
			</div>


			
		</fieldset>


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Phone number</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="number"
					name="phone_numb"
					number="true"
					value="{{$each->phone_numb}}"
					/>
				</div>
				
			</div>


			
		</fieldset>


		

		
		<button class="btn btn-primary btn-fill btn-wd">Update</button>
	@endforeach

</form>
@endsection



