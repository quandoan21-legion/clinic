@extends('admin.layout')
@section('content')
@section('title','Add major')
<form method="post" action="{{route('check_major_exits')}}">
	<h1>Create new major</h1>
	
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
	<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Major</label>
				<div class="col-sm-6">
					<input class="form-control"
					type="text"
					name="major_name"
					number="true"
					/>
				</div>
				
			</div>


			
		</fieldset>
	<button>add</button>
</form>
@endsection


