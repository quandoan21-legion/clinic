@extends('admin.layout')
@section('content')
@section('title','Admins management')
<link href='https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<form action="">
	<h1>Admin management</h1>
	@if (Session::has('success'))
        <h4>{{Session::get('success')}}</h4>
    @endif
	<h5><a href="{{route('add_admin')}}"><i class="pe-7s-add-user"></i>Add user</a></h5>
	<div class="main-content">
		<div class="container-fluid">

							</div>
								<table class="table" >
									<div class="fresh-datatables">
								<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
									<thead>
										<th data-field="id" class="text-center">ID</th>
										<th data-field="name" data-sortable="true">Name</th>
										<th data-field="dob" data-sortable="true">Date of birth</th>
										<th data-field="address" data-sortable="true">Address</th>
										<th data-field="phone_numb">Phone number</th>
										<th data-field="image">Profile image</th>
										<th data-field="level">Level</th>
										<th>Update</th>
										<th>Delete</th>
									</thead>
									<tbody>
										<?php foreach ($result as $each): ?>
										<tr>
											<td>{{$each->admin_id}}</td>
											<td>{{$each->name}}</td>
											<td>{{$each->dob}}</td>
											<td>{{$each->address}}</td>
											<td>{{$each->phone_numb}}</td>
											<td><img height="200" src="{{ asset('storage/'.$each->profile_image) }}"></td>
											<td>@if ($each->level==1)
												Super Admin
												@else
												Admin
											@endif</td>
											<td><a href="{{route('view_update_admin',['admin_id'=>$each->admin_id])}}">Update</a></td>
											<td><a href="{{route('delete_admin',['admin_id'=>$each->admin_id])}}">Delete</a></td>
										</tr>
										<?php endforeach ?>

									</tbody>
									<tfoot>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Date of Birth</th>
											<th>Address</th>
											<th>Phone Number</th>
											<th>Profile image</th>
											<th>Level</th>
											<th>Update</th>
											<th>Delete</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>




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







