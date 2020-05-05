<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
      <meta name="author" content="GeeksLabs">
      <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="{{ asset('img/favicon.png')}}"/>
    <!-- Bootstrap CSS -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
        <!-- bootstrap theme -->
        <link href="{{ asset('css/bootstrap-theme.css')}}" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="{{ asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
        <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" />
        <!-- Custom styles -->
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('css/style-responsive.css')}}" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}"/>  <!-- bootstrap theme -->
        <link href="{{ asset('css/bootstrap-theme.css')}}" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="{{ asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
        <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" />
        <!-- full calendar css-->
        <link href="{{ asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
        <!-- easy pie chart-->
        <link href="{{ asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}" type="text/css">
        <link href="{{ asset('css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
        <!-- Custom styles -->
        <link rel="stylesheet" href="{{ asset('css/fullcalendar.css')}}">
        <link href="{{ asset('css/widgets.css')}}" rel="stylesheet">
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('css/style-responsive.css')}}" rel="stylesheet" />
        <link href="{{ asset('css/xcharts.min.css')}}" rel=" stylesheet">
        <link href="{{ asset('css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">

        <style media="screen">
        .container{
                width: 100%;
              }
              .table-responsive {
              	overflow-x: auto;
              }

        </style>
        <script src="{{ asset('js/jquery.min.js')}}"></script>
        <script src="{{ asset('js/jquery.js')}}"></script>
        <script src="{{ asset('js/jquery-ui-1.10.4.min.js')}}"></script>
        <script src="{{ asset('js/jquery-1.8.3.min.js')}}"></script>
        <!-- bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
        <!-- nice scroll -->
        <script src="{{ asset('js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{ asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <!-- charts scripts -->
        <script src="{{asset('assets/jquery-knob/js/jquery.knob.js')}}"></script>
        <script src="{{ asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
        <script src="{{ asset('js/owl.carousel.js')}}"></script>
        <!-- jQuery full calendar -->
        <script src="{{ asset('js/fullcalendar.min.js')}}"></script>
        <!-- Full Google Calendar - Calendar -->
        <script src="{{ asset('assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
        <!--script for this page only-->
        <script src="{{ asset('js/calendar-custom.js')}}"></script>
        <script src="{{ asset('js/jquery.rateit.min.js')}}"></script>
        <!-- custom select -->
        <script src="{{ asset('js/jquery.customSelect.min.js')}}"></script>
        <script src="{{ asset('assets/chart-master/Chart.js')}}"></script>
        <!--custome script for all page-->
        <script src="{{ asset('js/scripts.js')}}"></script>
        <!-- custom script for this page-->
        <script src="{{ asset('js/sparkline-chart.js')}}"></script>
        <script src="{{ asset('js/easy-pie-chart.js')}}"></script>
        <script src="{{ asset('js/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{ asset('js/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{ asset('js/xcharts.min.js')}}"></script>
        <script src="{{ asset('js/jquery.autosize.min.js')}}"></script>
        <script src="{{ asset('js/jquery.placeholder.min.js')}}"></script>
        <script src="{{ asset('js/gdp-data.js')}}"></script>
        <script src="{{ asset('js/morris.min.js')}}"></script>
        <script src="{{ asset('js/sparklines.js')}}"></script>
        <script src="{{ asset('js/charts.js')}}"></script>
        <script src="{{ asset('js/jquery.slimscroll.min.js')}}"></script>
  <title>

      @yield('title')
  </title>


</head>

<body >

  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Cor <span class="lite">Daid</span></a>
      <!--logo end-->


      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="{{asset('img/user_img.jpg')}}" style="width:40px;heigh:40px;">
                            </span>
                            <span class="username">{{Auth::user()->name}}</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a  href="{{ url('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i class="icon_key_alt"></i> Log Out</a>

                  <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </li>

            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse" >
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="{{ url('/') }}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:void(0);" class="">
                          <i class="icon_document_alt"></i>
                          <span>CRM</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{ url('/complaints/create') }}">CRM Registration</a></li>
              <li><a class="" href="{{ url('/complaints') }}">CRM list</a></li>
            </ul>
          </li>


          <li>
            <a class="" href="{{ url('/programs') }}">
                          <i class="icon_piechart"></i>
                          <span>Programs</span>

                      </a>

          </li>
          <li>
            <a class="" href="{{ url('/projects') }}">
                          <i class="icon_piechart"></i>
                          <span>Projects</span>

                      </a>

          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-bar-chart-o active"></i>
                          <span>Reports</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="{{url('/home/report')}}">CRM Report</a></li>
            </ul>
          </li>


        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper" >


        <!--overview start-->

          @yield('main_content')
        <!-- project team & activity end -->

      </section>

    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->





      <script type="text/javascript">


      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });

    </script>

</body>

</html>
