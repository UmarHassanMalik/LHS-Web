@extends('lawyer.layout')

@section('content')


<!-- End Navbar -->

<div class="panel-header panel-header-lg">
  <!-- <canvas id="bigDashboardChart"></canvas> -->
</div>
<div class="content">
  <div class="row">
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h4 class="card-title">Applied Cases</h4>

        </div>
        <div class="card-body">
          <h1 class="mt-4">{{$appliedCases}}</h1>

        </div>
        <div class="card-footer">
          <div class="stats">
            <!-- <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h4 class="card-title">Hired Cases</h4>

        </div>
        <div class="card-body">
          <h1 class="mt-4">{{$hiredCases}}</h1>

        </div>
        <div class="card-footer">
          <div class="stats">
            <!-- <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h4 class="card-title">Articles</h4>

        </div>
        <div class="card-body">
          <h1 class="mt-4">{{$articles}}</h1>

        </div>
        <div class="card-footer">
          <div class="stats">
            <!-- <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated -->
          </div>
        </div>
      </div>
    </div>
 
  </div>
</div>


@endsection

<!-- ************          Start Footer           *********** -->