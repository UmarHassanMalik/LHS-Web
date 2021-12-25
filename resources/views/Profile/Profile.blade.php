@extends('Profile.layout')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h5 class="title"> PROFILE SETTINGS</h5>
        </div>
        <div class="card-body">
            <div class="row">
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label>Full Name</label>
                  <input type="text" id="name" class="form-control" placeholder="{{$auth['name']}}" value="{{$auth['name']}}" >
                </div>
              </div>
              <div class="col-md-6 pr-1">
                <div class="form-group">
                  <label> Contact</label>
                  <input type="text" id="mobile" class="form-control" placeholder="{{$auth['mobile']}}" value="{{$auth['mobile']}}">
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="row">
                   
                    <div class="col-md-6 pl-3">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" id="city" placeholder="{{$auth['city']}}" value="{{$auth['city']}}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-3">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" id="address" placeholder="{{$auth['address']}}" value="{{$auth['address']}}">
                      </div>
                    </div>
                  </div>
                  

                </div>
              </div>
            </div>



            <button class="updateCustomer button button1 " uid="{{Auth::id()}}" email="{{$auth['email']}}" experience="{{$auth['experience']}}" lawyerType="{{$auth['lawyerType']}}" password="{{$auth['password']}}" profession="{{$auth['profession']}}"  >Submit Information</button>

        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-user">
        <div class="image">
        </div>
        <div class="card-body">
          <div class="author">
            <a href="#">
              <img class="avatar border-gray" src="../images/profile.jpg" alt="...">
              <h5 class="title">{{$auth['name']}}</h5>
            </a>
            <p class="description">
              {{$auth['email']}}
            </p>
          </div>
          <p class="description text-center">
            {{$auth['city']}}

          </p>
        </div>
        <hr>
        <div class="button-container">
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-twitter"></i>
          </button>
          <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
            <i class="fab fa-google-plus-g"></i>
          </button>
        </div>
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

