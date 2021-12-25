@extends('admin.app')

@section('content')

   @include('admin.sidenav')
   @include('admin.topnav')

    <!-- End Navbar -->
    <!-- Header -->
    @include('admin.mainHeader')


    
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">

            <button class="btn btn-primary" style="float:right;">
                <a href="/content/create" style="text-decoration:none;color:#fff;">
            Create &nbsp <i class="fa fa-plus"></i>
</a>
              </button>
            <h2 class="mb-0">Content Pages</h2>


            @if ($message = Session::get('success'))

            <br />
<div class="alert alert-success alert-block" style="margin-top:7px;">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif



            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Page Name</th>
                    <th scope="col">URL</th>
                    <th scope="col">Comments</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($content as $c)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                </td>
                    <th scope="row">
                      <div class="media align-items-center">
                      
                        <div class="media-body">
                          <span class="mb-0 text-sm">{{ $c->content_title }}</span>
                        </div>
                      </div>
                    </th>
                    <td>
                      <a href="/en/{{ $c->content_key}}" target="_blank">  /en/{{ $c->content_key }} </a>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-warning"></i> {{ App\Comment::where('content_id', $c->id)->get()->count() }}
                      </span>
                    </td>
               <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="/content/edit/{{ $c->id }}">Edit</a>
                          <a class="dropdown-item" href="/content/delete/{{ $c->id }}">Delete</a>
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
