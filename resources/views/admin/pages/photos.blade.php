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




            <a  href="/photo/new" style="text-decoration:none;color:#fff;">
            <button class="btn btn-primary" style="float:right;">





         
            Upload &nbsp <i class="fa fa-upload" ></i>
        </button>
        </a>      








            <h1 class="mb-0">Instagram Photos</h1>


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
                    <th scope="col">Upload Date</th>
                    <th scope="col">Photo</th>

                   <th scope="col"></th>

                  </tr>
                </thead>
                <tbody>
                @foreach($photos as $p)



                <tr>
                    <td>
                        {{ $loop->iteration }}
                </td>
                    <th scope="row">
                      <div class="media align-items-center">
                      
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $p->created_at }}</span>
                        </div>
                      </div>
                    </th>
                                       <td scope="row">
                      <div class="media align-items-center">
                      
                        <div class="media-body">
                          <span class="mb-0 text-sm"><img src="/uploads/{{$p->image}}" width="80" height="80" alt=""></span>
                        </div>
                      </div>
                    </td>
                                     
                             
               
                    
               <td class="text-right">
                      <div class="dropdown">
                        
                          <a class="btn btn-danger" href="/photo/delete/{{$p->id}}">Delete</a>
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
