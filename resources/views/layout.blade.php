<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <link rel="stylesheet" href="{{url('/css/home.css')}}" />

    <script>
        setTimeout(function () { $("#successmessage").hide(); }, 5000);
    </script>

    <title>
        Home
    </title>


</head>

<body>

    <div class="col-md-12 py-0 navbar navbar-expand-sm navbar-dark cyan navbar-collapse sticky-top" type="navmain">
        <a class=" text-success ms-2 font-bold" href="#">Welcome</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSuapportedContent-4">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img width="30" height="30" class="rounded-circle" src="../images/profile.jpg" alt="..."> {{Auth::user()->displayName}}</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-cyan"
                        aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item " href="{{url('/Profile/dashboard')}}"><i class="fa fa-user"></i> &nbsp; &nbsp;  My Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> &nbsp; &nbsp; {{ __('Logout') }} </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>





    <!-- HEADER -->

    <header class="bgimg">
        <nav class="navbar navbar-expand-md  navbar-dark">

            <div class="container">

                <a href="{{route('home')}}" class="navbar-brand font-weight-bold" type="button"><img height="40" src="../images/brand.jfif"> Lawyer Hiring
                    System</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsenavbar">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active" >
                            <a href="{{ url('/index') }}" class="nav-link text-white">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/PostLegalCase') }}" class="nav-link text-white ">POST YOUR LEGAL
                                CASE</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/PakistanLaws') }}" class="nav-link text-white">PAKISTAN LAWS</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/Articles') }}" class="nav-link text-white ">ARTICLES</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/Feedback') }}" class="nav-link text-white">FEEDBACK</a>
                        </li>

                </div>

                </ul>

            </div>
            </div>
        </nav>

        

        <div class="container search">
            <div>
                <form action="{{route('search')}}" method="post">
                    @csrf
                    <div>
                        <select class="form-control" type="text" id="name" name="court">
                            @isset($court)
                            <option value="{{$court}}">{{$court}}</option>
                            <option value="">All</option>

                            @else
                            <option value="">Court Type</option>
                            @endisset
                            <option value="Supreme Court">Supreme Court</option>
                            <option value="High Court Islamabad">High Court Islamabad</option>
                            <option value="High Court Lahore ">High Court Lahore </option>
                            <option value="High Court Quetta">High Court Quetta</option>
                            <option value="High Court Peshawar">High Court Peshawar</option>
                            <option value="High Court Sindh">High Court Sindh</option>
                            <option value="Jirga System">Jirga System</option>
                            <option value="Federal Shariat Court">Federal Shariat Court</option>
                            <option value="District Court">District Court</option>
                            <option value="Nab Court">Nab Court</option>
                        </select>
                    </div>
            </div>


            <div>
                <select class="form-control" type="text" id="type" name="type">
                    @isset($type)
                            <option value="{{$type}}">{{$type}}</option>
                            <option value="">All</option>

                            @else
                            <option value="">Lawyer Category</option>
                            @endisset

                    <option value="Banking Lawyers">Banking Lawyers</option>
                    <option value="Business Lawyers">Business Lawyers</option>
                    <option value="Civil Lawyers">Civil Lawyers</option>
                    <option value="Consumer Lawyers">Consumer Lawyers</option>
                    <option value="Corporate Lawyers">Corporate Lawyers</option>
                    <option value="Criminal Lawyers">Criminal Lawyers</option>
                    <option value="Family Lawyers">Family Lawyers</option>
                    <option value="Immigration &amp; Visa Lawyers">Immigration & Visa Lawyers</option>
                    <option value="Intellectual Property Lawyers">Intellectual Property Lawyers</option>
                    <option value="Labour and Service Lawyers">Labour and Service Lawyers</option>
                    <option value="Nab Lawyers">Nab Lawyers</option>
                    <option value="Other Lawyers">Other Lawyers</option>
                    <option value="Tax Consultants">Tax Consultants</option>
                </select>
            </div>




            <div>
                <select class="form-control" type="text" id="city" name="city">
                    @isset($city)
                    <option value="{{$city}}">{{$city}}</option>
                    <option value="">All</option>
                    @else
                    <option value="">Select a City</option>
                    @endisset

                    <option value="Abbotabad">Abbotabad</option>
                    <option value="Arif Wala">Arif Wala</option>
                    <option value="Attock">Attock</option>
                    <option value="Bahawalpur">Bahawalpur</option>
                    <option value="Bahawalnagar">Bahawalnagar</option>
                    <option value="Bannu">Bannu</option>
                    <option value="Chakwal">Chakwal</option>
                    <option value="Chaman">Chaman</option>
                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                    <option value="Faisalabad">Faisalabad</option>
                    <option value="Gujranwala">Gujranwala</option>
                    <option value="Gujranwala Cantonment">Gujranwala Cantonment</option>
                    <option value="Gujrat">Gujrat</option>
                    <option value="Haripur">Haripur</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="Jhang">Jhang</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Kasur">Kasur</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Mardan">Mardan</option>
                    <option value="Mirkot">Mirkot</option>
                    <option value="Mirpur">Mirpur</option>
                    <option value="Multan">Multan</option>
                    <option value="Okara">Okara</option>
                    <option value="Peshawar">Peshawar</option>
                    <option value="Quetta">Quetta</option>
                    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                    <option value="Rawalpindi">Rawalpindi</option>
                    <option value="Sargodha">Sargodha</option>
                    <option value="Sialkot">Sialkot</option>
                    <option value="Taxila">Taxila</option>
                    <option value="Vehari">Vehari</option>
                </select>
            </div>

            <div>
                <button type="find_lawyer" class="">Find Lawyer</button>
                </form>
            </div>
        </div>


    </header>

    <div id="successmessage" class="container my-4">
        @if(session()->exists('message'))

        <div class="alert alert-success container my-10" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            {{session('message')}}
            <strong>Success!</strong> You have been signed in successfully!

        </div>

        @endif
    </div>
