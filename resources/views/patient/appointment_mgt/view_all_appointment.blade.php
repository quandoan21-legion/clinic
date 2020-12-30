@extends('patient.layout')
@section('content')
@section('title','Records Information')
<form action="">
	@if (Session::has('success'))
        <h4>{{Session::get('success')}}</h4>
    @endif
	<table class="table" >
	<div class="fresh-datatables">
								<table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
									<thead>
										<th data-field="name" data-sortable="true">Date</th>
										<th data-field="address" data-sortable="true">Doctor Name</th>
										<th data-field="phone_numb">Begin</th>
										<th data-field="image">End</t>
										<th>Delete</th>
									</thead>
	<tbody>
		@foreach ($records as $each)
		@if(Session::get('patient_id')==$each->patient_id)
		<tr>
			<td>{{$each->date}}</td>
			<td>{{$each->name}}</td>
			<td>{{$each->begin}}</td>
			<td>{{$each->end}}</td>

			
			<td><a href="{{route ('delete_appointment',['record_id'=>$each->record_id])}}">Delete</a></td>
			
		</tr>
		@endif
		@endforeach
	</tbody>




	<tfoot>
		<tr>
			<td>Date</td>
			<td>Doctor Name</td>
			<td>Begin</td>
			<td>End</td>
			<td>Delete</td>
		</tr>
	</tfoor>
			
			


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