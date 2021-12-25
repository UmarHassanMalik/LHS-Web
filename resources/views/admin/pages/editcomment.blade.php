@extends('admin.app')

@section('content')

   @include('admin.sidenav')
   @include('admin.topnav')

    <!-- End Navbar -->
    @include('admin.mainHeader')


      
  
    <div class="container-fluid" style="margin-top:-50px;">
    <div class="row">
        <div class="col-md-8">
        <h2 class="mb-0" style="color:#fff;">Edit Comment</h2>

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
 
 <form role="form" action="/comment/edit" method="post">
        {{ csrf_field() }}
        <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                <input name="comment_id" type="hidden" value="{{ $comment->id }}" />


                  <select required name="content_id" class="form-control" data-toggle="tooltip" data-placement="right" title="Content List"> 
                      <option value="" disabled>Content List</option>
                      @foreach($content as $c)
                        <option value="{{ $c->id }}" {{  ($c->id == $comment->content_id) ? 'selected' : '' }}  > {{ $c->content_title }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>        
        
        <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input required class="form-control" placeholder="Author" type="text" 
                    data-toggle="tooltip" data-placement="right" title="Author"
                      name="author" value="{{ $comment->author}}"  >
                  </div>
                </div>


                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">

                  <select required class="form-control" data-toggle="tooltip" data-placement="right" title="Number of Stars" name="stars"> 
                      <option value="" disabled >Number of Stars</option>
                      <option value="1" {{ ($comment->stars == 1 ) ? 'selected' : '' }} >1</option>  
                      <option value="2" {{ ($comment->stars == 2 ) ? 'selected' : '' }} >2</option>  
                      <option value="3" {{ ($comment->stars == 3 ) ? 'selected' : '' }}>3</option>  
                      <option value="4" {{ ($comment->stars == 4 ) ? 'selected' : '' }}>4</option>  
                      <option value="5" {{ ($comment->stars == 5 ) ? 'selected' : '' }}>5</option>  
             
                    </select>
                  </div>
                </div>


                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                        <textarea required class="form-control"  data-toggle="tooltip" data-placement="right" title="Author's Message" name="message" style="height:240px;" placeholder="Author's Message">{{ $comment->message}}</textarea>
                  </div>
                </div>



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
