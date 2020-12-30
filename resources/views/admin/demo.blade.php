<form method="post" action="{{route('process_demo')}}">	

	<legend>Add a Patient Record</legend>

	<input type="hidden" name="_token" value="{{csrf_token()}}">

	<fieldset>
		<div class="form-group">
			<label class="col-sm-2 control-label">Date</label>
			<div class="col-sm-6">
				<input type="date" name="date">
			</div>
		</div>

	</div>
</fieldset>
<fieldset>
	<div class="form-group">
		<label class="col-sm-2 control-label">Doctors</label>
		<div class="col-sm-6">
			<select  class="form-control" name="major_id">
				<option>--choose doctor--</option>
				@foreach ($result as $each)
				<option value="{{$each->major_id}}" >
					{{$each->major_name}}
				</option>
				@endforeach
			</select>
		</div>

	</div>
</fieldset>

	<button class="btn btn-primary btn-fill btn-wd">add</button>

</form>