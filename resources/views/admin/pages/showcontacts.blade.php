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



       

<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
        	
            <div class="modal-body p-0">
            	
                	
<div class="card bg-secondary shadow border-0">
  
    <div class="card-body px-lg-5 py-lg-5">
        <div class="text-center text-muted mb-4">
            <h3>New Language</h3>
        </div>
        <form role="form" action="/language/create" method="post">
            {{ csrf_field() }}   
        
        <div class="form-group mb-3">
                <div class="input-group input-group-alternative">
            
                    <input class="form-control" placeholder="Language" type="text" required name="name">
                </div>
            </div>
    
            <div class="text-center">
                <button type="submit" class="btn btn-primary my-4">Add</button>
            </div>
        </form>
    </div>
</div>



                
            </div>
            
        </div>
    </div>
</div>




<h2 class="mb-0">Contacts</h2>


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
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($contacts as $l)



                <tr>
                    <td>
                        {{ $loop->iteration }}
                </td>
                    <th scope="row">
                      <div class="media align-items-center">
                      
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $l->name }}</span>
                        </div>
                      </div>
                    </th>

                    <td>
                        {{ $l->email }}
                     </td>
                    
                 
                     <td>
                        {{  substr($l->message, 0, 50) }} ...
                     </td>

                   <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item"  data-toggle="modal" data-target="#modal-default-{{ $l->id }}">View Details</a>
                        <a class="dropdown-item" href="/contacts/delete/{{ $l->id }}">Delete</a>
                        
                        
                        </div>

                        








                      </div>
                    </td>
                  </tr>

                  <div class="modal fade" id="modal-default-{{ $l->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                <div class="modal-content">
                                    
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modal-title-default">{{ $l->name }}</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    
                                    <div class="modal-body">
                                        
                                        <p>{{ $l->message }}</p>

                                        <p><b>Attachments

                                        </b></p>
                                        @foreach($l->allAttachments as $attachment)
                                            <a href="/uploads/{{ $attachment }}" style="font-size:14px;" target="_blank"> {{ $attachment }}</a>  <br /> 
                                        @endforeach
                                        
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>


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
