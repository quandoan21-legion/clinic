@extends('admin.layout')
@section('content')
@section('title','Majors management')
<form action="">
	@if (Session::has('success'))
        <h4>{{Session::get('success')}}</h4>


    @endif
    @if (Session::has('error'))
        <h4>{{Session::get('error')}}</h4>


    @endif

	<a href="{{route('add_major')}}">Add</a>
	<table class="table" >
		<tr>
			<td>ID</td>
			<td>Major</td>
			<td>Update</td>
			<td>Delete</td>
			
			
			

		</tr>
		<?php foreach ($result as $each): ?>
		<tr>
			<td>{{$each->major_id}}</td>
			<td>{{$each->major_name}}</td>
			<td><a href="{{route('view_update_major',['major_id'=>$each->major_id])}}">Update</a></td>
			<td><a href="{{route('check_major_for_delete',['major_id'=>$each->major_id])}}">Delete</a></td>
			
			
			
			
		</tr>
		<?php endforeach ?>

</table>
</form>
@endsection
