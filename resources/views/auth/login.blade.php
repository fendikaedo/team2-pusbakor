@extends('layouts.auth')
@section('title','Sign In PUSBAKOR')
@section('title1','Sign In PUSBAKOR')
@section('content')
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-7 shadow bg-gradient-dark">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient text-center">Website PUSBAKOR</h3>
                            </div>
                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger text-white">
                                            {{ implode('', $errors->all('Email atau Password salah')) }}
                                        </div>
                                    @endif

                                    <label class="text-white">Email</label>
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            aria-label="Email" aria-describedby="email-addon">
                                    </div>
                                    <label class="text-white">Password</label>
                                    <div class="mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Password"
                                            aria-label="Password" aria-describedby="password-addon">
                                    </div>
                                    <!--<div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                        <label class="form-check-label text-white" for="rememberMe">Remember me</label>
                                    </div>-->
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign
                                            in</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto text-white">
                                    Don't have an account?
                                    <a href="{{ route('register') }}" class="text-info text-gradient font-weight-bold">Sign
                                        up<br></a>
                                    Lupa Pasword?
                                    <a href="{{ route('password.request') }}" target="_self"
                                        class="text-info text-gradient font-weight-bold">Forgot Password</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover fixed-top ms-auto h-100 z-index-0 ms-n6"
                                style="background-image:url('{{ asset('img/curved-images/curved6.jpg') }}'"></div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
@endsection
