


@extends('index')

@section('content')

<div class="form-title text-center">
    <h4>LOGIN</h4>
  </div>
  <div class="d-flex flex-column text-center">
    <form method="POST" action="{{ route('login') }}">
        @csrf
      <div class="container">
        
        <i class="fa fa-user icon"></i> &nbsp; &nbsp;
        <input placeholder="Enter Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <br>
                             
      </div>
      <br>
      <div class="container">
        
        <i class="fa fa-key icon"></i>&nbsp;&nbsp;
        <input placeholder="Enter Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        <br>
                            
      </div>

      <div class="container">
       
            <div class="form-check ">
                <label class="form-check-label" for="remember">
                  <div class="pretty p-default p-thick p-pulse">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <div class="state p-info-o">
                        <label>Remember Me</label>
                    </div>
                </div>
                </label>
            </div>
    
    </div>
      <br><br>
      <div>
      
      <button type="submit" class="btn btn-dark btn-block btn-round btn-style"><i class="fa fa-sign-in icon"></i>
        {{ __('Login') }}
    </button>
      @if (Route::has('forgotPassword'))
      <a class="btn btn-link" href="{{ route('forgotPassword') }}">
         <u> {{ __('Forgot Your Password?') }}</u>
      </a>
         @endif
      </div>
    </form>

    <div class="text-center text-muted delimiter"></div>
    <div class="d-flex justify-content-center social-buttons">
   
     
    </div>
  </div>
</div>
<div class="modal-footer d-flex justify-content-center" >
  <div class="signup-section" >Not a member yet? <a style="cursor: pointer" data-toggle="modal" data-target="#myModal" data-dismiss="modal" class="text-info"> Sign Up</a>.</div>
</div>
</div>
</div>
@endsection
