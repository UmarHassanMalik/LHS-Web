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

            
            <a href="/order/all" style="text-decoration:none;color:#fff;">
                Back
            </a>          


           </button>

     


            <h2 class="mb-0">Order Reference # {{ $order->id }}</h2>


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
                    <th scope="col">Email</th>
                    <td> {{ $order->email }} </td>


                  </tr>

                  <tr>
                    <th scope="col">Username/User Id</th>
                    <td> {{ $order->userId }} </td>


                  </tr>

                  <tr>
                    <th scope="col">Full Name</th>
                    <td> 

                        @foreach($order->address as $oA)
                            {{ $oA->first }}
                        @endforeach
                     </td>


                  </tr>

                    <tr>
                    <th scope="col">Phone</th>
                    <td> 

                        @foreach($order->address as $oA)
                            {{ $oA->phone }}
                        @endforeach
                     </td>


                  </tr>


           <tr>
                    <th scope="col">Company</th>
                    <td> 

                        @foreach($order->address as $oA)
                            {{ $oA->company }}
                        @endforeach
                     </td>


                  </tr>


         <tr>
                    <th scope="col">Address</th>
                    <td> 

                        @foreach($order->address as $oA)
                            {{ $oA->address }}
                        @endforeach
                     </td>


                  </tr>


         <tr>
                    <th scope="col">Apartment</th>
                    <td> 

                        @foreach($order->address as $oA)
                            {{ $oA->apartment }}
                        @endforeach
                     </td>


                  </tr>
         <tr>
                    <th scope="col">City</th>
                    <td> 

                        @foreach($order->address as $oA)
                            {{ $oA->city }}
                        @endforeach
                     </td>


                  </tr>

        <tr>
                    <th scope="col">country</th>
                    <td> 

                        @foreach($order->address as $oA)
                            {{ $oA->country }}
                        @endforeach
                     </td>


                  </tr>


                   <tr>
                    <th scope="col">Postal Code</th>
                    <td> 

                        @foreach($order->address as $oA)
                            {{ $oA->postalCode }}
                        @endforeach
                     </td>


                  </tr>



                  <tr style="margin-top:10px;">
                        <td style="margin-top:10px;">
                          

                        </td>
                  </tr>



                      <tr>
                          <th>
                              Product
                          </th>
                          <th>
                              Quantity
                          </th>
                          <th>
                              Size
                          </th>
                          <th> 
                              Color
                          </th>
                      </tr>

                  @foreach($order->items as $item)
                      <tr>
                            <td>
                                {{ \App\Models\Product::find($item->product_id)->name }}
                            </td>

                              <td>
                                x{{ $item->quantity }}
                            </td>
                                  <td>
                                {{ $item->size }}
                            </td>
            <td>
                                {{ \App\Models\Product::find($item->product_id)->color }}
                            </td>
                      </tr>
                  
                  @endforeach

                </thead>
                <tbody>
            


                  
                

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
