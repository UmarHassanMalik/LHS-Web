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
                    <h4 class="card-title"><i class="fa fa-files-o"></i> Ongoing Cases</h4>
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
                                    Statement
                                </th>
                                <th>
                                    Applications
                                </th>
                            </thead>
                            <tbody>
                                @foreach($cases as $case)
                                <tr>

                                    <td>
                                    <a href="{{route('case', $case['case_id'])}}">
                    {{$case['title']}}
                  </a>
                                    </td>
                                    <td>
                                        {{$case['budget']}}
                                    </td>
                                    <td>
                                        {{$case['statement']}}
                                    </td>
                                    <td>
                                        {{$case['applications']}}
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