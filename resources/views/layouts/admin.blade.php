<!doctype html>
<html lang="en">

<title>Admin</title>
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:29:18 GMT -->
<head>

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="{{asset('assets/css/material-dashboard.css')}}">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
    <!--     Fonts and icons     -->
    <link rel="icon" type="image/png" href="ptoo/images/icons/favicon.png"/>
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/google-roboto-300-700.css')}}">
    <!--     Calendar    -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
</head>

<body>
<div class="wrapper">
    <div class="sidebar" data-active-color="rose"  data-background-color="black" data-image="{{asset('assets/img/sidebar-1.jpg')}}">
        <!--
    Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
    Tip 2: you can also add an image using data-image tag
    Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
        <div class="logo">
            <a href="{{ url('/home') }}" class="simple-text">
                SSPLUS
            </a>
        </div>
        <div class="logo logo-mini">
            <a href="{{ url('/home') }}"  class="simple-text">
                SP
            </a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="{{asset('assets/img/faces/SSP.jpg')}}" />
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                        {{ Auth::user()->name }}
                        <b class="caret"></b>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">

                            <li><a class="" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                <span class="glyphicon glyphicon-log-out"></span>  {{ __(' Déconnexion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
            <li >
                    <a href="{{ url("/") }}">
                        <i class="fa fa-home"></i>
                        <p>Accueil</p>
                    </a>
                </li>

                <li >
                    <a href="{{ url('/home') }}" >
                        <i class="material-icons">dashboard</i>
                        <p>Tableau de bord</p>
                    </a>
                </li>

                <li>
                    <a href="{{ route('emp.index') }}">
                        <i class="fa fa-users"></i>
                        <p>Gestion employes</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('clientt.index') }}">
                        <i class="glyphicon glyphicon-user"></i>
                        <p>Gestion Clients</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('interAdmin.index') }}">
                        <i class="glyphicon glyphicon-pushpin"></i>
                        <p>Intervention</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('calend') }}">
                        <i class="fa fa-calendar"></i>
                        <p>Calendar</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('fichierClient.index') }}">
                        <i class="glyphicon glyphicon-folder-open"></i>
                        <p>Fichiers</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contratt.index') }}">
                        <i class="fa fa-handshake-o"></i>
                        <p>Contrats</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('userRec.index') }}">
                        <i class="glyphicon glyphicon-warning-sign"></i>
                        <p>Gestion des reclamations</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('Evenment.index') }}">
                        <i class="glyphicon glyphicon-star-empty"></i>
                        <p>Evenment</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                        <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                        <i class="material-icons visible-on-sidebar-mini">view_list</i>
                    </button>
                </div>



            </div>
        </nav>

            @yield('content')



    </div>
</div>

<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            
            <li class="header-title">Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="text-center">
                        <span class="badge filter badge-white" data-color="white"></span>
                        <span class="badge filter badge-black active" data-color="black"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <div class="togglebutton switch-sidebar-mini">
                        <label>
                            <input type="checkbox" unchecked="">
                        </label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Image</p>
                    <div class="togglebutton switch-sidebar-image">
                        <label>
                            <input type="checkbox" checked="">
                        </label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>




        </ul>
    </div>
</div>

</body>
<!--   Core JS Files   -->
<script src="{{ asset('assets/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/material.min.js')}}"></script>
<script src="{{ asset('assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('assets/js/jquery.validate.min.js')}}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('assets/js/moment.min.js')}}"></script>
<!--  Charts Plugin -->
<script src="{{ asset('assets/js/chartist.min.js')}}"></script>
<!--  Plugin for the Wizard -->
<script src="{{ asset('assets/js/jquery.bootstrap-wizard.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/bootstrap-notify.js')}}"></script>
<!--   Sharrre Library    -->
<script src="{{ asset('assets/js/jquery.sharrre.js')}}"></script>
<!-- DateTimePicker Plugin -->
<script src="{{ asset('assets/js/bootstrap-datetimepicker.js')}}"></script>
<!-- Vector Map plugin -->
<script src="{{ asset('assets/js/jquery-jvectormap.js')}}"></script>
<!-- Sliders Plugin -->
<script src="{{ asset('assets/js/nouislider.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<!--<script src="../assets/js/jquery.select-bootstrap.js"></script>-->
<!-- Select Plugin -->
<script src="{{ asset('assets/js/jquery.select-bootstrap.js')}}"></script>
<!--  DataTables.net Plugin    -->
<script src="{{ asset('assets/js/jquery.datatables.js')}}"></script>
<!-- Sweet Alert 2 plugin -->
<script src="{{ asset('assets/js/sweetalert2.js')}}"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('assets/js/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin    -->
<script src="{{ asset('assets/js/fullcalendar.min.js')}}"></script>
<!-- TagsInput Plugin -->
<script src="{{ asset('assets/js/jquery.tagsinput.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('assets/js/material-dashboard.js')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        md.initSliders()
        demo.initFormExtendedDatetimepickers();
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Recherche ",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>



<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:16 GMT -->
</html>