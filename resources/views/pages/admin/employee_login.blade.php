@extends('layout.admin-layout')
@section('title', 'Hasthi Restaurant | Admin | Log In')
@isCustomPage(true)


@section('custom_css_js')
    @vite('resources/css/admin_login.css')
    @vite('resources/js/pages/admin/admin_login.js')
@endsection


@section('content')
    <!-- Admin Sign In -->
    <section class=" lrv-admin-login-section">
        <div class="lrv-admin-login-container  d-flex justify-content-center align-items-center">
            <!-- sign-in container -->
            <div class=" lrv-admin-login  lrv-rounded-3 form-inline">
                {{-- logo placement --}}
                <div class="lrv-admin-login-logo"></div>
                <div class="lrv-fs-5 text-center lrv-text-light lrv-fw-bold">Employee Sign In</div>
                <div class=" text-center lrv-fs-7 lrv-text-light py-1">Login in to your employee account</div>
                <div class=" d-flex justify-content-center py-4">
                    <div class="input-group lrv-admin-login-input mb-2 mr-sm-2">
                        <div class="input-group-prepend lrv-admin-login-label ">
                            <div class="lrv-admin-login-email lrv-admin-login-label"></div>
                        </div>
                        <input type="email" class="form-control lrv-admin-login-input-field"
                            id="inlineFormInputGroupUsername2" placeholder="example@gmail.com">
                    </div>
                </div>
                <div class=" d-flex justify-content-center lrv-admin-login-label-first">
                    <div class="input-group lrv-admin-login-input mb-2 mr-sm-2">
                        <div class="input-group-prepend lrv-admin-login-label ">
                            <div class="lrv-admin-login-pass lrv-admin-login-label"></div>
                        </div>
                        <input type="password" class="form-control lrv-admin-login-input-field"
                            id="inlineFormInputGroupUsername2" placeholder="password">
                    </div>
                </div>
                <div class="d-flex justify-content-center py-2 ">
                    <div class="form-check mb-2 mr-sm-2 lrv-admin-login-input-tick">
                        <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                        <label class="form-check-label lrv-text-light lrv-fs-8" for="inlineFormCheck">
                            Remember me
                        </label>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="button" id="adminLoginBtn"
                    class="col-6 lrv-login-btn lrv-rounded-2  lrv-text-light border-0 d-flex justify-content-center align-items-center ">Login
                        In</button>
                </div>
            </div>
        </div>
    </section>


    <!-- Admin Sign In -->
@endsection
