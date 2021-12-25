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
            <h1 class="mb-0" style="color:#fff;">Upload Instagram Photos</h1>

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



            <form role="form" action="/photo/upload" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}



                <div class="input-group hdtuto control-group lst increment">

                    <input type="file" name="image[]" class="form-control" multiple>

                   

                </div>






                <!--  <h3 style="margin-top:25px;">Preview</h3>



<label class="custom-toggle">
  <input type="checkbox" name="status">
  <span class="custom-toggle-slider rounded-circle"></span>
</label>

 -->



                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4" style="width:100%;">Upload</button>
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


<script type="text/javascript">
    $(document).ready(function () {
        $(".selectCollection").change(function () {
            var collection = $(this).children("option:selected").val();

            $(".categoriesSelect").hide();

            $(".categoriesSelect[collectionId=" + collection + "]").fadeIn("slow");
        });
    });

</script>




<script type="text/javascript">
    $(document).ready(function () {

        $(".btn-success").click(function () {

            var lsthmtl = $(".clone").html();

            $(".increment").after(lsthmtl);

        });

        $("body").on("click", ".btn-danger", function () {

            $(this).parents(".hdtuto").remove();

        });

    });

</script>
@endsection
