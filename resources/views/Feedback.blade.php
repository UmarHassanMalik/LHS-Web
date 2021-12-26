<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <link rel="stylesheet" href="{{url('/css/Feedback/Feedback.css')}}"/>
        <link rel="stylesheet" href="{{url('/css/home.css')}}"/>



</head>

<body style="background: #e8cbc0; background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4); background: linear-gradient(to right, #e8cbc0, #636fa4);">


    <!-- HEADER -->

    
    <div class="col-md-12 py-0 navbar navbar-expand-sm navbar-dark cyan sticky-top" type="navmain">
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


    <header class="bgimg">
        <nav class="navbar navbar-expand-md  navbar-dark">

            <div class="container">

                <a href="{{route('home')}}" class="navbar-brand font-weight-bold" type="button"> Lawyer Hiring System</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsenavbar">

                    <ul class="active navbar-nav ml-auto">
                        <li class="nav-item">
                            <a  href="{{ url('/index') }}" class="nav-link text-white">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{ url('/PostLegalCase') }}" class="nav-link text-white ">POST YOUR LEGAL
                                CASE</a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{ url('/PakistanLaws') }}" class="nav-link text-white">PAKISTAN LAWS</a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{ url('/Articles') }}" class="nav-link text-white ">ARTICLES</a>
                        </li>
                        <li class="nav-item active">
                            <a  href="{{ url('/Feedback') }}" class="nav-link text-white">FEEDBACK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


















        <div class="wrapper rounded d-flex align-items-stretch">
            <div class="bg-yellow" id="yellow">
                <div class=""> <span  class="fa fa-envelope fa-3x"></span> </div>
                <div class="pt-5 cursive"> Please describe your View about this website in a
                    nutshell </div>
                <div class="pt-sm-5 pt-5 cursive mt-sm-5"> We need your email to reach you back
                </div>
            </div>
            <div class="contact-form">
                @if(session('status'))
                
                <h4 class = "alert alert-warning mb-2"> {{session('status')}}</h4>

                @endif

                <div class="h3">FEEDBACK</div>
                    <div class="form-group pt-3"> <label type="feedback_form" for="message">Message</label> <textarea
                            name="message" id="message" class="form-control" required></textarea> </div>
                    <div class="d-flex align-items-center flex-wrap justify-content-between pt-4">
                        <div class="form-group pt-lg-2 pt-3"> <label type="feedback_form" for="name"> Name</label>
                            <input type="name" id="name" name="name" class="form-control" required> </div>
                        <div class="form-group pt-lg-2 pt-3"> <label type="feedback_form" for="name"> Email</label>
                            <input type="email" id="email" name="email" class="form-control" required> </div>
                    </div>
                    <div class = "form-group mb-3">
                        <button id="submitFeedback" class = "btn btn-primary">Submit
                        <!-- <div type="feedback_submit" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#myModal"> Submit </div> -->
                        </button>
                    </div>
            </div>

        </div> <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Thank You <span class="fas fa-heart"></span> </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ps-2">Thank You for sharing your views with us. We will get back
                            to you as soon as possible.</div>
                    </div>
                </div>
            </div>
        </div>






















        <!-- ************************************ FOOTER *****************************************-->

        <footer class="footer">
            <div class="container_footer">
                <div class="row">
                    <div class="footer-col " >
                        <img type="foot_logo" src="{{url('images/logo.png')}}" >
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

<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script type="text/javascript">
  // Initialize Firebase
  var config = {
    apiKey: "{{ config('services.firebase.api_key') }}",
    authDomain: "{{ config('services.firebase.auth_domain') }}",
    databaseURL: "{{ config('services.firebase.database_url') }}",
    storageBucket: "{{ config('services.firebase.storage_bucket') }}",
  };
  firebase.initializeApp(config);
  var database = firebase.database();

  function getRandomString(length) {
        var randomChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var result = '';
        for ( var i = 0; i < length; i++ ) {
            result += randomChars.charAt(Math.floor(Math.random() * randomChars.length));
        }
        return result;
    }

  $("#submitFeedback").on('click', function () {

    message = $("#message").val();
    name = $("#name").val();
    email = $("#email").val();
    feedback_id = getRandomString(25);



    firebase.database().ref('feedback/'+feedback_id).set({
        message: message,
        name: name,
        email: email,
        });
    alert("Feedback Sent");
  });

</script>



<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

</html>