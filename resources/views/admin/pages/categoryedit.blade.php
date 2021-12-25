@extends('admin.app')

@section('content')

   @include('admin.sidenav')
   @include('admin.topnav')

    <!-- End Navbar -->
    <!-- Header -->
    @include('admin.mainHeader')

    
  
    <div class="container-fluid" style="margin-top:-50px;">
    <div class="row">
        <div class="col-md-8">
        <h2 class="mb-0" style="color:#fff;">Editing {{ $category->name }} Category </h2>

 <br /> <br />
 

 @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
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
 
 <form role="form" action="/category/edit" method="post">
        {{ csrf_field() }}
          
        <input type="hidden" name="categoryId" value="{{ $category->id }}">
        <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input required class="form-control" placeholder="New Name" type="text" 
                    data-toggle="New Name" data-placement="right" title="New Name"
                      name="name"  >
                  </div>
                </div>


 



                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4" style="width:100%;">Update</button>
                </div>
              </form>


        
        </div>
    </div>
    
    </div>
  


    
    <div class="container-fluid mt--7">

       <!-- Footer -->
        @include('admin.footer')
    
    </div>
  </div>

@endsection
