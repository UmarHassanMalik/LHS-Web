<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet"  href="{{url('/css/Login.css')}}"/>
    <link rel="stylesheet"  href="{{url('/css/home.css')}}"/>
    <link rel="stylesheet"  href="{{url('/css/Create_Account.css')}}"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" >
    <meta name="author">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
        <script>
        setTimeout(function(){ $("#wronglogin").hide(); }, 5000); 
        </script>


    <title>Hire Lawyer</title>
    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link rel="stylesheet" href="{{url('/css/index.css')}}">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Hire <em> Lawyer</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#features">About</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Contact</a></li>
                            <li class="main-button" data-toggle="modal" data-target="#loginModal" data-backdrop="static"
                            data-keyboard="false"><a href="#">{{ __('Login') }}</a></li>
                          
                          
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <img src="{{url('/images/bgimage-hire.png')}}" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
              
                @if(session()->exists('message'))
    
                <div id="wronglogin" class="alert alert-danger container my-4" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{session('message')}}
                <strong>Incorrect Email or Password!</strong> Try Again!              
                </div>
              @endif  





              @if ($message = Session::get('success'))

              <br />
    <div id="" class="alert alert-success alert-block" >
         <button type="button" class="close" data-dismiss="alert">×</button>	
             <strong> Registration Successfull!!  </strong><i>Please  <a style="cursor: pointer"  data-toggle="modal" data-target="#loginModal" data-dismiss="modal"><b><u style="color: brown">Login</u></b> </a> to Continue </i>
    </div>
    @endif


    @if ($message = Session::get('failed'))

    <br />
<div class="alert alert-danger alert-block" >
<button type="button" class="close" data-dismiss="alert">×</button>	
   <strong>{{ $message }}</strong><i>Please<a href="myModal"> Try Again </a> </i>
</div>
@endif





             

                <h6>Get Legal advice</h6>
                <h2>Hire Legal <em>Expert</em></h2>
                <div class="main-button scroll-to-section">
                <div class="main-button scroll-to-section" data-toggle="modal" data-target="#myModal" data-backdrop="static"
                data-keyboard="false">
                    <a >{{ __('Register Now') }}</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
















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
                        @yield('content')
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
                                <a class="nav-link active" data-toggle="pill" href="#lawyer_regis">Lawyer</a>
                            </li>
                            <li class="nav-item" type="createAcc_item">
                                <a class="nav-link" data-toggle="pill" href="#client_regis">{{__('Client')}}</a>
                            </li>
                        </ul>

                        <div class="tab-content ">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <br><br>
                            <div id="lawyer_regis" class=" tab-pane active">
                                <div class=" text-center text-info font-awesome"><b> REGISTER LAWYER </b></div>
                                <br>
                                <form method="POST" action="{{ route('register') }}" >
                                    @csrf
                                


                                    <input type="hidden" name="profession" value="1">

                                    <div class="form-group container " id="createAcc_Input">
                                        <div class="half">
                                            <label for="Full_Name"> {{ __('Full Name') }}</label>
                                            <input  class="form-control " id="exampleFormControlInput1"  name="name"
                                                placeholder="Enter User Name">
                                        @error('Full_Name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror        
                                        </div>

                                        <div class="half">
                                            <label for="Email">{{ __('Email') }} </label>
                                            <input type="email" class="form-control "   name="email"
                                                placeholder="name@example.com"> 
                                        

                                    @error('Email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                        </div>
                                    </div>
                                    <br>
                                  
                                    <div class="form-group container " id="createAcc_Input">
                                        <div class="half">
                                            <label for="password">{{ __('Password') }}</label>
                                            <input type="password" class="form-control " id="exampleFormControlInput1"  @error('password') is-invalid @enderror name="password" required autocomplete="new-password" 
                                                placeholder="Enter Password">

                                        </div>

                                        <div class="half form-group">
                                            <label for="Confirm_Password">{{ __('Confirm Password') }}</label>
                                            <input name="password_confirmation" type="password" class="form-control " id="exampleInputPassword1"
                                                placeholder="Confirm Password">
                                        </div>
                                    @error('Confirm_Password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    </div>
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label for="Phone_Number">{{ __('Phone Number') }}</label>
                                        <input type="number" class="form-control " id="InputName" name="phone"
                                            placeholder="Enter Phone Number">
                                    @error('Phone_Number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="Address">{{ __('Address') }}</label>
                                        <input   name="address" class="form-control " id="InputName" placeholder="Address">

                                    @error('Address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>


                          <div class="form-group">
                                        <label for="Qualification">{{ __('Qualification') }}</label>
                                        <input  name="qualification" class="form-control " id="InputName" placeholder="Qualification">

                                    @error('Qualification')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="Experience">{{ __('Experience') }}</label>
                                        <input   name="experience" class="form-control " id="InputName" placeholder="Experience">

                                    @error('Experience')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>





                     <div class="form-group">
                                        <label for="City">{{ __('City') }}</label>
                                      <select class="form-control"  id="city" name="city">
                    <option value="Select a City">Select a City</option>
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

                                    @error('City')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>


                                    <div class="form-group ">
                                    
                                            <label for="Law_Category">{{ __('Law Category') }}</label> 
                                            <select class="form-control   " name="law_category">
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
                                        @error('Law_Category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>

                                    <br><br>
                                    <div class="form-group container  ">
                                        <div class="boxes">

                                            <div class="pretty p-default p-thick p-pulse">
                                                <input type="radio" name="court_type" value="Supreme Court" />
                                                <div class="state p-info-o">
                                                    <label>Supreme Court</label>
                                                </div>
                                            </div>


                                            <div class="pretty p-default p-thick p-pulse">
                                                <input type="radio" name="court_type" value="High Court Islamabad" />
                                                <div class="state p-info-o">
                                                    <label>High Court Islamabad</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="boxes ">
                                            <div class="pretty p-default p-thick p-pulse">
                                                <input  value="High Court Quetta" type="radio" name="court_type"  />
                                                <div class="state p-info-o">
                                                    <label>High Court Quetta</label>
                                                </div>
                                            </div>



                                            <div class="pretty p-default p-thick p-pulse">
                                                <input type="radio" name="court_type" value="High Court Peshawar" />
                                                <div class="state p-info-o">
                                                    <label>High Court Peshawar</label>
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                 
                                        <div class="boxes ">

                                            <div class="pretty p-default p-thick p-pulse">
                                                <input type="radio" name="court_type" value="High Court Sindh" />
                                                <div class="state p-info-o">
                                                    <label>High Court Sindh</label>
                                                </div>
                                            </div>


                                            <div class="pretty p-default p-thick p-pulse">
                                                <input type="radio" name="court_type" value="Jirga System" />
                                                <div class="state p-info-o">
                                                    <label>Jirga System</label>
                                                </div>
                                            </div>

                                        </div>
                                                <br /> 


                                         <div class="boxes ">

                                          <div class="pretty p-default p-thick p-pulse">
                                                <input type="radio" name="court_type" value="Federal Shariat Court" />
                                                <div class="state p-info-o">
                                                    <label>Federal Shariat Court</label>
                                                </div>
                                            </div>


                                       
                                            <div class="pretty p-default p-thick p-pulse">
                                                <input type="radio" name="court_type" value="District Court" />
                                                <div class="state p-info-o">
                                                    <label>District Court</label>
                                                </div>
                                            </div>


                                        </div>


                                        <br /> 
                                           <div class="boxes ">
                                           <div class="pretty p-default p-thick p-pulse">
                                                <input type="radio" name="court_type" value="Nab Court" />
                                                <div class="state p-info-o">
                                                    <label>Nab Court</label>
                                                </div>
                                            </div>
                                        </div>
                                    <br>        
                                    <div>
                                        <button type="CreateAcc_submit" class="btn btn-primary btn2">{{ __('Register') }}</button>
                                    </div>
                                    </div>
                                </div>
                                <br>
                                </form>

                            <div id="client_regis" class="container tab-pane fade">
                            
                                <div class=" text-center text-info font-awesome"><b> REGISTER CLIENT </b></div>
                
                                <br>          
                             <form method="POST" action="{{ route('register') }}">
                                
                                 @csrf
                                                                    
                               <input type="hidden" name="profession" value="0">
         
                                 <div class="form-group ">
                                <label for="name">{{ __('Full Name') }}</label>
                                <input  class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus  id="" id="InputName"
                                        placeholder="Enter Full Name">
                                 @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                 @enderror
                    
                                 </div>
                              
                                 <div class="form-group">
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  id="exampleInputPassword2"
                                        placeholder="name@example.com">
                                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                </div>
        
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="exampleInput"
                                        placeholder="Enter Password">
                                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input type="password" class="form-control " id="exampleInput"
                                        placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                        
                        <br />          
                                <button type="createAcc_Submit" class="btn btn-primary btn2">{{ __('Register') }}</button>
                              
                            </form>
                            
                        </div>


                      
                        <small>
                            <p>Already Registered? Login <u><a type="already_registered" data-toggle="modal"
                                        data-target="#loginModal" data-dismiss="modal">here</a></u> </p>
                        </small>        
            
                     </form>
                                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>









    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Steps to <em>Start with</em></h2>
                        <img src="{{url('/images/line-dec.png')}}" alt="waves">
                        <p> Register Your Self, Post your Case and Receive quotes.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('/images/features-first-icon.png')}}" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Register Yourself</h4>
                                <p>First Register your Account on this website enter the details 
                                    </p>
                                <a href="#" class="text-button"></a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('/images/features-first-icon.png')}}" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Post Your Legal Case</h4>
                                <p> Client will be able to Post his Legal after Signing up 
                                    to this website </p>
                                <a href="#" class="text-button"></a>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('/images/features-first-icon.png')}}" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Choose Verified Lawyers </h4>
                                <p>Look for verified lawyers having
                                    verified label to their names
                                </p>
                                <a href="#" class="text-button"></a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="{{url('/images/features-first-icon.png')}}" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Receive Quotes from Lawyers</h4>
                                <p>Get in touch with your Legal advisor
                                    and receive quotes from him.</p>
                                <a href="#" class="text-button"></a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Don’t <em>think</em>, Register <em>today</em>!</h2>
                        <p></p>
                        <div class="main-button scroll-to-section">
                            <a >Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                        <iframe
                            src="https://maps.google.com/maps?q=blue%20area%20islamabad%20&t=&z=11&ie=UTF8&iwloc=&output=embed"
                            width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name"  id="name" placeholder="Your Name*" required>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email"  id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your Email*" required>
                                    </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject"  id="subject" placeholder="Subject">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="message" placeholder="Message"
                                            required></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2020 Hire Lawyer

                        - Designed by <a rel="nofollow" class="tm-text-link" target="_parent">Student</a></p>


                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{url('/js/jquery-2.1.0.min.js')}}"></script> 
    

     <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Plugins -->
    <script src="{{url('/js/scrollreveal.min.js')}}"></script> 
    

 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />

    <!-- Global Init -->
    <script src="{{url('/js/custom.js')}}"></script>






</body>

</html>