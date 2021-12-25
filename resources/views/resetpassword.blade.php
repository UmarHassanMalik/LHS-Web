<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <link rel="stylesheet" href="{{url('/css/Login.css')}}"/>
        <link rel="stylesheet" href="{{url('/css/Create_Account.css')}}"/>
        <link rel="stylesheet" href="{{url('/css/Feedback/Feedback.css')}}"/>
        <link rel="stylesheet" href="{{url('/css/home.css')}}"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />

</head>

<body>


    <!-- HEADER -->

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
                       
                    </ul>
                </div>
            </div>
        </nav>





        <div class="wrapper rounded d-flex align-items-stretch">
        
            <div class="contact-form">
                @if(session('status'))
                
                <h4 class = "alert alert-warning mb-2"> {{session('status')}}</h4>

                @endif



                <form action="/change/password"  method="post"> 


                    @csrf
                


                    <input type="hidden" name="user_id" value="{{ $userId }}">
                    

                <div class="h3">Change Password</div>
                    <div class="form-group pt-3">



                            <div class="form-group pt-lg-2 pt-3"> <label type="feedback_form" for="name">New Password</label>
                            <input type="password" id="password" name="password" class="form-control" required placeholder="Password"> </div>

                        </div>
               

                         <div class="form-group pt-3">

                            <div class="form-group pt-lg-2 pt-3"> <label type="feedback_form" for="name">Confirm Password</label>
                            <input type="password" id="password" name="passwordConfirm" class="form-control" required placeholder="Confirm Password"> </div>

                        </div>

                    <div class = "form-group mb-3">
                        <button type="submit"  id="submitFeedback" class="btn btn-primary">Submit
                        <!-- <div type="feedback_submit" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#myModal"> Submit </div> -->
                        </button>
                    </div>

                </form>
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
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>

</html>