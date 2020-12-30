<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{asset('img/icon.ico')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
    <link href="{{asset('css/light-bootstrap-dashboard.css?v=1.4.1')}}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    {{-- <link href="{{asset('css/demo.css')}}" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}"/>
    <!--     Fonts and icons     -->
    {{-- <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet"> --}}
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="black" data-image="{{asset('img/doctor_sidebar.jpg')}}">
        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->
        <div class="sidebar-wrapper ps-container ps-theme-default ps-active-y" data-ps-id="e7ad6565-8640-3144-70d3-1d30f8c80ff0">
            <div class="user">
                <div class="info">
                    <div class="photo">
                        <img height="50px"  src="{{ asset('storage/'.Session::get('profile_image')) }}">
                    </div>

                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        <span>
                          {{Session::get('name')}}
                          <b class="caret"></b>
                      </span>
                  </a>

                  <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="{{route('your_informations',['admin_id'=>Session::get('admin_id')])}}">
                                <span class="sidebar-normal">Update your information</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav">
        @if (Session::get('level') == '1')
            
                <li class="active">
                <a href="{{route('admins')}}">
                    <i class="pe-7s-culture"></i>
                    <p>Admins mgt</p>
                </a>
            </li>
            
        @endif

        <li class="active">
            <a href="{{route('majors')}}">
                <i class="pe-7s-id"></i>
                <p>Majors mgt</p>
            </a>
        </li>
        
        <li class="active">
            <a href="{{route('patients')}}">
                <i class="pe-7s-users"></i>
                <p>Patients mgt</p>
            </a>
        </li>

        <li class="active">
            <a href="{{route('doctors_mgt')}}">
                <i class="pe-7s-add-user"></i>
                <p>doctors mgt</p>
            </a>
        </li>

        <li class="active">
            <a href="{{route('patient_records')}}">
                <i class="pe-7s-note2"></i>
                <p>patient record</p>
            </a>
        </li>

        <li class="active">
            <a href="{{route('get_chart')}}">
                <i class="pe-7s-display1"></i>
                <p>Appointment by day</p>
            </a>
        </li>



        <li class="active">
            <a href="{{route('get_chart_monthly')}}">
                <i class="pe-7s-display1"></i>
                <p>Appointment by month</p>
            </a>
        </li>

        {{-- <li class="active">
            <a href="{{route('demo')}}">
                <i class="pe-7s-display1"></i>
                <p>demo</p>
            </a>
        </li> --}}

    </ul>
</div>
</li>
</ul>
</div>

    


    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon">
                        <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                        <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                         <i class="pe-7s-note2"></i>
                    </button>
                   
                    <a class="navbar-brand" href="">Admin</a>


                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{route('logout_admin')}}">
                                <i class="fa fa-line-chart"></i>
                                <p>Log out</p>
                            </a>
                        </li>

                        
                    </ul>


                </div>
                
            </div>
        </nav>

        <div class="main-content">
            <div class="container-fluid">

                <div class="row">
                    
                    @yield('content')
                </div>
             </div>
                        
                 
               



               

       

    </div>
</div>


</body>
     
    <!--   Core JS Files  -->
    <script src="{{asset('js/jquery.min.js')}}"  type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js ')}}" type="text/javascript"></script>
    <script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>


    <!--  Forms Validations Plugin -->
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>

    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{asset('js/moment.min.js')}}"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>

    <!--  Select Picker Plugin -->
    <script src="{{asset('js/bootstrap-selectpicker.js')}}"></script>

    <!--  Checkbox, Radio, Switch and Tags Input Plugins -->
        <script src="{{asset('js/bootstrap-switch-tags.min.js')}}"></script>

    <!--  Charts Plugin -->
    <script src="{{asset('js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{asset('js/bootstrap-notify.js')}}"></script>

    <!-- Sweet Alert 2 plugin -->
    <script src="{{asset('js/sweetalert2.js')}}"></script>

    <!-- Vector Map plugin -->
    <script src="{{asset('js/jquery-jvectormap.js')}}"></script>

    <!--  Google Maps Plugin    -->
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}

    <!-- Wizard Plugin    -->
    <script src="{{asset('js/jquery.bootstrap.wizard.min.js')}}"></script>

    <!--  Bootstrap Table Plugin    -->
    <script src="{{asset('js/bootstrap-table.js')}}"></script>

    <!--  Plugin for DataTables.net  -->
    <script src="{{asset('js/jquery.datatables.js')}}"></script>


    <!--  Full Calendar Plugin    -->
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
    <script src="{{asset('js/light-bootstrap-dashboard.js?v=1.4.1')}}"></script>

    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    {{-- <script src="{{asset('js/demo.js')}}"></script> --}}
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-table.js')}}"></script>
    

    @stack('ajax')

</html>
