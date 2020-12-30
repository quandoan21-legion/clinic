@extends('admin.layout')
@section('content')
@section('title','Patient records management')
<div class="row">
        <div class="col-sm-12">
       <a href="{{route('view_add_patient_record')}}" class="btn btn-info">Add</a>
   </div>
        <div class="col-sm-3">
            <div class="input-group">
               
                <div class="form-group label-floating">
                    <label class="control-label">
                           
                    </label>
                    <select class="form-control" name="major" id='major'>
                        <option value="0">--Choose a major--</option>
                        @foreach ($result as $each)
                            <option value="{{$each->major_id}}">{{$each->major_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="display: none;" id='doctor_div'>
        <div class="col-sm-3">
        <div class="col-sm-8">
            <div class="input-group">
                <span class="input-group-addon">Doctor
                    <i class="material-icons"></i>
                </span>
                <div class="form-group label-floating">
                    <label class="control-label">
                           
                    </label>
                    <select class="form-control" name="doctor" id="doctor">
                        <option value="0">--choose a doctor--</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class='row' id="calendar"></div>
@endsection
@push('ajax')
<script type="text/javascript">
    $(document).ready(function() {
            $('#calendar').fullCalendar({
                eventSources: [{
                    url: '{{ route('get_list_admin_calendar') }}',
                    method: 'GET',
                    data:  function() { // a function that returns an object
                          return {
                            doctor_id: $("#doctor").val()
                        }
                    }
                }]
            });
            $("#major").change(function(){
                if($("#major").val() == ''){
                    return false;
                }   
                // alert($("#major").val());
                getBS();
            });
            $('#doctor').change(function(){
                $('#calendar').fullCalendar( 'refetchEvents' );
            });
        });
        function getBS(){
            $.ajax({
                url: '{{ route('get_doctor_by_major') }}',
                type: 'GET',
                dataType: 'json',
                data: {
                    major_id: $("#major").val(),
                },
            })
            .done(function(response) {
                $("#doctor_div").show();
                $("#doctor").html('');
                $(response).each(function() {
                    $("#doctor").append(`<option value='${this.doctor_id}'>${this.name}</option>`);
                });
                // $('#bac_si').selectpicker('refresh');
            });
        }
        
</script>
@endpush