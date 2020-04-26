@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
           <h2 class="text-center">Admin Panel</h2>
            <div class="card bg-info text-light">
                <div class="card-header text-center" style="font-size:20px;">{{ __('Friend Zone') }}
                <span class="d-flex justify-content-center" style="font-size:11px;">Cafe & Restaurant</span>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row mr-3 ml-3">
                            <label for="email" class="form-label text-md-right">{{ __('User Email Address') }}</label>

                            
                                <input id="email" type="email" class="form-control border @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row ml-3 mr-3">
                            <label for="password" class="col-form-label text-md-right">{{ __('User Password') }}</label>

                    
                                <input id="password" type="password" class="form-control border @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback text-light" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-light" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row ml-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-info border px-4 mt-2">
                                    {{ __('login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-light mt-2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <p class="pt-2 mb-0"><i class="fa fa-copyright" aria-hidden="true"></i> 2020.Friend Zone. All Rights Reserved.</p>
            <a href="/index" class="text-monospace"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to Home</a>
        </div>
    </div>
</div>
@endsection
