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


                        <a href="/product/create" style="text-decoration:none;color:#fff;">
                            Create &nbsp <i class="fa fa-plus"></i>
                        </a> </button>
                    <h1 class="mb-0">Products</h1>


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
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th scope="col">Skin Type</th>
                                <th scope="col">Skin Care Concern</th>
                                <th scope="col">Precaution</th>
                                <th scope="col">Instruction</th>

                                <th scope="col"></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $p)



                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <th scope="row">
                                    {{ $p->name }}
                                </th>










                                <th scope="row">
                                    {{ $p->price }}

                                </th>

                                <th scope="row">
                                    {{ $p->description }}

                                </th>
                                <th scope="row">
                                    {{ $p->skinType }}

                                </th>
                                <th scope="row">
                                    {{ $p->skinCareConcern }}

                                </th>
                                <th scope="row">
                                    {{ $p->precaution }}

                                </th>
                                <th scope="row">
                                    {{ $p->instruction }}

                                </th>

                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="/product/edit/{{ $p->id }}">Edit</a>
                                            <a class="dropdown-item" href="/product/delete/{{ $p->id }}">Delete</a>
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
