@extends('admin.app')

@section('content')

   @include('admin.sidenav')
   @include('admin.topnav')

    <!-- End Navbar -->
    @include('admin.mainHeader')


      
  
    <div class="container-fluid" style="margin-top:-50px;">
    <div class="row">
        <div class="col-md-8">
        <h2 class="mb-0" style="color:#fff;">Edit Content Page</h2>

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

 <form role="form" action="/content/edit" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input type="hidden" value="{{ $content->id }}" name="content_id">


        <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <input required class="form-control" placeholder="Static Content Link Title" type="text" 
                    data-toggle="tooltip" data-placement="right" title="Static Content Link Title"
                      name="link_title" value="{{ $content->link_title }}"  >
                  </div>
                </div>

                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input class="form-control" placeholder="Static Content Title" type="text" 
                    data-toggle="tooltip" data-placement="right" title="Static Content Title"
                      name="content_title" value="{{ $content->content_title }}" >
                  </div>
                </div>


                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input class="form-control" placeholder="Static Content Keywords" type="text" 
                    data-toggle="tooltip" data-placement="right" title="Static Content Keywords"
                      name="content_keywords" value="{{ $content->content_keywords }}" >
                  </div>
                </div>

                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input class="form-control" placeholder="Static Content Key" type="text" 
                    data-toggle="tooltip" data-placement="right" title="Static Content Key"
                      name="content_key" value="{{ $content->content_key }}" >
                  </div>
                </div>



                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
            
                    <input class="form-control" placeholder="Static Content Description" type="text" 
                    data-toggle="tooltip" data-placement="right" title="Static Content Description"
                      name="content_description" value="{{ $content->content_description }}"  >
                  </div>
                </div>

  




             
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" value="1" type="checkbox" name="display_link_section"  {{ ($content->display_link_section == 1) ? 'checked' : '' }}>
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Display in Links Section</span>
                  </label>
                </div>
  
                <br />
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                        <textarea class="form-control"  data-toggle="tooltip" name="content_textarea" data-placement="right" title="Static Content Text Area" style="height:240px;" placeholder="Static Content Text Area">{{ $content->content_textarea}}</textarea>
                  </div>
                </div>


                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="useCustomImages custom-control-input"  id="customCheckLogin2" value="1" type="checkbox" useCustom="0" name="in_progress" checked>
                  <label class="custom-control-label" for="customCheckLogin2">
                    <span class="text-muted">Use Previous Images</span>
                  </label>
                </div>


                <div class="showCustomImagesUpload" style="display:none;">
                  <input type="file" name="image"   class="form-control" style="box-sizing: content-box !important;width:97%;height:25px;margin-top:2%;"/>
                  <input type="file" name="image_2" class="form-control" style="box-sizing: content-box !important;width:97%;height:25px;margin-top:1%;"/>
                  <input type="file" name="image_3" class="form-control" style="box-sizing: content-box !important;width:97%;height:25px;margin-top:1%;margin-bottom:1%;"/>
        
                </div>



                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id="customCheckLogin2" value="1" type="checkbox" name="in_progress" {{ ($content->in_progress == 1) ? 'checked' : '' }}  >
                  <label class="custom-control-label" for="customCheckLogin2">
                    <span class="text-muted">In Progress</span>
                  </label>
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
         @section('footer_page')
          <script>
            $(document).ready(function(){
                $(".useCustomImages").click(function(){
                    useCustom = $(this).attr("useCustom");

                    if(useCustom == 0){
                      $(".showCustomImagesUpload").fadeIn("slow");
                      $(".useCustomImages").attr("useCustom", '1');
                      $(".useCustomImages").val(1);
                    }
                    else {
                      $(".showCustomImagesUpload").hide();
                      $(".useCustomImages").attr("useCustom", '0');
                      $(".useCustomImages").val(0);

                    }
                });


            });
          </script>

          @endsection
    </div>
  </div>

@endsection
