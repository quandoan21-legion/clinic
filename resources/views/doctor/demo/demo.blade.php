@extends('doctor.layout')
@section('content')
@section('title','Doctor Information')
<form>
	<select>
		<option></option>
	</select>
</form>
@endsection
@push('ajax')
 $(document).ready(function(){
 		$.ajax({
 		url: {{ route('get_doctorss') }},
 		type: GET,
 		data
 	})
});
@endpush
