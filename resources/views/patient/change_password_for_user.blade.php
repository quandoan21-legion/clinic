@extends('patient.layout')
@section('content')
@section('title','Update your information')

<div class="table">

    <form method="post" action="{{route('process_change_password_for_user',['patient_id'=>Session::get('patient_id')])}}">
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
                        @if (Session::has('error'))
                        <h4>{{Session::get('error')}}</h4>
                        @endif

                        @if (Session::has('success'))
                        <h4>{{Session::get('success')}}</h4>
                        @endif
                        @if ($errors->any())
                        <div class  ="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                        <div class="content">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" 
                                            name="password" 
                                            class="form-control"
                                            value="{{$each->password}}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
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







