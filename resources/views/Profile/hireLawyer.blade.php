@extends('Profile.layout')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-8">

      <h3 style="color:#fff;margin-top: -40px;">Case: {{ $case['title'] }} </h3>
      <br /> 

      <div class="card">
        <div class="card-header">

          <h5 class="title"> Hire Lawyer</h5>
        </div>

        <form action="{{ route('hireLawyerNow')}}" method="post">

          @csrf 

<input type="hidden" name="budget" value="{{$app['budget']}}">
          <input type="hidden" name="case_id" value="{{ $case['title']}}">
          <input type="hidden" name="lawyer_id"  value="{{ $lawyer['user_id']}}">


        <div class="card-body">
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Card Number</label>
                  <input type="text" id="name" name="card_num" class="form-control" placeholder="Card Number"  >
                </div>
              </div>





              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Card Holder's Name</label>
                  <input type="text" id="mobile" name="holderName" class="form-control" placeholder="Card Holder's Name" >
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="row">
                   
                    <div class="col-md-4 pl-3">
                      <div class="form-group">
                        <label>MM</label>
                        <input type="text" name="card_mm" class="form-control" id="city" placeholder="Month" >
                      </div>
                    </div>
                    <div class="col-md-4 pl-3">
                      <div class="form-group">
                        <label>YY</label>
                        <input type="text" name="card_yy" class="form-control" id="address" placeholder="Year" >
                      </div>
                    </div>

                       <div class="col-md-4 pl-3">
                      <div class="form-group">
                        <label>CVC</label>
                        <input type="text" name="card_cvc" class="form-control" id="address" placeholder="CVC">
                      </div>
                    </div>
                  </div>
                  

                </div>
              </div>
            </div>



            <button class="updateCustomer button button1 " uid="{{Auth::id()}}"  >Hire Now</button type="submit">

          </form>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-user">
        <div class="image">
          <img src="#" alt="">
        </div>
        <div class="card-body">
          <div class="author">
            <a href="#">
              <h5 class="title">{{ $lawyer['name'] }}</h5>
            </a>
            <p class="description">
             {{ $lawyer['email'] }}
            </p>

            <p class="description">
             {{ $lawyer['mobile'] }}
            </p>
          </div>
          <p class="description text-center">
             {{ $lawyer['city'] }}

          </p>
        </div>
        <hr>
               <p style="padding:1%;margin-left:10px;margin-top:10px;font-weight:600;"> Budget: {{ $app['budget'] }} PKR</p> 
      </div>
    </div>
  </div>
</div>
@include('Profile.footer')

<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "{{ config('services.firebase.api_key') }}",
        authDomain: "{{ config('services.firebase.auth_domain') }}",
        databaseURL: "{{ config('services.firebase.database_url') }}",
        storageBucket: "{{ config('services.firebase.storage_bucket') }}",
    };
    firebase.initializeApp(config);
    var database = firebase.database();
        
    
    $(".updateCustomer").on('click', function () {
        id = $(this).attr('uid');
        address = $("#address").val();
        city = $("#city").val();
        email = $(this).attr('email');
        experience = $(this).attr('experience');
        lawyerType = $(this).attr('lawyerType');
        mobile = $("#mobile").val();
        name = $("#name").val();
        password = $(this).attr('password');
        profession = $(this).attr('profession');
        var postData = {
            user_id: id,
            name: name,
            mobile: mobile,
            city: city,
            password: password,
            address: address,
            profession: profession,
            lawyerType: lawyerType,
            experience: experience,
            email: email,
        };
        var updates = {};
        updates['users/'+id] = postData;
        firebase.database().ref().update(updates);
        alert("Done");

    });

    </script>






@endsection

