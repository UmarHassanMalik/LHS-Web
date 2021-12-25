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
        <h2 class="mb-0" style="color:#fff;">New Collection</h2>

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
 
 <form role="form" action="/collection/create" method="post">
        {{ csrf_field() }}
          
        
        <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input required class="form-control" placeholder="Collection Name" type="text" 
                    data-toggle="Collection" data-placement="right" title="Collection Name"
                      name="name"  >
                  </div>
                </div>






<h3 style="margin-top:25px;">Categories</h3>

          @foreach($categories as $c)


<div class="custom-control custom-checkbox">
  <input type="checkbox"  value="{{ $c->id }}" class="custom-control-input" id="customCheck{{ $c->id }}" name="categories[]" >
  <label class="custom-control-label" for="customCheck{{ $c->id }}">{{ $c->name }}</label>
</div>




          @endforeach


 
 <h3 style="margin-top:25px;">Preview</h3>



<label class="custom-toggle">
  <input type="checkbox" name="status">
  <span class="custom-toggle-slider rounded-circle"></span>
</label>





                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4" style="width:100%;">Create</button>
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
