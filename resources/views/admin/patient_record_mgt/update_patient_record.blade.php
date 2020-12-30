@extends('admin.layout')
@section('content')
@section('title','Update doctor')
<form method="post" action="{{ route('process_update_patient_record',['patient_record_id'=>$array_patient_record[0]->patient_record_id]) }}">
	@foreach ($patient_record_id as $each)
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		
	

		<fieldset>
			<label class="col-sm-2 control-label">Gender</label>
			<div class="col-sm-5"class="form-control">
			<input type ="radio" id="female" name="gender" value="0">
			<label for  ="female">Female</label><br>
			<input type ="radio" id="male" name="gender" value="1" checked="">
			<label for  ="male">Male</label>
			
		</div>



			
		</fieldset>



		

		
		<button class="btn btn-primary btn-fill btn-wd">Update</button>
	@endforeach

</form>
@endsection



