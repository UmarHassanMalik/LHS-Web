@extends('admin.app')

@section('content')

   @include('admin.sidenav')
   @include('admin.topnav')

    <!-- End Navbar -->
    @include('admin.mainHeader')

    
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">





            <button class="btn btn-primary" style="float:right;">





            <a data-href="/cases/open/all" href="/cases/open/all" id="export" style="text-decoration:none;color:#fff;" onclick="exportTasks(event.target);">
            Open 
</a>              </button>


          <button class="btn btn-primary" style="float:right;">





            <a data-href="/cases/closed/all" href="/cases/ongoing/all" id="export" style="text-decoration:none;color:#fff;" onclick="exportTasks(event.target);">
            On-Going 
</a>              </button>




            <button class="btn btn-primary" style="float:right;">





            <a data-href="/cases/closed/all" href="/cases/closed/all" id="export" style="text-decoration:none;color:#fff;" onclick="exportTasks(event.target);">
            Closed 
</a>              </button>





            <h1 class="mb-0">Cases Closed</h1>


            @if ($message = Session::get('success'))

            <br />
<div class="alert alert-success alert-block" style="margin-top:7px;">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	Please check the form below for errors
</div>
@endif     

            
            </div>
            
            
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Statement</th>

                    <th scope="col">Budget</th>
                    <th scope="col">Hired Lawyer</th>

                   <th scope="col"></th>

                  </tr>
                </thead>
                <tbody>
                @foreach($cases as $key => $u)



                <tr>
                    <td>
                        {{ $loop->iteration }}
                </td>
                    <th scope="row">
                      <div class="media align-items-center">
                      
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $u['title'] }}</span>
                        </div>
                      </div>
                    </th>
       



                                               <td scope="row">
                      <div class="media align-items-center">
                      
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $u['statement'] }}</span>
                        </div>
                      </div>
                    </td>
                    


                             <td scope="row">
                      <div class="media align-items-center">
                      
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $u['budget'] }}</span>
                        </div>
                      </div>
                    </td>



                             <td scope="row">
                      <div class="media align-items-center">
                      
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $u['lawyer_name'] }}</span>
                        </div>
                      </div>
                    </td>


               <td class="text-right">
                    

<!-- 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Case Details
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $u['title'] }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align: left;">

          <span><b>Client:</b> Client Name</span>

          <span><b>Statement:</b> {{ $u['statement']}}</span>

          @if(!empty($u['hiredLawyer']))
          <span><b>Hired Laywer:</b> {{ $u['hiredLawyer']}}</span>
          @endif

          <br /> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 -->

                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="/case/delete/{{ $u['user_id'] }}/{{ $u['title']}}">Delete</a>
                        </div>
                      </div>
                    </td>
                  </tr>

                @endforeach


                  
                

                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <!-- <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul> -->
              </nav>
            </div>
          </div>
        </div>
      </div>
      


    </div>

    <div class="container-fluid mt--7">
     
   
       <!-- Footer -->
        @include('admin.footer')
    
    </div>
  </div>



<script>
   function exportTasks(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
   }
</script>
@endsection
