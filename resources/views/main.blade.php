<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>PROJECT KP</title>

  <!-- Bootstrap CSS -->
  <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ URL::asset('css/bootstrap-theme.css')}}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ URL::asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
  <link href="{{ URL::asset('css/font-awesome.min.css')}}" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="{{ URL::asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
  <link href="{{ URL::asset('assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="{{ URL::asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css')}}" type="text/css">
  <link href="{{ URL::asset('css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{ URL::asset('css/fullcalendar.css')}}">
  <link href="{{ URL::asset('css/widgets.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('css/style-responsive.css')}}" rel="stylesheet" />
  <link href="{{ URL::asset('css/xcharts.min.css')}}" rel=" stylesheet">
  <link href="{{ URL::asset('css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="/home" class="logo">PROJECT<span class="lite">KP</span></a>
      <!--logo end-->


      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
      <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </header>
    <!--header end-->

<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="deactive">
            <a class="" href="/home">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>

          <!--submenu untuk admin-->
          @if(auth()->user()->role == 'admin')
          <li class="sub-menu">
            <a href="/pengguna" class="" >
                          <i class="icon_table"></i>
                          <span>Pengguna</span>
                      </a>
          </li>
          @endif


          <!--submenu untuk siswa-->
          @if(auth()->user()->role == 'siswa')
          <li class="sub-menu">
          <a href="/siswa/materi" class="">
                          <i class="icon_book_alt"></i>
                          <span>Materi</span>
                      </a>
                    </li>
          </li>
          @endif
          @if(auth()->user()->role == 'siswa')
          <li class="sub-menu">
            <a href="/siswa/assignment" class="">
                          <i class="icon_clipboard"></i>
                          <span>Tugas</span>
                      </a>
          </li>
          @endif
          @if(auth()->user()->role == 'siswa')
          <li class="sub-menu">
            <a href="/siswa/presence" class="">
                          <i class="icon_check"></i>
                          <span>Presensi</span>
                      </a>
          </li>
          @endif

          <!--submenu untuk guru-->
          @if(auth()->user()->role == 'guru')
          <li class="sub-menu">
            <a href="/materi" class="">
                          <i class="icon_book_alt"></i>
                          <span>Materi</span>
                      </a>
          </li>
          @endif
          @if(auth()->user()->role == 'guru')
          <li class="sub-menu">
            <a href="/assignment" class="">
                          <i class="icon_clipboard"></i>
                          <span>Tugas</span>
                      </a>
          </li>
          @endif
          @if(auth()->user()->role == 'guru')
          <li class="sub-menu">
            <a href="/presence" class="">
                          <i class="icon_check"></i>
                          <span>Presensi</span>
                      </a>
          </li>
          @endif
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
@yield('content')

<!-- container section start -->

  <!-- javascripts -->
  <script src="{{ URL::asset('js/jquery.js')}}"></script>
  <script src="{{ URL::asset('js/jquery-ui-1.10.4.min.js')}}"></script>
  <script src="{{ URL::asset('js/jquery-1.8.3.min.js')}}"></script>
  <script src="{{ URL::asset('js/jquery-ui-1.9.2.custom.min.js')}}" type="text/javascript" ></script>
  <!-- bootstrap -->
  <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
  <!-- nice scroll -->
  <script src="{{ URL::asset('js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{ URL::asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="{{ URL::asset('assets/jquery-knob/js/jquery.knob.js')}}"></script>
  <script src="{{ URL::asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
  <script src="{{ URL::asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <script src="{{ URL::asset('js/owl.carousel.js')}}"></script>
  <!-- jQuery full calendar -->
  <script src="{{ URL::asset('js/fullcalendar.min.js')}}"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="{{ URL::asset('assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
    <!--script for this page only-->
    <script src="{{ URL::asset('js/calendar-custom.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.rateit.min.js')}}"></script>
    <!-- custom select -->
    <script src="{{ URL::asset('js/jquery.customSelect.min.js')}}"></script>
    <script src="{{ URL::asset('assets/chart-master/Chart.js')}}"></script>

    <!--custome script for all page-->
    <script src="{{ URL::asset('js/scripts.js')}}"></script>
    <!-- custom script for this page-->
    <script src="{{ URL::asset('js/sparkline-chart.js')}}"></script>
    <script src="{{ URL::asset('js/easy-pie-chart.js')}}"></script>
    <script src="{{ URL::asset('js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ URL::asset('js/xcharts.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.autosize.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.placeholder.min.js')}}"></script>
    <script src="{{ URL::asset('js/gdp-data.js')}}"></script>
    <script src="{{ URL::asset('js/morris.min.js')}}"></script>
    <script src="{{ URL::asset('js/sparklines.js')}}"></script>
    <script src="{{ URL::asset('js/charts.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.slimscroll.min.js')}}"></script>
    <script>
      //knob
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
