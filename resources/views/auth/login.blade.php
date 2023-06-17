@extends('layouts.auth')

@section('content')
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="border border-3 border-primary"></div>
                <div class="card bg-white shadow-lg">
                    <div class="card-body p-5">
                        <form class="mb-3 mt-md-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            {{-- <h2 class="fw-bold mb-2 text-uppercase ">Brand</h2> --}}
                            <div class="mb-5">
                                <img src="https://sumberglobalenergy.co.id/img/LOGO-SGE-TBK.png" class="img-fluid me-2"
                                    style=" width: 300px; ">
                                {{-- <span class="fw-bold sitetitle"> PT. Sumber Global Energy Tbk</span> --}}
                            </div>

                            {{-- <p class=" mb-5">Please enter your login and password!</p> --}}
                            <div class="mb-3">
                                <label for="email" class="form-label ">Email address</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label ">Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                            </div>
                            <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p>
                            <div class="d-grid">
                                <button class="btn btn-outline-dark" type="submit">Login</button>
                            </div>
                        </form>
                        <div>
                            {{-- <p class="mb-0  text-center">Don't have an account? <a href="signup.html"
                                    class="text-primary fw-bold">Sign
                                    Up</a></p> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
