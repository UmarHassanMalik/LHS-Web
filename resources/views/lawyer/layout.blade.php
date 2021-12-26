
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        LAWYER PROFILE
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />

    <link href="/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />

</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
            <div class="logo">
                <a href="" class="simple-text logo-normal">
                    Lawyer Hiring System
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li class=" ">
                        <a href="{{route('lawyerDashboard')}}">
                            <i class="fa fa-cube" aria-hidden="true"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('lawyerProfile')}}">
                            <i class="bi bi-person"></i>
                            <p>Profile Settings</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('appliedCases')}}">
                            <i class="fa fa-graduation-cap"></i>
                            <p>Applied Cases</p>
                        </a>
                    </li>
                    <li>
                    <li>
                        <a href="{{route('ongoingLawyerCases')}}">
                            <i class="fa fa-paper-plane"></i>
                            <p>Ongoing Cases</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('hiredCases')}}">
                            <i class="fa fa-envelope"></i>
                            <p>Closed Cases</p>
                        </a>
                    </li>
                    <li >
                        <a href="{{route('applyForCases')}}">
                          <i class="now-ui-icons design_bullet-list-67"></i>
                          <p>Apply for Cases</p>
                        </a>
                      </li>
                    <li>
                        <li >
                            <a href="{{route('myArticles')}}">
                              <i class="fa fa-file"></i>
                              <p>My Articles</p>
                            </a>
                          </li>
                      

                </ul>
            </div>
        </div>
        <div class="main-panel" id="main-panel">

            <!-- Navbar -->

            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">Dashboard</a>
                    </div>

                    <div class="collapse navbar-collapse justify-content-end" id="navigation">

                        <ul class="navbar-nav">
                       
                        
                           
                              <li class="nav-item dropdown" style="cursor:pointer">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                                  aria-haspopup="true" aria-expanded="false">
                                  <i class="now-ui-icons bi bi-person " style="font-size: 20px"></i>
                                  <p style="font-size: 12px">
                                    <span class="d-lg-none d-md-block"></span>
                                    {{ Auth::user()->displayName}}
                                  </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item " href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><i class="ni ni-user-run"></i>{{ __('Logout') }}</a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                  </form>
                
                
                                </div>
                              </li>
                  
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')



            <footer class="footer">
                <div class=" container-fluid ">
                    <nav>
                        <ul style="cursor: pointer">
                            <li>
                                <a href="">
                                    Zohaib Haider Umar
                                </a>
                            </li>
                            <li>
                                <a href="http://lhs.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/UmarHassanMalik">
                                    Git
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright" id="copyright">
                        &copy;
                        <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                        </script>, Designed by <a href="" target="_blank">Zohaib Haider & Umar</a>.  <a
                            href="" target="_blank"></a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="/assets/js/core/jquery.min.js"></script>
    <script src="/assets/js/core/popper.min.js"></script>
    <script src="/assets/js/core/bootstrap.min.js"></script>
    <script src="/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="/assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="/assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center  parallax effects, scripts for the example pages etc -->
    <script src="/assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
</body>

</html>