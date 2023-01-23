@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-8 col-md-10 col-lg-4 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="text-center p-3">
                        <img src="https://sumberglobalenergy.co.id/img/sge-banner.pngC:\laragon\www\company\public\img\sge-banner.png"
                            class="img-fluid" width="70%" alt="Logo">
                    </div>

                    <div class="card">

                        <div class="card-body">
                            <div class="m-sm-4">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group mb-3">
                                            <label class="label" for="name">{{ __('Email Address') }}</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <button type="submit"
                                                class="form-control btn btn-primary rounded submit px-3">{{ __('Login') }}</button>
                                        </div>
                                        <div class="form-group d-md-flex">
                                            <div class="w-50 text-left">
                                                <label class="checkbox-wrap checkbox-primary mb-0"><input
                                                        class="form-check-input" type="checkbox" name="remember"
                                                        id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    {{ __('Remember Me') }}


                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="w-50 text-md-right">
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
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
