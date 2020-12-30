@extends('admin.layout')
@section('content')
@section('title','Add patient record')

<div class="content">
	<form method="post" action="{{route('process_add_patient_record')}}">	

		<legend>Add a Patient Record</legend>

		<input type="hidden" name="_token" value="{{csrf_token()}}">
		


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Major</label>
				<div class="col-sm-6">
					<select name  ="major_id" class="form-control" id="select_major">
					<option value="0">--choose major--</option>
					@foreach ($result as $each)
					<option value ="{{$each->major_id}}" >
					{{$each->major_name}}
					</option>
					@endforeach
					</select>
				</div>
				
			</div>
		</fieldset>

		

		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Doctor</label>
				<div class="col-sm-6">
					<select class="form-control" name="doctor_id" id="select_doctor">
						
					</select>
				</div>
				
			</div>


			
		</fieldset>



		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Date</label>
				<div class="col-sm-6">
					<input class="form-control" type="date" name="date" id="select_date"/>
				</div>
				<div class="col-sm-4"><code>required*</code></div>
			</div>
		</fieldset>


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">shift</label>
				<div class="col-sm-6">
					<select class="form-control" name="shift_id" id="select_shift">
						
					</select>
				</div>
				
			</div>


			
		</fieldset>


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">result</label>
				<div class="col-sm-6">
					<input type="text" name="result">
				</div>
				
			</div>


			
		</fieldset>


		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Patients</label>
				<div class="col-sm-6">
					<select name  ="patient_id" class="form-control">
					<option value="0">--choose major--</option>
					@foreach ($patient_name as $each)
					<option value ="{{$each->patient_id}}" >
					{{$each->name}}
					</option>
					@endforeach
					</select>
				</div>
				
			</div>
		</fieldset>



		<button class="btn btn-primary btn-fill btn-wd">add</button>
		
	</form>
	@endsection
	@push('ajax')
		<script type="text/javascript">
			$('document').ready(function(){

				$("#select_major").change(function(){
					var values_select_major = $(this).val();
					// alert(values_select_major);

					$.ajax({
						url:'{{route('get_doctor_by_major')}}',
						type: 'GET',
					    data: {
					        doctor_id: $(this).val()
					    },
					    success:function(data){
					    	$("#select_doctor").html(data);
					    }
					});
				});

				$("#select_doctor,#select_date").change(function(){
					// var select_doctor = $("#select_doctor").val();
					// var select_date = $("#select_date").val();
					// alert(select_doctor);
					// alert(select_date);
					$.ajax({
						url:'{{route('get_shift_by_doctor')}}',
						type: 'GET',
						data: {
							doctor_id: $("#select_doctor").val(),
							record_date: $("#select_date").val()
						},
						success:function(data){
							// alert('abc');
					    	$("#select_shift").html(data);
					    }
					});
				});

			});
		</script>


		
	@endpush