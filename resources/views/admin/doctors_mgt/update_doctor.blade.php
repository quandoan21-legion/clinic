@extends('admin.layout')
@section('content')
@section('title','Update doctor')
<form method="post" action="{{ route('process_update_doctor',['doctor_id'=>$array_doctor[0]->doctor_id]) }}">
	@foreach ($array_doctor as $each)
	<input type="hidden" name="_token" value="{{csrf_token()}}">
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
				<label class="col-sm-2 control-label">Full name</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="name"
					value="{{$each->name}}"
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
					value="{{$each->phone_numb}}"
					name="phone_numb"
					number="true"
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
					<option value ="{{$each->major_id}}" >
					{{$each->major_name}}
					</option>
					@endforeach
					</select>
				</div>
				
			</div>
		</fieldset>

		
		<button class="btn btn-primary btn-fill btn-wd">add</button>
	@endforeach

</form>
@endsection



