<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="{{url('/css/home.css')}}" />
    <link rel="stylesheet" href="{{url('/css/PostLegalCase/PostLegalCase.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


</head>

<body style="background: #e8cbc0; background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4); background: linear-gradient(to right, #e8cbc0, #636fa4);">
    
    <div class="col-md-12 navbar navbar-expand-sm navbar-dark cyan sticky-top" type="navmain">
        <a class=" text-success ms-2 font-bold" href="#">Welcome</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSuapportedContent-4">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                        {{Auth::user()->displayName}}</a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-cyan"
                        aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item " href="{{url('/Profile/dashboard')}}">My Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>


    <header class="bgimg">
        <nav class="navbar navbar-expand-md  navbar-dark">

            <div class="container">

                <a href=" " class="navbar-brand font-weight-bold" type="button"> Lawyer Hiring System</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsenavbar">

                    <ul class="active navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="{{ url('/index') }}" class="nav-link text-white">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/PostLegalCase') }}" class="nav-link text-white ">POST YOUR LEGAL CASE</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/PakistanLaws') }}" class="nav-link text-white">PAKISTAN LAWS</a>
                        </li>
                        <li class="nav-item active">
                            <a href="{{ url('/Articles') }}" class="nav-link text-white ">ARTICLES</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/Feedback') }}" class="nav-link text-white">FEEDBACK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>










        <div class="container" type="section_container">
            @if(session('status'))

            <h4 class="alert alert-warning mb-2"> {{session('status')}}</h4>

            @endif
            <form action="{{route('addArticle')}}" class="postCase" method="post">
                @csrf
                <div class="form-group" type="legalpost_group">
                    <div class="form-col-4">
                        <label type="legal_post" for="title">ARTICLE TITLE</label>
                    </div>
                    <div class="form-col-8">
                        <input type="text" placeholder="Article Name" name="title" 
                             autocomplete="organization-title">
                    </div>
                </div>

            
                <div class="form-group" type="legalpost_group">
                    <div class="form-col-4">
                        <label type="legal_post" for="problem">ARTICLE DESCRIPTION</label>
                    </div>
                    <div class="form-col-8">
                        <textarea type="legal_post" name="content" placeholder="Write your Article Here ... "
                            rows="8"></textarea>
                    </div>
                </div>

             

                <div class="form-group mb-3" type="legalpost_group">
                    <div class="offset-form-col-4 form-col-8 text-center">
                        <button id="submitCase">Submit</button>
                    </div>
                </div>
            </form>
        </div>










        <footer class="footer">
            <div class="container_footer">
                <div class="row">
                    <div class="footer-col ">
                        <img type="foot_logo" src="{{url('images/logo.png')}}">
                        <h6 type="footer_logo"> Lawyer Hiring </h6>
                    </div>
                    <div class="footer-col">
                        <h4>Get Help</h4>
                        <ul type="footer_ul">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Email</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Information</h4>
                        <ul type="footer_ul">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook-f"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-quora"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




</body>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>

<!-- <script type="text/javascript">

    var config = {
        apiKey: "{{ config('services.firebase.api_key') }}",
        authDomain: "{{ config('services.firebase.auth_domain') }}",
        databaseURL: "{{ config('services.firebase.database_url') }}",
        storageBucket: "{{ config('services.firebase.storage_bucket') }}",
    };
    firebase.initializeApp(config);
    var database = firebase.database();


    $('#submitCase').on('click', function () {

        var values = $(".postCase").serializeArray();
        var title = values[1].value;
        var city = values[2].value;
        var budget = values[3].value;
        var statement = values[4].value;
        var courttype = values[5].value;
        var email = values[7].value;
        var lawyertype = values[8].value;

        console.log(values);
        firebase.database().ref('postcase/').set({
            title: title,
            statement: statement,
            lawyertype: lawyertype,
            isopen: 'true',
            hiredlawyer: "false",
            email: email,
            courttype: courttype,
            city: city,
            budget: budget,
        });
    });
</script> -->

</html>