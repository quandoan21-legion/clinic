@extends('patient.layout')
@section('content')
@section('title','Update your information')

<div class="table">

    <form >
	{{-- <form id="allInputsFormValidation" class="form-horizontal"  method="post" action="{{ route('process_update_infomation_for_user',['patient_id'=>$array_patient[0]->Session::get('patient_id')]) }}" novalidate="novalidate"> --}}
		
	{{-- <form method="post" action="{{ route('process_update_admin',['admin_id'=>$array_admin[0]->admin_id]) }}"> --}}

		<legend>Update an Admin</legend>

		@foreach ($array_patient as $each)
		<input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                   <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Profile</h4>
                        </div>
                        <div class="content">
                                <form>
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" 
                                            class="form-control" 
                                            disabled="" 
                                            value="{{$each->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone number</label>
                                            <input type="text" 
                                            class="form-control" 
                                            disabled="" 
                                            value="{{$each->phone_numb}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" 
                                            class="form-control"  
                                            disabled="" 
                                            value="{{$each->phone_numb}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Date of birth</label>
                                            <input type="text" 
                                            class="form-control" 
                                            disabled=""  
                                            value="{{$each->dob}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="content">
                                <div class="author">

                                    <img class="avatar border-gray" src="{{ asset('storage/'.Session::get('profile_image')) }}">

                                    <h3 class="title">{{$each->name}}<br>
                                    </h3>

                                </div>

                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
		@endforeach
	</form>
</div>








@endsection







