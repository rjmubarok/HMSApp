@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>
                <div class="card-body p-md-5">
                  <h4 class="text-uppercase fs-0 fs-md-1">login </h4>

                    <form class="text-start mt-4" method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="row align-items-center">
                      <div class="col-12">
                        <div class="input-group">
                          <div class="input-group-text bg-100"><span class="far fa-user"></span></div>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus  placeholder="Email or username" aria-label="Text input with dropdown button" />

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                      </div>
                      <div class="col-12 mt-2 mt-sm-4">
                        <div class="input-group">
                          <div class="input-group-text bg-100"><span class="fas fa-lock"></span></div>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  placeholder="Password" aria-label="Text input with dropdown button" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center mt-3">
                      <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                      </div>
                      <div class="col-6 mt-2 mt-sm-3"><button class="btn btn-primary btn-sm w-50" type="submit">Login</button></div>
                    </div>
                    <div class="d-flex mt-3">
                      <a class="btn btn-dark btn-icon btn-icon-left btn-sm me-3" href="{{ route('CallGitHub') }}">
                          <span class="btn-icon-wrapper">
                            <span class="fab fa-github"></span>
                          </span>Login With Github
                        </a>

                        <a class=" btn btn-success btn-icon btn-icon-left btn-sm me-3" href="{{ route('register') }}">
                          <span class="btn-icon-wrapper">
                            <span class="far fa-user"></span>
                          </span>Regitration
                        </a>
                    </div>
                  </form>
                </div>
              </div>
            {{-- <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 offset-4 mt-3">
                            <a href="{{ route('register') }}" class="btn btn-success"> <i class="fab fa-user">Regitration </i></a>
                            <a href="{{ route('CallGitHub') }}" class="btn btn-primary"> <i class="fab fa-github"> Singup With GitHub </i></a>
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
</div>

@endsection
