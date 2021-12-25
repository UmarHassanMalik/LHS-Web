<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

    <link rel="stylesheet" href="{{url('/css/PostLegalCase/PostLegalCase.css')}}" />
    <link rel="stylesheet" href="{{url('/css/home.css')}}" />
    


</head>

<body>

    
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


   

    <!-- HEADER -->
    <nav class="navbar navbar-expand-md  navbar-dark">

        <div class="container">

            <a href="{{route('home')}}" class="navbar-brand font-weight-bold" type="button"> Lawyer Hiring System</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsenavbar">

                <ul class="active navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ url('/index') }}" class="nav-link text-white">HOME</a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ url('/PostLegalCase') }}" class="nav-link text-white ">POST YOUR LEGAL CASE</a>
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
                </ul>
            </div>
        </div>
    </nav>











    <div class="container" type="section_container">
        @if(session('status'))

        <h4 class="alert alert-warning mb-2"> {{session('status')}}</h4>

        @endif

        <div id="showSuccessAlert" class="alert showSuccessAlert" style="background: #3498db;margin-top:15px;">
            <b style="color:#fff;"> Your case has been Posted Successfully. </b>
        </div>

        <form class="postCase" method="post" type="legal_post">
            @csrf




            <div class="form-group" type="legalpost_group">
                <div class="form-col-4">
                    <label type="legal_post" for="title">LEGAL CASE TITLE</label>
                </div>
                <div class="form-col-8">
                    <input type="text" placeholder="e.g Occupation of Land" name="title"
                        autocomplete="organization-title">
                </div>
            </div>

            <div class="form-group" type="legalpost_group">
                <div class="form-col-4">
                    <label type="legal_post" for="city">CITY</label>
                </div>
                <div class="form-col-8">
                    <input type="text" name="city" autocomplete="">
                </div>
            </div>

            <div class="form-group" type="legalpost_group">
                <div class="form-col-4">
                    <label type="legal_post" for="budget">BUDGET <small>(in PKR Rs)</small></label>
                </div>
                <div class="form-col-8">
                    <input type="text" name="budget" autocomplete="transaction-amount">
                </div>
            </div>

            <div class="form-group" type="legalpost_group">
                <div class="form-col-4">
                    <label type="legal_post" for="problem">DESCRIBE YOUR LEGAL PROBLEM</label>
                </div>
                <div class="form-col-8">
                    <textarea type="legal_post" name="problem" placeholder="Enter Your Legal Problem Here"
                        rows="8"></textarea>
                </div>
            </div>

            <div class="form-group" type="legalpost_group">
                <div class="form-col-4">
                    <label type="legal_post" for="court">COURT TYPE</label>
                </div>
                <div class="form-col-8">
                    <input type="text" name="court" placeholder="e.g Islamabad High Court" autocomplete="">
                </div>
            </div>


            <div class="form-group" type="legalpost_group">
                <div class="form-col-4">
                    <label type="legal_post" for="email">YOUR EMAIL</label>
                </div>
                <div class="form-col-8">
                    <input type="text" name="email" required autocomplete="email">
                </div>
            </div>

            <div class="form-group " type="legalpost_group">
                <div class="form-col-4">
                    <label type="legal_post" for="lawyer_type" name="lawyer_type">Lawyer Category</label>
                </div>
                <div id="lawyers_type" class="form-col-8 box">
                    <select name="lawyer_type" type="legalpost_drop" onfocus='this.size=6;' onblur='this.size=0;'
                        onchange='this.size=1; this.blur();' id="lawyers_type" required>
                        <option>Banking Lawyers</option>
                        <option>Business Lawyers</option>
                        <option>Civil Lawyers</option>
                        <option>Consumer Lawyers</option>
                        <option>Corporate Lawyers</option>
                        <option>Criminal Lawyers</option>
                        <option>Family Lawyers</option>
                        <option>Immigration &amp; Visa Lawyers</option>
                        <option>Intellectual Property Lawyers</option>
                        <option>Labour and Service Lawyers</option>
                        <option>Nab Lawyers</option>
                        <option>Other Lawyers</option>
                        <option>Tax Consultants</option>
                    </select>
                </div>
            </div>

            <input class="authUserId" type="hidden" name="userId" value="{{ Auth::id() }}">

            <div class="form-group mb-3" type="legalpost_group">
                <div class="offset-form-col-4 form-col-8 text-center">
                    <button type="submit" id="submitCase">Submit</button>
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
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>

<script type="text/javascript">

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
        for (var i = 0; i < length; i++) {
            result += randomChars.charAt(Math.floor(Math.random() * randomChars.length));
        }
        return result;
    }

    $(".showSuccessAlert").hide();

    $('#submitCase').on('click', function (event) {
        event.preventDefault();



        var values = $(".postCase").serializeArray();
        var title = values[1].value;
        var city = values[2].value;
        var budget = values[3].value;
        var statement = values[4].value;
        var courttype = values[5].value;
        var email = values[7].value;

        var user_id = $(".authUserId").val();

        var case_id = getRandomString(25);
        var applications = 0;


        firebase.database().ref('cases/' + user_id + "/" + title).set({
            title: title,
            statement: statement,
            isopen: 'true',
            hiredlawyer: "false",
            email: email,
            courttype: courttype,
            city: city,
            budget: budget,
            user_id: user_id,
            case_id: case_id,
            applications: applications
        });


        $(':input', '.postCase')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .prop('checked', false)
            .prop('selected', false);


        $(".showSuccessAlert").css("display", "block");
    });
</script>

</html>