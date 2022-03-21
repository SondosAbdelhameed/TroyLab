<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TroyLab Dashboard</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Toastr -->
    <link href="{{asset('admin_assets/css/lib/toastr/toastr.min.css')}}" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="{{asset('admin_assets/css/lib/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <!-- Range Slider -->
    <link href="{{asset('admin_assets/css/lib/rangSlider/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/css/lib/rangSlider/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
    <!-- Bar Rating -->
    <link href="{{asset('admin_assets/css/lib/barRating/barRating.css')}}" rel="stylesheet">
    <!-- Nestable -->
    <link href="{{asset('admin_assets/css/lib/nestable/nestable.css')}}" rel="stylesheet">
    <!-- JsGrid -->
    <link href="{{asset('admin_assets/css/lib/jsgrid/jsgrid-theme.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_assets/css/lib/jsgrid/jsgrid.min.css')}}" type="text/css" rel="stylesheet" />
    <!-- Datatable -->
    <link href="{{asset('admin_assets/css/lib/datatable/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_assets/css/lib/data-table/buttons.bootstrap.min.css')}}" rel="stylesheet" />
    <!-- Calender 2 -->
    <link href="{{asset('admin_assets/css/lib/calendar2/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Weather Icon -->
    <link href="{{asset('admin_assets/css/lib/weather-icons.css')}}" rel="stylesheet" />
    <!-- Owl Carousel -->
    <link href="{{asset('admin_assets/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin_assets/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <!-- Select2 -->
    <link href="{{asset('admin_assets/css/lib/select2/select2.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link href="{{asset('admin_assets/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <!-- Calender -->
    <link href="{{asset('admin_assets/css/lib/calendar/fullcalendar.css')}}" rel="stylesheet" />

    <!-- Common -->
    <link href="{{asset('admin_assets/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/css/lib/helper.css')}}" rel="stylesheet">
    <link href="{{asset('admin_assets/css/style.css')}}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@300&display=swap" rel="stylesheet">
    @if(app()->getLocale()=='ar' )
	<link href="{{asset('admin_assets/css/style_ar.css')}}" rel="stylesheet">
    @endif
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <div class="logo">
                    <a href="index.html">
                        <!-- <img src="{{asset('admin_assets/images/logo.png')}}" alt="" /> -->
                        <span>Dashboard</span>
                    </a>
                </div>
                <ul>
                    <li>
                        <a href="{{route('dashboard')}}">
                            <i class="ti-home"></i>Dashboard</a>
                    </li>

                    <li>
                        <a href="{{route('mschool.index')}}">
                            <i class="ti-briefcase"></i> Schools </a>
                    </li>
                    <li>
                        <a href="{{route('mstudent.index')}}">
                            <i class="ti-id-badge"></i>Students</a>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ti-power-off"></i>logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                            </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->


    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="{{asset('admin_assets/images/avatar/3.jpg')}}" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="{{asset('admin_assets/images/avatar/3.jpg')}}" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="{{asset('admin_assets/images/avatar/3.jpg')}}" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="{{asset('admin_assets/images/avatar/3.jpg')}}" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="{{asset('admin_assets/images/avatar/1.jpg')}}" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="{{asset('admin_assets/images/avatar/2.jpg')}}" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="{{asset('admin_assets/images/avatar/3.jpg')}}" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img" src="{{asset('admin_assets/images/avatar/2.jpg')}}" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34 PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Upgrade Now</span>
                                        <p class="trial-day">30 Days Trail</p>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-email"></i>
                                                    <span>Inbox</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-lock"></i>
                                                    <span>Lock Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-4">
      @if(session()->has('message'))
      <div class="alert alert-success" id="success-alert">
      {{ session()->get('message') }}
      </div>
      @endif
    </div>
  </div>
</div>
	@yield('content')






	    <!-- Common -->
    <script src="{{asset('admin_assets/js/lib/jquery.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/jquery.nanoscroller.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/preloader/pace.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/scripts.js')}}"></script>

    <!-- Calender -->
    <script src="{{asset('admin_assets/js/lib/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/moment/moment.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/calendar/fullcalendar-init.js')}}"></script>

    <!--  Flot Chart -->
    <script src="{{asset('admin_assets/js/lib/flot-chart/excanvas.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/flot-chart/jquery.flot.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/flot-chart/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/flot-chart/jquery.flot.time.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/flot-chart/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/flot-chart/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/flot-chart/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/flot-chart/curvedLines.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/flot-chart/flot-chart-init.js')}}"></script>

    <!--  Chartist -->
    <script src="{{asset('admin_assets/js/lib/chartist/chartist.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/chartist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/chartist/chartist-init.js')}}"></script>

    <!--  Chartjs -->
    <script src="{{asset('admin_assets/js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/chart-js/chartjs-init.js')}}"></script>

    <!--  Knob -->
    <script src="{{asset('admin_assets/js/lib/knob/jquery.knob.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/knob/knob.init.js')}}"></script>

    <!--  Morris -->
    <script src="{{asset('admin_assets/js/lib/morris-chart/raphael-min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/morris-chart/morris.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/morris-chart/morris-init.js')}}"></script>

    <!--  Peity -->
    <script src="{{asset('admin_assets/js/lib/peitychart/jquery.peity.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/peitychart/peitychart.init.js')}}"></script>

    <!--  Sparkline -->
    <script src="{{asset('admin_assets/js/lib/sparklinechart/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/sparklinechart/sparkline.init.js')}}"></script>

    <!-- Select2 -->
    <script src="{{asset('admin_assets/js/lib/select2/select2.full.min.js')}}"></script>

    <!--  Validation -->
    <script src="{{asset('admin_assets/js/lib/form-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/form-validation/jquery.validate-init.js')}}"></script>

    <!--  Circle Progress -->
    <script src="{{asset('admin_assets/js/lib/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/circle-progress/circle-progress-init.js')}}"></script>

    <!--  Vector Map -->
    <script src="{{asset('admin_assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/country/jquery.vmap.algeria.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/country/jquery.vmap.argentina.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/country/jquery.vmap.brazil.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/country/jquery.vmap.france.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/country/jquery.vmap.germany.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/country/jquery.vmap.greece.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/country/jquery.vmap.iran.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/country/jquery.vmap.iraq.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/country/jquery.vmap.russia.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/country/jquery.vmap.tunisia.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/country/jquery.vmap.europe.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/vector-map/country/jquery.vmap.usa.js')}}"></script>

    <!--  Simple Weather -->
    <script src="{{asset('admin_assets/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/weather/weather-init.js')}}"></script>

    <!--  Owl Carousel -->
    <script src="{{asset('admin_assets/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>

    <!--  Calender 2 -->
    <script src="{{asset('admin_assets/js/lib/calendar-2/moment.latest.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/calendar-2/pignose.calendar.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/calendar-2/pignose.init.js')}}"></script>


    <!-- Datatable -->
    <script src="{{asset('admin_assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/buttons.dataTables.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/buttons.flash.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/jszip.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/data-table/datatables-init.js')}}"></script>

    <!-- JS Grid -->
    <script src="{{asset('admin_assets/js/lib/jsgrid/db.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/jsgrid/jsgrid.core.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/jsgrid/jsgrid.load-indicator.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/jsgrid/jsgrid.load-strategies.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/jsgrid/jsgrid.sort-strategies.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/jsgrid/jsgrid.field.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/jsgrid/fields/jsgrid.field.text.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/jsgrid/fields/jsgrid.field.number.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/jsgrid/fields/jsgrid.field.select.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/jsgrid/fields/jsgrid.field.checkbox.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/jsgrid/fields/jsgrid.field.control.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/jsgrid/jsgrid-init.js')}}"></script>

    <!--  Datamap -->
    <script src="{{asset('admin_assets/js/lib/datamap/d3.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/datamap/topojson.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/datamap/datamaps.world.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/datamap/datamap-init.js')}}"></script>

    <!--  Nestable -->
    <script src="{{asset('admin_assets/js/lib/nestable/jquery.nestable.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/nestable/nestable.init.js')}}"></script>

    <!--ION Range Slider JS-->
    <script src="{{asset('admin_assets/js/lib/rangeSlider/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/rangeSlider/moment.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/rangeSlider/moment-with-locales.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/rangeSlider/rangeslider.init.js')}}"></script>

    <!-- Bar Rating-->
    <script src="{{asset('admin_assets/js/lib/barRating/jquery.barrating.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/barRating/barRating.init.js')}}"></script>

    <!-- jRate -->
    <script src="{{asset('admin_assets/js/lib/rating1/jRate.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/rating1/jRate.init.js')}}"></script>

    <!-- Sweet Alert -->
    <script src="{{asset('admin_assets/js/lib/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/sweetalert/sweetalert.init.js')}}"></script>

    <!-- Toastr -->
    <script src="{{asset('admin_assets/js/lib/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('admin_assets/js/lib/toastr/toastr.init.js')}}"></script>


    <!--  Dashboard 1 -->
    <script src="{{asset('admin_assets/js/dashboard1.js')}}"></script>
    <script src="{{asset('admin_assets/js/dashboard2.js')}}"></script>

    <script>
      /*$(document).ready(function() {
        $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#success-alert").slideUp(500);
        });
      });*/

      window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove();
          });
      }, 2000);
    </script>

</body>

</html>
