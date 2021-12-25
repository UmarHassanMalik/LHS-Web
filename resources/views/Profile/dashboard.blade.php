@extends('Profile.layout')

@section('content')
<div class="panel-header panel-header-lg">
  <canvas id="bigDashboardChart"></canvas>
</div>
<div class="content">
  <div class="row">
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category"> </h5>
          <h4 class="card-title">Opened Cases</h4>

        </div>
        <div class="card-body">
          <h1 class="mt-4">{{$openedCases}}</h1>

        </div>
        <div class="card-footer">
          <div class="stats">
            <!-- <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category"> </h5>
          <h4 class="card-title">Closed cases</h4>

        </div>
        <div class="card-body">
          <h1 class="mt-4">{{$closedCases}}</h1>

        </div>
        <div class="card-footer">
          <div class="stats">
            <!-- <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category"> </h5>
          <h4 class="card-title">Total Applications</h4>

        </div>
        <div class="card-body">
          <h1 class="mt-4">{{$applications}}</h1>

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
@include('Profile.footer')
@endsection