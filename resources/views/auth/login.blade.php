@extends('layout.master2')

@section('content')

<div class="page-content align-items-center justify-content-center">

    <div class="row">
      <div class="col-md-8 col-xl-6 mx-auto">
        <div class="card">
          <div class="row justify-content-center">
           
            <div class="col-md-10">
              <div class="auth-form-wrapper px-4 py-5">
                <a href="#" class="noble-ui-logo d-block mb-2">Noble<span>UI</span></a>
                <h5 class="text-muted font-weight-normal mb-4">Welcome back! Log in to your account.</h5>

                <form method="POST" action="{{ route('login') }}" class="forms-sample" aria-label="{{ __('Login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input id="email" 
                        type="email" 
                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                        placeholder="Email"
                        name="email" 
                        value="{{ old('email') }}" 
                        required 
                        autocomplete="email" 
                        autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" 
                        type="password" 
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                        placeholder="Password"
                        name="password" 
                        required 
                        autocomplete="current-password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary mr-2 mb-2 mb-md-0">
                        {{ __('Login') }}
                    </button>
                </div>

                @if (Route::has('password.request'))
                    <a class="d-block mt-3 text-muted" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

                @if (Route::has('register'))
                    <a class="d-block mt-3 text-muted" href="{{ route('register') }}">
                        Not a user? Sign up
                    </a>
                @endif
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
@endsection
