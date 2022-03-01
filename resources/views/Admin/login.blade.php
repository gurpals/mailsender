@extends('layouts.admin.login_layout')
@section('content')
 <!-- BEGIN: Content-->
 <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <img src="admin/css/images/logo/stack-logo-dark.png" alt="branding logo" style="background: linear-gradient(rgb(255 255 255 / 50%), rgb(0 0 0 / 50%));">
                                    </div>

                                </div>
                                <div class="card-content">
                                @if(session('error'))
                                <div class="alert alert-danger">{{session('error')}}</div>
                                  @endif
                                    <div class="card-body">
                                        <form method="POST" action="{{ url('ad-login') }}" class="form-horizontal"  novalidate>
                                            @csrf

                                                <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" name="email" id="user-name" placeholder="Enter Your Email" required>
                                                <div class="form-control-position">
                                                    <i class="feather icon-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" name="password" id="user-password" placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="fa fa-key"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">

                                                </div>
                                                {{-- <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                                            </div>  --}}
                                            <button type="submit" class="btn btn-outline-primary btn-block"><i class="feather icon-unlock"></i> Login</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    @endsection
