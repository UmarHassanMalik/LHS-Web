<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

    <link rel="stylesheet" href="{{url('/css/Article/Article.css')}}" />
    <link rel="stylesheet" href="{{url('/css/home.css')}}" />
    
   
    <style>

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
     </style>   


</head>

<body style="background: #e8cbc0; background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4); background: linear-gradient(to right, #e8cbc0, #636fa4);">

    
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
                    <li class="nav-item">
                        <a href="{{ url('/PostLegalCase') }}" class="nav-link text-white ">POST YOUR LEGAL CASE</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/PakistanLaws') }}" class="nav-link text-white">PAKISTAN LAWS</a>
                    </li>
                    <li class="nav-item active ">
                        <a href="{{ url('/Articles') }}" class="nav-link text-white ">ARTICLES</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/Feedback') }}" class="nav-link text-white">FEEDBACK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



{{-- <div class="row mb-5 mt-5">
    <div class="col-12">
            <h1 class="text-center">Articles</h1>
    </div>
    <div class="row mt-3 mb-3 justify-content-center">
    
        @foreach($articles as $article)
      
          <div class="col-3 card mt-3  mx-3" style="width:900px;">
            <div class="card-body">
              <h4 class="card-title">{{$article['title']}} </h4> 
              <p>by "{{$article['lawyer_name']}}"</p>
              <pre class="card-subtitle mb-2 text-muted pt-2">{{$article['content']}}</pre>

              <!-- <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a> -->
            </div>
          </div>
          
         
          
          @endforeach

         
    
        </div>
    
    
    </div>

</div> --}}


<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Articles</h5>
        
        <div class="row">
            @foreach($articles as $article)
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4  ">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="../images/profile.jpg" alt="card image"></p>
                                    <h4 class="card-title">{{$article['lawyer_name']}}</h4>
                                    <b><p class="card-text">{{$article['title']}}</p></b>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div  class="backside ">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title"><p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color:steelblue; font-size:15px" >POSTED BY</p>&nbsp; &nbsp;{{$article['lawyer_name']}}</h4>
                                    <p class="card-text">{{$article['content']}}</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            @endforeach
        </div>
        
</div>
</section>
 

    <footer   class="footer pt-4">
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

</html>