@extends('admin.layout')
@section('content')
@section('title','Update admin')

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


	<form id="allInputsFormValidation" class="form-horizontal"  method="post" action="{{ route('process_update_admin',['admin_id'=>$array_admin[0]->admin_id]) }}" novalidate="novalidate">
		
	{{-- <form method="post" action="{{ route('process_update_admin',['admin_id'=>$array_admin[0]->admin_id]) }}"> --}}

		<legend>Update an Admin</legend>


		@foreach ($array_admin as $each)
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="content">
		

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
		<button class="btn btn-primary btn-fill btn-wd">Update</button>
		</div>
		@endforeach
	</form>

@endsection
