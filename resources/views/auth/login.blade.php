


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
       
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
    
    </div>
      <br><br>
      <div>
      
      <button type="submit" class="btn btn-dark btn-block btn-round btn-style">
        {{ __('Login') }}
    </button>
      @if (Route::has('forgotPassword'))
      <a class="btn btn-link" href="{{ route('forgotPassword') }}">
          {{ __('Forgot Your Password?') }}
      </a>
         @endif
      </div>
    </form>

    <div class="text-center text-muted delimiter">or use a social network</div>
    <div class="d-flex justify-content-center social-buttons">
      <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top"
        title="Twitter">
        <i class="fab fa-twitter"></i>
      </button>
      <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top"
        title="Facebook">
        <i class="fab fa-facebook"></i>
      </button>
      <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top"
        title="Linkedin">
        <i class="fab fa-linkedin"></i>
      </button>
     
    </div>
  </div>
</div>
<div class="modal-footer d-flex justify-content-center" >
  <div class="signup-section" >Not a member yet? <a style="cursor: pointer" data-toggle="modal" data-target="#myModal" data-dismiss="modal" class="text-info"> Sign Up</a>.</div>
</div>
</div>
</div>
@endsection
