@extends('layout.client-layout')
@section('title', "Daham's Page")

@section('external_css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@section('external_js')
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection

@section('custom_css_js')
    @vite('resources/css/daham.css')
    @vite('resources/js/pages/client/daham.js')
@endsection

@isCustomPage(true);



@section('content')


    @include('pages.client.daham.daham-arm')

    <!-- s1 - Hero Section -->
    <section class="hp-s1 py-5 d-flex bg-dark">
        <div class="container p-0 flex-grow-1 d-flex align-items-center justify-content-center">
            <h1 class="text-center lrv-text-primary-100">Daham Home Page 🏠</h1>
        </div>
    </section>

    @include('pages.client.daham.daham-leg')

@endsection
