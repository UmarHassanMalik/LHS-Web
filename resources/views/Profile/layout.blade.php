
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    CLIENT PROFILE
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->

  <link href="{{ url('css/dashboard/bootstrap.min.css') }}" rel="stylesheet" />

  <link href="{{ url('css/dashboard/now-ui-dashboard.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
         You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">

        <a href="/" class="simple-text logo-normal">
          Lawyer Hiring System
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class=" ">
            <a href="{{url('/Profile/dashboard')}}">
              <i class="fa fa-cube"></i>
              <p>Dashboard</p>
            </a>
          </li>

     
          <li>
            <a href="{{url('/Profile/Settings')}}">
              <i class="bi bi-person"></i>
              <p>Profile Settings</p>
            </a>
          </li>
          <li>
            <a href="{{url('/Profile/Cases/Opened')}}">
              <i class="fa fa-envelope-open" aria-hidden="true"></i>
              <p>Opened Cases</p>
            </a>
          </li>
          <li>
            <a href="{{url('/Profile/Cases/Ongoing')}}">
              <i class="fa fa-file"></i>
              <p>Ongoing Cases</p>
            </a>
          </li>
          <li >
            <a href="{{url('/Profile/Cases/Closed')}}">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <p>Closed Cases</p>
            </a>
          </li>
          <li>
          
   

        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
          
            <div class="navbar-toggle">
              Testing
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>

          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">

            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">
                  <i class="now-ui-icons bi bi-house-door" style="font-size: 20px"></i>
                  <p style="font-size: 12px">
                    <span class="d-lg-none d-md-block"></span>
                    Home
                  </p>
                </a>
              </li>
           
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
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>


                </div>
              </li>
         
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
     


      @yield('content')
      

 
 <!--   Core JS Files   -->
 <script src="{{ url('js/dashboardJS/core/jquery.min.js') }}"></script>
      <script src="{{ url('js/dashboardJS/core/popper.min.js') }}"></script>
      <script src="{{ url('js/dashboardJS/core/bootstrap.min.js') }}"></script>
      <script src="{{ url('js/dashboardJS/plugins/perfect-scrollbar.jquery.min.js') }}"></script>


      <!--  Notifications Plugin    -->
      <script src="{{ url('js/dashboardJS/plugins/bootstrap-notify.js') }}"></script>

      <script src="{{ url('js/dashboardJS/now-ui-dashboard.min.js') }}"></script>

</body>

</html>