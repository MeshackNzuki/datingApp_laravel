@extends('layouts.app')

@section('content')
<div class="container " style="padding:32px">
    <div class="row justify-content-center">
        <div class="col-md-6 ">
            <div class="card shadow-lg border">
                <div class="card-header ">   <h4 class="text-center fw-bold mb-5">Log in</h2></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf                
                        <div class="emailBox row px-4 py-2">
                                <input id="email" type="email" class="@error('email') is-invalid @enderror text-center" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="passwordBox row px-4 py-2">
                                <input id="password" placeholder="Password" class="text-center" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                        <div class="joinNow d-flex flex flex-direction-row justify-content-between px-3 py-2">
                                <a href = "/signup" class="link-anchor text-center">Join free</a>
                            
                                    @if (Route::has('password.request'))
                                    <a class="link-anchor text-center" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                      
                                <button type="submit" class="main-btn btn btn-primary mt-4 px-5 py-2 rounded-pill">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


