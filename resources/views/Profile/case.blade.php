@extends('Profile.layout')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">{{ $case['title'] }}</h4>
          @if($case['isopen'] == 'true')
          @else
          <a href="/Case/Messages/{{$case['title']}}/{{$case['user_id']}}"
            style="background-color: #203F64; color: white;" class=" btn btn-secondary">
            Messages
          </a>
          @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">

              <tbody>
                <tr>
                  <td>
                    Budget
                  <td>
                    {{$case['budget']}}
                  </td>


                </tr>
                <tr>
                  <td>
                    City
                  <td>
                    {{$case['city']}}
                  </td>


                </tr>
                <tr>
                  <td>
                    Court
                  <td>
                    {{$case['courttype']}}
                  </td>


                </tr>
                <tr>

                  </td>


                </tr>
                <tr>
                  <td>
                    Case Statement
                  <td>
                    {{$case['statement']}}
                  </td>


                </tr>
                </tr>
                <tr>
                  <td>
                    Case Status
                  <td>
                  @if($case['isopen'] == 'true')
                    Opened
                    @elseif($case['isopen'] == 'ongoing')
                    Ongoing
                    @else
                    Closed
                    @endif
                  </td>


                </tr>
                @if($case['hiredlawyer'] == 'true')
                <tr>
                  <td>
                    Hired Lawyer
                  <td>
                    {{$case['lawyer_name']}}
                  </td>


                </tr>
                @else
              
                @endif


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Applications</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Lawyer Name
                </th>
                <th>
                  Lawyer Category
                </th>


                <th>
Budget
                </th>
<th></th>
              </thead>
              <tbody>
                @foreach($applications as $app)
                <tr>

                  <td>
                    {{$app['lawyer_name']}}
                  <td>
                    {{$app['lawyer_type']}}
                  </td>
                  <td>
                    {{$app['budget']}}
                  </td>



                  <td>
                    <!--             <a class="btn btn-primary" id="hireLawyer" lawyer_name="{{$app['lawyer_name']}}" lawyer_id="{{$app['lawyer_id']}}" case_id="{{$app['case_id']}}" isopen="false" budget="{{$case['budget']}}" applications="{{$case['applications']}}" city="{{$case['city']}}"   courttype="{{$case['courttype']}}"  email="{{$case['email']}}"    statement="{{$case['statement']}}"  title="{{$case['title']}}" user_id="{{$case['user_id']}}"   >
                    Hire Lawyer
                    </a> -->
                    @if($case['hiredlawyer'] == 'true')
                    @if($case['lawyer_id'] == $app['lawyer_id'])
                    <a class="btn btn-primary">
                      Hired
                    </a>
                    @endif

                    
                    @else
                    <a class="btn btn-primary" href="/hireLawyer/{{$app['lawyer_id']}}/case/{{$case['title']}}/{{$app['application_id']}}"
                      lawyer_id="{{$app['lawyer_id']}}" case_id="{{$app['case_id']}}">
                      Hire Lawyer
                    </a>
                    @endif

                    <a class="btn btn-danger" href="{{route('removeApp', $app['application_id'])}}">
                      Remove Application
                    </a>
                  </td>
                </tr>
                @endforeach


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

@include('Profile.footer')

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



  $("#hireLawyer").on('click', function () {
    case_id = $(this).attr('case_id');
    lawyer_id = $(this).attr('lawyer_id');
    lawyer_name = $(this).attr('lawyer_name');
    applications = $(this).attr('applications');
    budget = $(this).attr('budget');
    city = $(this).attr('city');
    courttype = $(this).attr('courttype');
    email = $(this).attr('email');
    statement = $(this).attr('statement');
    title = $(this).attr('title');
    user_id = $(this).attr('user_id');


    var postData = {
      title: title,
      statement: statement,
      isopen: 'false',
      hiredlawyer: lawyer_name,
      email: email,
      courttype: courttype,
      city: city,
      budget: budget,
      lawyer_id: lawyer_id,
      user_id: user_id,
      case_id: case_id,
      applications: applications

    };

    var updates = {};
    updates['cases/' + user_id + "/" + title] = postData;
    firebase.database().ref().update(updates);

    alert("Done");
  });

</script>






@endsection