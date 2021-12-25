@include('layout')






    <!-- ********************** STEPS TO FIND A LAWYER/TAX CONSULTANT *********************** -->

    <div class="container" type=slider_container>

        <div class="row mb-5 mt-5">
            <div class="col-12">
                    <h1 class="text-center">Lawyers</h1>
            </div>
            <div class="row mt-3 mb-3 justify-content-center">
            
                @if(count($lawyers) > 0)
                @foreach($lawyers as $lawyer)
                <div class="col-3 card mt-3  mx-3" style="width:900px;">
                    <div class="card-body">
                      <h5 class="card-title">{{$lawyer['name']}} </h5>
                      <p class="card-text">{{$lawyer['email']}}</p>
                      <h6 class="card-subtitle mb-2 text-muted pt-3">{{$lawyer['lawyerType']}}</h6>
                      <h6 class="card-subtitle mb-2 text-muted pt-2">{{$lawyer['city']}}</h6>


                      @if(!empty($lawyer['experience']))

                      <h6 class="card-subtitle mb-2 text-muted pt-2">Experience: {{$lawyer['experience']}}</h6>
                      @endif

                      @if(!empty($lawyer['qualification']))
                      <h6 class="card-subtitle mb-2 text-muted pt-2">Qualification: {{$lawyer['qualification']}}</h6>
                      @endif



                      <!-- <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a> -->
                    </div>
                  </div>
                  
                 
                  
                  @endforeach
                  @else
<div class="row">
                  <div class="col-12">
                    <h6 class="text-center">No Lawyers Found !!!</h6>
            </div>
        </div>
                  @endif
                 
            
            </div>
            
            
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