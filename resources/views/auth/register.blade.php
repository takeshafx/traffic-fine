<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo3/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Jan 2021 07:06:48 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>DrivSri </title>
    <link rel="icon" type="image/x-icon" href="{{URL('assets/img/favicon.ico')}}">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{URL('https://fonts.googleapis.com/css?family=Nunito:400,600,700')}}" rel="stylesheet">
    <link href="{{URL('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL('assets/css/authentication/form-1.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{URL('assets/css/forms/theme-checkbox-radio.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL('assets/css/forms/switches.css')}}" rel="stylesheet" type="text/css">
</head>

<body class="form">

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">


                        <h1 class="">Get started with  <a href="{{URL('/')}}"><span class="brand-name">DrivSri</span></a></h1>
                        <p class="signup-link">Already have an account? <a href="{{URL('/')}}"> Log in</a></p>
                        <form class="text-left" form method="POST" action="{{ route('register')}}">
                            @csrf
                            <div class="form">
                                <div id="licence_no-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <input id="licence_no" name="licence_no" type="text" class="form-control form-control @error('licence_no') is-invalid @enderror" placeholder="Licence Number" value="{{ old('licence_no') }}" required autocomplete="name" autofocus>

                                    @error('licence_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div id="email-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                                        <circle cx="12" cy="12" r="4"></circle>
                                        <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                    </svg>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div id="password-field" class="field-wrapper input mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Comfirm Password">
                                </div>

                                <div class="d-sm-flex justify-content-start">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Register</button>
                                    </div>
                                </div>

                            </div>
                        </form>

                        <!-- <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image bg-white">
            </div>
        </div>
    </div>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{URL('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{URL('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{URL('bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{URL('assets/js/authentication/form-1.j')}}"></script>

</body>

</html>


{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{-- <div class="row justify-content-center">--}}
{{-- <div class="col-md-8">--}}
{{-- <div class="card">--}}
{{-- <div class="card-header">{{ __('Register') }}</div>--}}

{{-- <div class="card-body">--}}
{{-- <form method="POST" action="{{ route('register') }}">--}}
{{-- @csrf--}}

{{-- <div class="form-group row">--}}
{{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{-- <div class="col-md-6">--}}
{{-- <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{-- @error('name')--}}
{{-- <span class="invalid-feedback" role="alert">--}}
{{-- <strong>{{ $message }}</strong>--}}
{{-- </span>--}}
{{-- @enderror--}}
{{-- </div>--}}
{{-- </div>--}}

{{-- <div class="form-group row">--}}
{{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{-- <div class="col-md-6">--}}
{{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{-- @error('email')--}}
{{-- <span class="invalid-feedback" role="alert">--}}
{{-- <strong>{{ $message }}</strong>--}}
{{-- </span>--}}
{{-- @enderror--}}
{{-- </div>--}}
{{-- </div>--}}

{{-- <div class="form-group row">--}}
{{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{-- <div class="col-md-6">--}}
{{-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{-- @error('password')--}}
{{-- <span class="invalid-feedback" role="alert">--}}
{{-- <strong>{{ $message }}</strong>--}}
{{-- </span>--}}
{{-- @enderror--}}
{{-- </div>--}}
{{-- </div>--}}

{{-- <div class="form-group row">--}}
{{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{-- <div class="col-md-6">--}}
{{-- <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{-- </div>--}}
{{-- </div>--}}

{{-- <div class="form-group row mb-0">--}}
{{-- <div class="col-md-6 offset-md-4">--}}
{{-- <button type="submit" class="btn btn-primary">--}}
{{-- {{ __('Register') }}--}}
{{-- </button>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </form>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </div>--}}
{{--</div>--}}
{{--@endsection--}}
