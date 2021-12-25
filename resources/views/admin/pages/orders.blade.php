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

            
            <a href="/order/pending" style="text-decoration:none;color:#fff;">
                Pending
            </a>          


           </button>

            <button class="btn btn-primary" style="float:right;">

            
            <a href="/order/delivered" style="text-decoration:none;color:#fff;">
               Delivered 
            </a>          


           </button>


            <h1 class="mb-0">Orders</h1>


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
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Paid</th>
                    <th scope="col">Status</th>

                   <th scope="col"></th>

                  </tr>
                </thead>
                <tbody>
                @foreach($orders as $o)



                <tr>
                    <td>
                        {{ $loop->iteration }}
                </td>
                    <th scope="row">
                      {{ $o->email }}

                    </th>

                 <td scope="row" class="align-items-center">
                        @foreach($o->address as $oA)
                            {{ $oA->first }}
                        @endforeach

                    </td>
                    

             
               

                          <td scope="row">
                     
                  @foreach($o->address as $oA)
                            {{ $oA->phone }}
                        @endforeach
                    </td>

                    <th>
                        ${{ $o->sub_total}}.00
                                        </th>

                        <td scope="row">


                      {{    ($o->status == 0 ? "Pending" : "Delivered")    }}
                          
                       </td>
                    
            
         

               <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="/order/details/{{ $o->id }}">View Details</a>

                          <a class="dropdown-item" href="/order/delivered/{{ $o->id }}">Move to Delivered</a>
                           <a class="dropdown-item" href="/order/pending/{{ $o->id }}">Move to Pending</a>
                          <a class="dropdown-item" href="/order/delete/{{ $o->id }}">Delete</a>
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


  

@endsection
