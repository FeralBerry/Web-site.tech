@extends('layouts.back.layout')

@section('content')
    <div class="page-wrapper pa-0 ma-0 auth-page">
        <div class="container-fluid">
            <!-- Row -->
            <div class="table-struct full-width full-height">
                <div class="table-cell vertical-align-middle auth-form-wrap">
                    <div class="auth-form  ml-auto mr-auto no-float">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="mb-30">
                                    <h3 class="text-center txt-dark mb-10">Sign in to Doodle</h3>
                                    <h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
                                </div>
                                <div class="form-wrap">
                                    <form  method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" required id="exampleInputEmail_2" name="email" value="{{ old('email') }}" autofocus placeholder="Enter email" autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
                                            @if (Route::has('password.request'))
                                                <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                            <div class="clearfix"></div>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" required id="exampleInputpwd_2" placeholder="Enter pwd" autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-info btn-rounded">sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
