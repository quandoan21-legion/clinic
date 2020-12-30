@extends('admin.layout')
@section('title','Doctors management')
@section('content')

<div class="content">
<form>
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

	<table class="table" >
		<tr>
			<td>Name</td>
		</tr>
		
		<tr >
			<td >
				<div id="select_doctor"></div>
			</td>
			
		</tr>
		

</form>
</table>

</form>
</div>


@push('ajax')
		<script type="text/javascript">
			$('document').ready(function(){

				$("#select_major").change(function(){
					var values_select_major = $(this).val();
					// alert(values_select_major);

					$.ajax({
						url:'{{route('get_doctor_by_major2')}}',
						type: 'GET',
					    data: {
					        doctor_id: $(this).val()
					    },
					    success:function(data){
					    	$("#select_doctor").html(data);
					    }
					});
				});

				

			});
		</script>




@endsection