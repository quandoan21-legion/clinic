@extends('admin.layout')
@section('title','Doctors management')
@section('content')
<form action="">
	@if (Session::has('success'))
        <h4>{{Session::get('success')}}</h4>
    @endif

	<a href="{{route('add_doctor')}}">Add</a>
	<table class="table" >
		<tr>
			<td>ID</td>
			<td>Email</td>
			<td>Name</td>
			<td>Phone number</td>
			<td>Major</td>
			<td>Image</td>
			{{-- <td>Update</td>
			<td>Delete</td> --}}
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td>{{$each->doctor_id}}</td>
			<td>{{$each->email}}</td>
			<td>{{$each->name}}</td>
			<td>{{$each->phone_numb}}</td>
			<td>{{$each->major_name}}</td>
			<td>
				<img height="200" src="{{ asset('storage/'.$each->profile_image) }}">

			</td>
			{{-- <td><a href="{{route('view_update_doctor',['doctor_id'=>$each->doctor_id])}}">Update</a></td> --}}
			{{-- <td><a href="{{route ('delete_doctor',['doctor_id'=>$each->doctor_id])}}">Delete</a></td> --}}
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
</form>
@endsection
