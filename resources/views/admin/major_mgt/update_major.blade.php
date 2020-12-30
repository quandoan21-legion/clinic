@extends('admin.layout')
@section('content')
@section('title','Update major')
<h1>Update major name</h1>

<form method="post" action="{{ route('check_major_exits_for_update',['major_id'=>$array_major[0]->major_id]) }}">
	@if (Session::has('error'))
        <h4>{{Session::get('error')}}</h4>
    @endif

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

	@foreach ($array_major as $each)
	<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Major</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="major_name"
					value="{{$each->major_name}}"
					number="true"
					/>
				</div>
				
			</div>


			
		</fieldset>
	<button>Update</button>
	@endforeach

</form>
@endsection


