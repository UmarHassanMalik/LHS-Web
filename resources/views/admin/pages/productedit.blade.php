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
            <h2 class="mb-0" style="color:#fff;">Editing {{ $product->name }} </h2>

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



            <form role="form" action="/product/edit" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="hidden" name="productId" value="{{ $product->id }}">


                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">

                        <input required class="form-control" placeholder="Product Name" type="text"
                            data-toggle="Product" data-placement="right" title="Product Name" name="name"
                            value="{{ $product->name }}">
                    </div>
                </div>





                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">

                        <textarea required class="form-control" placeholder="Product Description" type="text"
                            data-toggle="Product Description" data-placement="right" title="Product Description"
                            name="description">{{ $product->description }}</textarea>
                    </div>
                </div>


                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">

                        <input required class="form-control" placeholder="Product Price" type="text"
                            data-toggle="Product" data-placement="right" title="Product Price" name="price"
                            value="{{ $product->price }}">
                    </div>
                </div>


                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">

                        <input required class="form-control" placeholder="Skin Type" type="text"
                            data-toggle="Product" data-placement="right" title="Product Color" name="skinType"
                            value="{{ $product->skinType }}">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">

                        <input required class="form-control" placeholder="Skin Care Concern" type="text"
                            data-toggle="Product" data-placement="right" title="Skin Care Concern" name="skinCareConcern"
                            value="{{ $product->skinCareConcern }}">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">

                        <input required class="form-control" placeholder="Precaution" type="text"
                            data-toggle="Product" data-placement="right" title="Precaution" name="precaution"
                            value="{{ $product->precaution }}">
                    </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">

                      <input required class="form-control" placeholder="Instruction" type="text"
                          data-toggle="Product" data-placement="right" title="Instruction" name="instruction"
                          value="{{ $product->instruction }}">
                  </div>
              </div>


                <h3 style="margin-top:25px;margin-bottom: 25px;">Quantity</h3>

              





                <h3 style="margin-top:25px;">Images</h3>



                <div class="custom-control custom-checkbox mb-3">
                    <input class="custom-control-input" name="useImages" id="editImages" type="checkbox" checked>
                    <label class="custom-control-label" for="editImages">Use Same Images</label>
                </div>

                <div class="newImages" style="display: none;">

                    <div class="input-group hdtuto control-group lst increment">

                        <input type="file" name="filenames[]" class="myfrm form-control">

                        <div class="input-group-btn">

                            <button class="btn btn-success" type="button"><i
                                    class="fldemo glyphicon glyphicon-plus"></i>Add</button>

                        </div>

                    </div>

                    <div class="clone hide">

                        <div class="hdtuto control-group lst input-group" style="margin-top:10px">

                            <input type="file" name="filenames[]" class="myfrm form-control">

                            <div class="input-group-btn">

                                <button class="btn btn-danger" type="button"><i
                                        class="fldemo glyphicon glyphicon-remove"></i> Remove</button>

                            </div>

                        </div>

                    </div>

                </div>



                <!--  
 <h3 style="margin-top:25px;">Preview</h3>



<label class="custom-toggle">
  <input type="checkbox" name="status">
  <span class="custom-toggle-slider rounded-circle"></span>
</label>

 -->



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


<script type="text/javascript">
    $(document).ready(function () {
        $(".selectCollection").change(function () {
            var collection = $(this).children("option:selected").val();

            $(".categoriesSelect").hide();

            $(".categoriesSelect[collectionId=" + collection + "]").fadeIn("slow");
        });



        $("#editImages").click(function () {
            $(".newImages").toggle();
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
