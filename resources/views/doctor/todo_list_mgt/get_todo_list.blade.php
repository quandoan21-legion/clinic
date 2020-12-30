@extends('doctor.layout')


@section('title','Chart')
@section('content')
<form action="{{route('get_todo_list',['doctor_id'=>Session::get('doctor_id')])}}">
	
	<fieldset>
					<div class="form-group">
						<label class="col-sm-2 control-label">Date</label>
						<div class="col-sm-6">
                            <select name="month" class="form-control" id="select_month" >
                                <option value="0">--Chon thang--</option>
                                @for ($i = 1; $i <=12 ; $i++)
                                    <option value="{{$i}}"
                                        @if ($i == date('m'))
                                            selected="" 
                                        @endif
                                    >{{$i}}</option>
                                @endfor
                            </select>
                            <select name="year" class="form-control" id="select_year">
                                <option value="0">--Chon nam--</option>
                                @for ($i = 2100; $i >=1900 ; $i--)
                                    <option value="{{$i}}"
                                        @if ($i == date('Y'))
                                            selected="" 
                                        @endif
                                    >{{$i}}</option>
                                @endfor   
                            </select>
						</div>
                    </div>
						
					</div>
				</fieldset>
			<button>sad</button>

</form>
@endsection