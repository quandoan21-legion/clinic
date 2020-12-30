@extends('admin.layout')
@section('content')
@section('title','Add patient')
<div class="content">
	<form method="post" action="{{route('check_patient_exits')}}">	

		<legend>Add a Patient</legend>

		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif	
		

		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="name"
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
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Profile image</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="file"
					name="profile_image"
					accept="image/*" 
					/>
				</div>
				
			</div>	
		</fieldset>

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Date of Birth</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="date"
					name="dob"
					number="true"
					/>
				</div>
				
			</div>


			
		</fieldset>

		<fieldset>
			<label class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-5"class="form-control">
			<input type ="radio" id="male" name="gender" value="1">
			<label for  ="male">Male</label>
			<input type ="radio" id="female" name="gender" value="0">
			<label for  ="female">Female</label><br>
		</div>



			
		</fieldset>



		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Address</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="address"
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
					/>
				</div>
				
			</div>


			
		</fieldset>

		

		

		

		
		<button class="btn btn-primary btn-fill btn-wd">add</button>
		
	</form>
	@endsection