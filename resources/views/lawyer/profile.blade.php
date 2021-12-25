@extends('lawyer.layout')

@section('content')
      <div class="panel-header panel-header-sm"></div>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title"> EDIT PROFILE</h5><hr>
              </div>
              <div class="card-body">
                  <div class="row">
              
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Name" value="{{$auth['name']}}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Contact</label>
                        <input type="email" id="mobile" class="form-control" placeholder="Email" value="{{$auth['mobile']}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" id="city" class="form-control" placeholder="City" value="{{$auth['city']}}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" id="address" class="form-control" placeholder="Address" value="{{$auth['address']}}">
                      </div>
                    </div>



                  </div>
             

                <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Experience</label>
                        <input type="text" id="experience" class="form-control" placeholder="Experience" value="{{$auth['experience']}}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Qualification</label>
                        <input type="text" id="qualification" class="form-control" placeholder="Qualification" value="{{$auth['qualification']}}">
                      </div>
                    </div>


                    
                  </div>


                <button class="updateLawyer  btn btn-primary " uid="{{Auth::id()}}" email="{{$auth['email']}}" experience="{{$auth['experience']}}" lawyerType="{{$auth['lawyerType']}}" password="{{$auth['password']}}" profession="{{$auth['profession']}}" qualification="{{ $auth['qualification'] }}"  >Submit Information</button>

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
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
              
          
          $(".updateLawyer").on('click', function () {
              id = $(this).attr('uid');
              address = $("#address").val();
              city = $("#city").val();
              email = $(this).attr('email');
              experience = $("#experience").val();
              lawyerType = $(this).attr('lawyerType');
              mobile = $("#mobile").val();
              name = $("#name").val();
              password = $(this).attr('password');
              profession = $(this).attr('profession');
              qualification = $("#qualification").val();
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
                  qualification: qualification
              };
              var updates = {};
              updates['users/'+id] = postData;
              firebase.database().ref().update(updates);
              alert("Profile Updated");
      
          });
      
          </script>

@endsection