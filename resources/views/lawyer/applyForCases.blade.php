@extends('lawyer.layout')

@section('content')

<!-- End Navbar -->
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><i class="fa fa-files-o"></i> Apply For the Latest Cases</h4>
                    <hr>
                </div>
       

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">

                                <th>
                                    Case Title
                                </th>
                                <th>
                                    Budget
                                </th>
                                <th>
                                    Applications
                                </th>
                            </thead>
                            <tbody>
                                @foreach($cases as $case)
                                <tr>

                                    <td>
                                        {{$case['title']}}
                                    </td>
                                    <td>
                                        {{$case['budget']}}
                                    </td>
                                    <td>
                                        {{$case['applications']}}
                                    </td>
                                    <td>
                                        <a  class="add_btn" data-toggle="modal" data-target="#exampleModal{{$case['case_id']}}">Apply</a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="exampleModal{{$case['case_id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Article</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('apply')}}" method="post">
          @csrf
          <input type="hidden" name="case_id" value="{{$case['case_id']}}">
          <input type="hidden" name="title" value="{{$case['title']}}">

          <input type="hidden" name="user_id" value="{{$case['user_id']}}">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Your Offer:</label>
            <input type="text" class="form-control" id="recipient-name" name="budget">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit Offer</button>
      </form>

      </div>
    </div>
  </div>
</div>
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