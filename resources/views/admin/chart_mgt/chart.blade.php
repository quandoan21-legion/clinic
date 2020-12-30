@extends('admin.layout')
@section('title','Chart')
@section('content')
<form> 
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label">Date</label>
				<div class="col-sm-6">
					<input class="form-control" name="date" id="select_date" type="date" value="{{ date('Y-m-d')}}" />
				</div>
				
			</div>
		</fieldset>
</form>
	<div class="col-md-12">
		    <div class="card">
		        <div class="header">
		            Views
		            <p class="category">Bar Chart</p>
		    </div>

			<div class="content">
			   <canvas id="myChart" width="300" height="100"></canvas>
			</div>
		</div>
	</div>
@endsection
@push('ajax')
<script>

	$('document').ready(function(){
        let myChart;
        var chartOption = {
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true,
                                stepSize: 1.0,
                            },
                        }]
                    },
                    responsive              : true,
                    maintainAspectRatio     : true,
                    datasetFill             : true
                };
        // console.log($("#select_date").val());
        $.ajax({
            url:'{{ route('get_stat_doctors_daily') }}',
            type:'GET',
            dataType:'json',
            data:{
                date: $("#select_date").val()
            }
        })
        .done(function(respone){
            // alert('respone');
            // console.log(respone);
            var chartData = {
                    labels: respone.array_name_doctor,
                    datasets: [{
                        label: 'Total appointment',
                        data: respone.array_count,
                        backgroundColor:
                            'rgba(255, 99, 132, 0.2)',
                        borderColor:
                            'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                };
            var ctx = document.getElementById('myChart').getContext('2d');
            myChart = new Chart(ctx, {
                type: 'horizontalBar',
                data: chartData,
                options: chartOption
            });

        });


		$("#select_date").change(function() {
			var select_date = $("#select_date").val();
            $.ajax({
                url:'{{ route('get_stat_doctors_daily') }}',
                type:'GET',
                dataType:'json',
                data:{

                    date: $("#select_date").val()
                }
            })
            .done(function(respone){
                var chartData = {
                        labels: respone.array_name_doctor,
                        datasets: [{
                            label: 'Total appointment',
                            data: respone.array_count,
                            backgroundColor: 
                                'rgba(255, 99, 132, 0.2)',
                            borderColor: 
                                'rgba(255, 99, 132, 1)',   
                            borderWidth: 1
                        }]
                    };
                myChart.data = chartData;
                myChart.update();
            });
			// alert(select_date);
		});
	});




</script>


@endpush