@extends('layout.core-layout')

@section('body')
    <!-- 404 page -->
    <section class="lrv-bg-primary-100">
        <div class="container pnf-s1-container d-flex flex-column align-items-center justify-content-center gap-2">
            <h1 class="lrv-fs-1 lrv-text-dark lrv-ff-primary-bold pnf-s1-h1">500</h1>
            <p class="lrv-text-dark pnf-s1-txt text-center w-75">
                Oops! Something went wrong on our end. 
                We're working to fix it as quickly as possible. In the meantime, 
                feel free to head back to our homepage and explore!
            </p>
            <a class="btn btn-dark lrv-rounded-pill lrv-fs-7 px-sm-1 px-sm-3 px-lg-4 pnf-s1-txt" href="/home">Go Back to Home</a>
            <a href="#" class="lrv-text-dark lrv-fs-7">Find out more</a>
        </div>
    </section>
@endsection
