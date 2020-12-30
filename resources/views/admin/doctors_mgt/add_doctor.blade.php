@extends('admin.layout')
@section('content')
@section('title','Add doctor')
<div class="content">
	<form method="post" action="{{route('check_doctor_exits')}}" enctype="multipart/form-data">	

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
				<label class="col-sm-2 control-label">Email</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
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
					email="true"
					/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Full name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="name"
					number="true"
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
					name="phone_numb"
					number="true"
					/>
				</div>
				
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
				<label class="col-sm-2 control-label">Major</label>
				<div class="col-sm-6">
					<select name  ="major_id" class="form-control">
					@foreach ($result as $each)
					<option value ="{{$each->major_id}}">
					{{$each->major_name}}
					</option>
					@endforeach
					</select>
				</div>
				
			</div>
		</fieldset>

		
		<button class="btn btn-primary btn-fill btn-wd">add</button>
		
	</form>
	@endsection