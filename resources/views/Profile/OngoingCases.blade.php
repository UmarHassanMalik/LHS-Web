@extends('Profile.layout')
@section('content')

<style>
  *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

  </style>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Ongoing Cases</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Case Title
                </th>
                <th>
                  Case Budget
                </th>
                <th>
                  Applications
                </th>
                <th>
                  Case Status
                </th>
                <th>
                 Ratings
                </th>
                <th>
                 Action
                </th>
<th>

</th>
              </thead>
              <tbody>
                @foreach($cases as $case)
                <tr>
                  <td>
                    <a href="{{route('case', $case['case_id'])}}">
                    {{$case['title']}}
                  </a>
                  <td>
                    {{$case['budget']}}
                  </td>
                  <td>
                    {{$case['applications']}}
                  </td>
                  <td>
                    Ongoing

                  </td>
                  <form action="POST">
                    @csrf
                  <td> 
                  
                      
                        <div class="rate">
                          <input type="radio" id="star5" name="rate" value="5" />
                          <label for="star5" title="text">5 stars</label>
                          <input type="radio" id="star4" name="rate" value="4" />
                          <label for="star4" title="text">4 stars</label>
                          <input type="radio" id="star3" name="rate" value="3" />
                          <label for="star3" title="text">3 stars</label>
                          <input type="radio" id="star2" name="rate" value="2" />
                          <label for="star2" title="text">2 stars</label>
                          <input type="radio" id="star1" name="rate" value="1" />
                          <label for="star1" title="text">1 star</label>
                        </div>
                        
                  </td>
                    </form>
                  <td>
                  <a id="submitRate" class="btn btn-primary" href="{{route('closeCase', $case['title'])}}">
                    Close Case
                  </a>      
                </td>
                <form>

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

@endsection

