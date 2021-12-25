@extends('lawyer.layout')

@section('content')


<!-- End Navbar -->

<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row mt-0">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">{{ $case['title'] }}</h4>
          @if($case['isopen'] == 'true')
          @else
          <a href="/Case/Messages/{{$case['title']}}/{{$case['user_id']}}"
             class=" add_btn">
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
                  Offer
                </th>


             

              </thead>
              <tbody>
                @foreach($applications as $app)
                <tr>

                  <td>
                    {{$app['lawyer_name']}}
</td>

                  <td>
                    {{$app['lawyer_type']}}
                  </td>
                  <td>
                    {{$app['budget']}}
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


@endsection

<!-- ************          Start Footer           *********** -->