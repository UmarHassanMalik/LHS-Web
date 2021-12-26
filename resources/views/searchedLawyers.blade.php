@include('layout')

<style>
.social-link {
    width: 30px;
    height: 30px;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    border-radius: 50%;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.social-link:hover, .social-link:focus {
    background: #ddd;
    text-decoration: none;
    color: #555;
}

</style>








                  <div class="container py-4">
                    <div style="color: cornsilk" class="row text-center">
                        <div class="col-lg-8 mx-auto">
                            <h1 class="display-4">Lawyer's Profile</h1>
                            <p class="lead mb-0">Searched Lawyers</p>
                            <p class="lead"><a href="" class="text"></a>
                            
                            </p>
                        </div>
                    </div>
                </div><!-- End -->
                
                
                <div class="container">
                    <div class="row text-center">
                        @if(count($lawyers) > 0)
                        @foreach($lawyers as $lawyer)
                  
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <button type="button" class="btn btn-primary">HIRE ME</button>
                            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="../images/profile.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">{{$lawyer['name']}}</h5><span class="small text-uppercase text-muted">Ratings</span>
                                <p class="card-text">Email: {{$lawyer['email']}}</p>
                                <h6 class="card-subtitle mb-2 text-muted pt-3"><u>{{$lawyer['lawyerType']}}</u></h6>
                                <h6 class="card-subtitle mb-2 text-muted pt-2"><b>Location :</b> {{$lawyer['city']}} <i class="flag flag-Pakistan"></i></h6>

                                
                                @if(!empty($lawyer['experience']))

                                <h6 class="card-subtitle mb-2 text-muted pt-2"><b>Experience:</b> {{$lawyer['experience']}}</h6>
                                @endif
          
                                @if(!empty($lawyer['qualification']))
                                <h6 class="card-subtitle mb-2 text-muted pt-2"><b>Qualification:</b> {{$lawyer['qualification']}}</h6>
                                @endif
                     
                                <ul class="social mb-0 list-inline mt-3">
                                    <li class="list-inline-item"><a href="#" class="shadow social-link"><i class="fa fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="shadow  social-link"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="shadow  social-link"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" class="shadow social-link"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div><!-- End -->
                    </div>
                </div>
                  
                 
                  
                  @endforeach
                  @else
            <div class="container py-5">
                <div class="row text-center ">
                    <div class="col-lg-8 mx-auto">
                    <p class="lead mb-0">No Lawyers Found</p>
                    </div>
                </div>
            </div>
                  @endif
                 
            
            </div>
            <br>
            
            </div>
    </div>




    <!-- ************************************ FOOTER *****************************************-->

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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>