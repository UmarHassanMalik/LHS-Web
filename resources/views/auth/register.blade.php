@extends('index')

@section('new-content')

  

<div id="client_regis" class="container tab-pane fade">
                            
    <div class=" text-center text-info font-awesome"><b> {{ __('Register') }} </b></div>
        <br><br>

              
                    <form method="POST" action="{{ route('register') }}">

                        @csrf
                                    
                        <div class="form-group">
                            <label for="name">{{ __('Full Name') }}</label>
                            <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus  id=""
                                placeholder="Enter User Name">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  id="exampleInputPassword2"
                                placeholder="name@example.com">
                                @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="exampleInput"
                                placeholder="Enter Password">
                                @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input type="password" class="form-control " id="exampleInput"
                                placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <br> <br>
                        <button type="createAcc_Submit" class="btn btn-primary btn2">{{ __('Register') }}</button>
                      
                    </form>
                    
                </div>
              
                <small>
                    <p>Already Registered? Login <u><a type="already_registered" data-toggle="modal"
                                data-target="#loginModal" data-dismiss="modal">here</a></u> </p>
                </small>
            
        
    
             </form>
                
            

@endsection
