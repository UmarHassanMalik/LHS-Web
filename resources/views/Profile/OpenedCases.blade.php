@extends('Profile.layout')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Opened Cases</h4>
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
                    Opened

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

@endsection

