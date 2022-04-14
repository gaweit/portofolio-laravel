@extends('layouts.auth.app')

@section('content')
<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href="{{ url('/login') }}"> <h4>{{ __('Login') }}</h4></a>

                            <form class="mt-5 mb-5 login-input" method="POST" action="{{ route('login') }}">

                              @csrf
                              <div class="form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <button class="btn login-form__btn submit w-100">Sign In</button>
                        </form>
                         @if (Route::has('password.request'))
                            <p class="mt-5 login-form__footer text-center"><a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a></p>
                            @endif
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



@endsection
