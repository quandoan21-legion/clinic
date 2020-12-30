@extends('doctor.layout')
@section('content')
@section('title','Patients record')
<div class="container">
    <div id="calendar"></div>
</div>
@endsection
@push('ajax')
<script type="text/javascript">
$(document).ready(function() {
  var calendar = $('#calendar').fullCalendar({
    eventSources: [{
      url: '{{ route('get_doctor_record_for_doctor') }}',
      method: 'GET'
      }]
  });
});

</script>
@endpush



