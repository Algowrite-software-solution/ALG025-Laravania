@extends('layout.client-layout')
@section('title', 'Forgot Password Page')

@section('custom_css_js')
    @vite('resources/js/pages/client/forgot-password.js')
@endsection

@section('content')
<!-- Sign In -->
<section class="vh-75 lrv-bg-primary-lightest">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center my-5 py-5">
            <div id="emailSection" class="col-md-7 col-lg-4 col-xl-4 p-4 mb-5">
                <form>
                    <!-- Headlines -->
                    <div class="col-12 d-flex flex-column mb-4">
                        <label class="main-title mt-2 mb-2 text-center lrv-font-cormorant-garamond lrv-fw-semibold lrv-fs-3">Forgot Password?</label>
                        <label class="sub-text text-center mb-3 lrv-font-poppins">Enter the email address you used when you join and we’ll send verification email to reset your password
                        </label>
                    </div>

                    <!-- Email input -->
                    <div class="mb-3" id="forgotPasswordForm">
                        <input type="email" name="email" class="lrv-form-input lrv-rounded-pill px-3" placeholder="Email Address" />
                    </div>

                    <!-- Submit button -->
                    <button type="button" class="col-12 btn btn-dark lrv-bg-dark lrv-text-light lrv-rounded-pill" id="forgotPasswordBtn">Send verification code</button>
                </form>
            </div>

            <div id="verificationSection" class="col-md-7 col-lg-4 col-xl-4 p-4 mb-5 d-none">
                <form>
                    <!-- Headlines -->
                    <div class="col-12 d-flex flex-column mb-4">
                        <label class="main-title mt-2 mb-2 text-center lrv-font-cormorant-garamond lrv-fw-semibold lrv-fs-3">Verification Code</label>
                        <label class="sub-text text-center mb-3 lrv-font-poppins">Enter the verification code that you recieved through your email.
                        </label>
                    </div>

                    <!-- Verification Code input -->
                    <div class="mb-3" id="verificationCodeSection">
                        <input type="text" name="verificationCode" class="lrv-form-input lrv-rounded-pill text-center px-3" placeholder="Verification Code" />
                    </div>

                    <!-- Submit button -->
                    <button type="button" id="verifyBtn" class="col-12 btn btn-dark lrv-bg-dark lrv-text-light lrv-rounded-pill">Verify</button>
                    <div class="col-12 text-center mt-2">
                        <a href="#" class="">Resend code</a>
                    </div>
                </form>
            </div>

            <div id="credentialsSection" class="col-md-7 col-lg-4 col-xl-4 p-4 mb-5 d-none">
                <form>
                    <!-- Headlines -->
                    <div class="col-12 d-flex flex-column mb-4">
                        <label class="main-title mt-2 mb-2 text-center lrv-font-cormorant-garamond lrv-fw-semibold lrv-fs-3">New Credentials</label>
                        <label class="sub-text text-center mb-3 lrv-font-poppins">Enter your new credentials
                        </label>
                    </div>

                    <!-- Password input -->
                    <div class="col-12 d-flex flex-row lrv-border lrv-rounded-pill mb-3">
                        <input type="password" name="newPassword" id="newPassword" class="lrv-form-input border-0" placeholder="New Password" />
                        <span id="showPasswordBtn1" class="input-group-text bg-transparent border-0"><i class="fa-solid fa-eye-slash"></i></span>
                    </div>
                    <div class="col-12 d-flex flex-row lrv-border lrv-rounded-pill mb-3">
                        <input type="password" name="reTypePassword" id="reTypePassword" class="lrv-form-input border-0" placeholder="Re-Type Password" />
                        <span id="showPasswordBtn2" class="input-group-text bg-transparent border-0"><i class="fa-solid fa-eye-slash"></i></span>
                    </div>

                    <!-- Submit button -->
                    <button type="button" id="changePasswordBtn" class="col-12 btn btn-dark lrv-bg-dark lrv-text-light lrv-rounded-pill">Next</button>
                </form>
            </div>

            <div id="congratulationsSection" class="col-md-7 col-lg-4 col-xl-4 p-4 mb-5 d-none">
                <form>
                    <!-- Headlines -->
                    <div class="col-12 d-flex flex-column mb-3">
                        <label class="main-title mt-2 mb-2 text-center lrv-font-cormorant-garamond lrv-fw-semibold lrv-fs-3">Congratulations</label>
                        <label class="sub-text text-center mb-3 lrv-font-poppins">You successfully changed your password.
                        </label>
                    </div>

                    <div class="col-12 text-center lrv-fs-1">
                        <i class="fa-solid fa-circle-check fa-beat"></i>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection