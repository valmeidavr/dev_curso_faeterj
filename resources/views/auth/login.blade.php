@extends('layouts.app')
@section('conteudo')
    <div style="margin-top: 100px" class="form_login">
          <form method="POST" action="{{ route('login') }}">
               @csrf
              <div class="simple-login-container">
                  <h2>Realize o login</h2>
                  <div class="row mt-4">
                      <div class="col-md-12 form-group">
                          <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12 form-group">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
  
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                      </div>
                  </div>
          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
  
                                      <label class="form-check-label" for="remember">
                                          {{ __('Remember Me') }}
                                      </label>
                                  </div>
                              </div>
                   </div>
                            <div class="form-group row mb-0">
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
              </div>

        </form>
    </div>
@endsection
@include('layouts.partials.menu')