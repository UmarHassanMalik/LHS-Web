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
    <link rel="stylesheet" type="text/css" href="./home.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="{{url('/css/Login.css')}}" />
    <link rel="stylesheet" href="{{url('/css/Create_Account.css')}}" />
    <link rel="stylesheet" href="{{url('/css/home.css')}}" />
    <link rel="stylesheet" href="{{url('/css/PostLegalCase/PostLegalCase.css')}}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />

</head>

<body>

    <div class="topbar">
        <div>
            <button class="btn-info" data-toggle="modal" data-target="#myModal" data-backdrop="static"
                data-keyboard="false"><b>Sign up</b></button>
            <button class="btn-info " data-toggle="modal" data-target="#loginModal" data-backdrop="static"
                data-keyboard="false"><b>Sign in</b></button>
        </div>
    </div>

    <!-- HEADER -->

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


        <div>
            <div class="modal fade" id="loginModal">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-title text-center">
                                <h4>Login</h4>
                            </div>
                            <div class="d-flex flex-column text-center">
                                <form>
                                    <div class="container">
                                        <i class="fa fa-user icon"></i> &nbsp; &nbsp;
                                        <input type="email" class="form-control" id="email1"
                                            placeholder="Enter Email Address">
                                    </div>
                                    <br>
                                    <div class="container">
                                        <i class="fa fa-key icon"></i>&nbsp;&nbsp;
                                        <input type="password" class="form-control" id="password1"
                                            placeholder="Enter Password">
                                    </div>
                                    <br><br>
                                    <button type="button"
                                        class="btn btn-dark btn-block btn-round btn-style">Login</button>
                                </form>

                                <div class="text-center text-muted delimiter">or use a social network</div>

                                <div class="d-flex justify-content-center social-buttons">
                                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip"
                                        data-placement="top" title="Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip"
                                        data-placement="top" title="Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </button>
                                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip"
                                        data-placement="top" title="Linkedin">
                                        <i class="fab fa-linkedin"></i>
                                    </button>
                                    </di>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <div class="signup-section">Not a member yet? <a class="pe-auto" type="not_Member"
                                    data-toggle="modal" data-target="#myModal" data-dismiss="modal"><u>Sign Up</u> </a>
                            </div>
                        </div>
                    </div>
                </div>


                </article>
            </div>
            <div id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content" id="now">

                        <div class="modal-body">


                            <ul class="nav nav-pills" role="tablist" type="creatAcc_pills">
                                <li class="nav-item" type="createAcc_item">
                                    <a class="nav-link active" data-toggle="pill" href="#login">Lawyer</a>
                                </li>
                                <li class="nav-item" type="createAcc_item">
                                    <a class="nav-link" data-toggle="pill" href="#regis">Client</a>
                                </li>
                            </ul>

                            <div class="tab-content ">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <br><br>
                                <div id="login" class=" tab-pane active">
                                    <div class=" text-center text-info font-awesome"><b> Create Lawyer Account </b>
                                    </div>
                                    <br>
                                    <form>
                                        <div class="form-group container" id="createAcc_Input">
                                            <div class="half">
                                                <label for="InputName">First Name</label>
                                                <input type="email" class="form-control  col-md-12"
                                                    id="exampleFormControlInput1" placeholder=" First Name">
                                            </div>
                                            <div class="form-group half">
                                                <label for="InputName">Last Name</label>
                                                <input type="password" class="form-control  col-md-12"
                                                    id="exampleInputPassword1" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group container " id="createAcc_Input">
                                            <div class="half">
                                                <label for="InputName">User Name</label>
                                                <input type="email" class="form-control " id="exampleFormControlInput1"
                                                    placeholder="User Name">
                                            </div>

                                            <div class="half form-group">
                                                <label for="InputName">Email </label>
                                                <input type="password" class="form-control " id="exampleInputPassword1"
                                                    placeholder="name@example.com">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group container " id="createAcc_Input">
                                            <div class="half">
                                                <label for="InputName">Password</label>
                                                <input type="email" class="form-control " id="exampleFormControlInput1"
                                                    placeholder="Enter Password">
                                            </div>

                                            <div class="half form-group">
                                                <label for="InputName">Confirm Password</label>
                                                <input type="password" class="form-control " id="exampleInputPassword1"
                                                    placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label for="InputName">Phone Number</label>
                                            <input type="text" class="form-control " id="InputName"
                                                placeholder="Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <label for="InputName">Address</label>
                                            <input type="text" class="form-control " id="InputName"
                                                placeholder="Address">
                                        </div>

                                        <div class="form-group container " id="createAcc_Input">
                                            <div class="half">
                                                <label for="InputName">Apt/Suite#</label>
                                                <input type="email" class="form-control " id="exampleFormControlInput1"
                                                    placeholder="Apt/Suite#">
                                            </div>

                                            <div class="half form-group">
                                                <label for="InputName">State </label>
                                                <input type="password" class="form-control " id="exampleInputPassword1"
                                                    placeholder="State">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group container " id="createAcc_Input">
                                            <div class="half">
                                                <label for="InputName">Postal Code</label>
                                                <input type="email" class="form-control " id="exampleFormControlInput1"
                                                    placeholder="Postal Code">
                                            </div>

                                            <div class="half" type="lawCat_Button">
                                                <label for="InputName">Law Category</label>
                                                <select class="form-control   ">
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
                                        <br><br>
                                        <div class="form-group container  ">
                                            <div class="boxes">

                                                <div class="pretty p-default p-thick p-pulse">
                                                    <input type="checkbox" />
                                                    <div class="state p-info-o">
                                                        <label>Sindh High Court</label>
                                                    </div>
                                                </div>


                                                <div class="pretty p-default p-thick p-pulse">
                                                    <input type="checkbox" />
                                                    <div class="state p-info-o">
                                                        <label>Peshawar High Court</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="boxes ">
                                                <div class="pretty p-default p-thick p-pulse">
                                                    <input type="checkbox" />
                                                    <div class="state p-info-o">
                                                        <label>Islamabad High Court</label>
                                                    </div>
                                                </div>

                                                <div class="pretty p-default p-thick p-pulse">
                                                    <input type="checkbox" />
                                                    <div class="state p-info-o">
                                                        <label>Quetta High Court</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="boxes ">

                                                <div class="pretty p-default p-thick p-pulse">
                                                    <input type="checkbox" />
                                                    <div class="state p-info-o">
                                                        <label>Peshahwar High Court</label>
                                                    </div>
                                                </div>


                                                <div class="pretty p-default p-thick p-pulse">
                                                    <input type="checkbox" />
                                                    <div class="state p-info-o">
                                                        <label>NAB Court</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="boxes ">

                                                <div class="pretty p-default p-thick p-pulse">
                                                    <input type="checkbox" />
                                                    <div class="state p-info-o">
                                                        <label>District Court</label>
                                                    </div>
                                                </div>

                                                <div class="pretty p-default p-thick p-pulse">
                                                    <input type="checkbox" />
                                                    <div class="state p-info-o">
                                                        <label>Federal Shariat Court</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div>
                                            <button type="CreateAcc_submit"
                                                class="btn btn-primary btn2">Register</button>
                                        </div>

                                    </form>
                                </div>
                                </form>
                                <div id="regis" class="container tab-pane fade">
                                    <div class=" text-center text-info font-awesome"><b> Create Client Account </b>
                                    </div>
                                    <br><br>
                                    <form>
                                        <div class="form-group">
                                            <label for="InputName">First Name</label>
                                            <input type="text" class="form-control " id="InputName"
                                                placeholder="Enter First Name">

                                        </div>
                                        <div class="form-group">
                                            <label for="InputUsername">Last Name</label>
                                            <input type="text" class="form-control " id="InputUsername"
                                                placeholder="Enter Last Name">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput2">User Name</label>
                                            <input type="email" class="form-control " id="exampleFormControlInput2"
                                                placeholder="Enter User Name">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword2">Email</label>
                                            <input type="email" class="form-control " id="exampleInputPassword2"
                                                placeholder="name@example.com">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPasswordVer">Enter Password</label>
                                            <input type="password" class="form-control " id="exampleInput"
                                                placeholder="Enter Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPasswordVer">Confirm Password</label>
                                            <input type="password" class="form-control " id="exampleInput"
                                                placeholder="Confirm Password">
                                        </div>
                                        <br> <br>
                                        <button type="CreateAcc_submit" class="btn btn-primary">Register</button>
                                    </form>
                                </div>
                                <small>
                                    <p>Already Registered? Login <u><a type="already_registered" data-toggle="modal"
                                                data-target="#loginModal" data-dismiss="modal">here</a></u> </p>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>










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