@extends('patient.layout')
@section('content')
@section('title','Doctor Information')

<div class="content">
	<form method="post" action="{{-- {{route('')}} --}}">	

		<legend>Want to set an appointment ? {{Session::get('name')}}</legend>

		<input type="hidden" name="_token" value="{{csrf_token()}}">


	<!-- expert_doctors_area_start -->
    <div class="expert_doctors_area doctor_page">
        <div class="container">
            <div class="row">
            	@foreach ($result as $each)
                <div class="col-md-6 col-lg-3">
                    <div class="single_expert mb-40">
                        <div class="expert_thumb">
                            <img src="{{asset('docmed/img/experts/9.png')}}" alt="">
                        </div>
                        <div class="experts_name text-center">
                            <h3>{{ $each->name }}</h3>
                            <span>{{ $each->major_name }}</span>
                        </div>
                    </div>
                </div>
            	@endforeach
            </div>
        </div>
    </div>
    <!-- expert_doctors_area_end -->



	</form>
</div>

@endsection

@push('ajax')
	<script type="text/javascript">
			$('document').ready(function(){

				$("#select_major").change(function(){
					var values_select_major = $(this).val();
					// alert(values_select_major);

					$.ajax({
						url:'{{route('get_doctor_by_major')}}',
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

@endpush