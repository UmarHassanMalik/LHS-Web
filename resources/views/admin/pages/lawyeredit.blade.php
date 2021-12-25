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
        <h2 class="mb-0" >Editing {{ $lawyer['name'] }}</h2>

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
 
 <form role="form" action="/lawyer/edit" method="post">
        {{ csrf_field() }}
          

          <input type="hidden" name="user_id" value="{{ $lawyer['user_id'] }}" >
        
        <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input required class="form-control" placeholder="user Name" type="text" 
                    data-toggle="user" data-placement="right" title="user Name"
                      name="name" value="{{ $lawyer['name'] }}"  >
                  </div>
                </div>

        <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input required class="form-control" placeholder="Email" type="text" 
                    data-toggle="user" data-placement="right" title="Email"
                      name="email" value="{{ $lawyer['email'] }}"  >
                  </div>
                </div>

    

           <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input required class="form-control" placeholder="Mobile" type="text" 
                    data-toggle="user" data-placement="right" title="Email"
                      name="mobile" value="{{ $lawyer['mobile'] }}"  >
                  </div>
                </div>

           <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input required class="form-control" placeholder="City" type="text" 
                    data-toggle="user" data-placement="right" title="Email"
                      name="city" value="{{ $lawyer['city'] }}"  >
                  </div>
                </div>

           <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input required class="form-control" placeholder="Address" type="text" 
                    data-toggle="user" data-placement="right" title="Email"
                      name="address" value="{{ $lawyer['address'] }}"  >
                  </div>
                </div>


           <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input required class="form-control" placeholder="Experience" type="text" 
                    data-toggle="user" data-placement="right" title="Email"
                      name="experience" value="{{ $lawyer['experience'] }}"  >
                  </div>
                </div>



                  <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input required class="form-control" placeholder="Lawyer Type" type="text" 
                    data-toggle="user" data-placement="right" title="Email"
                      name="lawyerType" value="{{ $lawyer['lawyerType'] }}"  >
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
