@extends('admin.layout')
@section('content')
@section('title','Patients management')
<link href='https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<form action="">
	@if (Session::has('success'))
        <h4>{{Session::get('success')}}</h4>
    @endif
	<a href="{{route('view_add_patient')}}">Add</a>
	<table class="table" >
<div class="fresh-datatables">
<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
<thead>
<th data-field="id" class="text-center">ID</th>
<th data-field="name" data-sortable="true">Name</th>
<th data-field="email" data-sortable="true">Email</th>
<th data-field="dob" data-sortable="true">Date of birth</th>
<th data-field="gender" data-sortable="true">Gender</th>
<th data-field="address" data-sortable="true">Address</th>
<th data-field="phone_numb">Phone number</th>
<th>Update</th>
<th>Delete</th>
</thead>

<tbody>
		<?php foreach ($result as $each): ?>
		<tr>
			<td>{{$each->patient_id}}</td>
			<td>{{$each->name}}</td>
			<td>{{$each->email}}</td>
			<td>{{$each->dob}}</td>
			<td>@if ($each->gender==1)
				Male
			@else
				Female
			@endif</td>
			<td>{{$each->address}}</td>
			<td>{{$each->phone_numb}}</td>
			<td><a href="{{route('view_update_patient',['patient_id'=>$each->patient_id])}}">Update</a></td>
			<td><a href="{{route ('delete_patient',['patient_id'=>$each->patient_id])}}">Delete</a></td>
		<?php endforeach ?>
	</tr>
</tbody>

<tfoot>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Date of Birth</th>
		<th>Gender</th>
		<th>Address</th>
		<th>Phone Number</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
</tfoot>
</table>
</form>
@endsection

@push('ajax')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript">

 	
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    // DataTable
    var table = $('#datatables').DataTable({
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });
 	$('#datatables').DataTable( {
        "pagingType": "full_numbers"
    } );
} );

</script>


@endpush