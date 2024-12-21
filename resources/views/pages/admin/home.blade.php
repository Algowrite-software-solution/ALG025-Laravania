@extends('layout.admin-layout')
@section('title', 'Admin Home Page')

@isCustomPage(true)

@section('custom_css_js')
    @vite('resources/css/admin_panel.css')
    @vite('resources/js/pages/admin/admin_panel.js')
@endsection



{{-- admin main container ID - adminPanelMainContainer --}}
@section('content')
    <section class="vh-100 bg-dark">
        <div class="container-fluid h-100 d-flex p-0 p-lg-1">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-8 px-2 py-3 h-100 pt-1  flex-column admin-sidebar"
                id="adminSidebar">

                <div class="d-flex justify-content-end d-lg-none ">
                    <i class="fa-regular fa-rectangle-xmark lrv-text-light lrv-admin-close fa-lg" onclick="sidebar(false)"></i>
                </div>

                <div class="rounded-3 shadow-sm">
                    <div class="d-flex justify-content-center gap-3 py-2 pt-0 mt-0 lrv-logo-box">
                        <div
                            class="lrv-admin-logo-container d-flex lrv-bg-primary-100 lrv-rounded-2 flex-row align-content-center justify-content-center">
                            <div class="logo-img"></div>
                        </div>
                    </div>
                </div>
                <div
                    class="lrv-bg p-3 flex-grow-1 d-flex flex-column justify-content-between align-content-center align-items-center rounded-4">
                    <div class=" p-0 mt-5 d-flex flex-column gap-3">
                        <button data-adminPanel="dashboard" data-admin-panel-switch="dashboard"
                            class="nav-link d-flex lrv-text-light lrv-fs-6 lrv-fw-normal text-start">
                            <div class="lrv-admin-dashboard">
                            </div><span class="ps-3">Dashboard</span>
                        </button>

                        <button data-admin-panel-switch="orders" data-adminPanel="orders"
                            class="nav-link d-flex lrv-text-light lrv-fs-6 lrv-fw-normal text-start">
                            <div class="lrv-admin-job"></div>
                            <span class="ps-3">Job Cards</span>
                        </button>

                        <button data-admin-panel-switch="manage-ui" data-adminPanel="manage-ui"
                            class="nav-link d-flex lrv-text-light lrv-fs-6 lrv-fw-normal text-start">
                            <div class="lrv-admin-bills"></div> <span class="ps-3 lrv-admin-sidebar-bills">Bills</span>
                        </button>

                        <button data-admin-panel-switch="users" data-adminPanel="users"
                            class="nav-link d-flex lrv-text-light lrv-fs-6 lrv-fw-normal text-start">
                            <div class="lrv-admin-suppliers"></div> <span class="ps-3">Suppliers</span>
                        </button>

                        <button data-admin-panel-switch="staff" data-adminPanel="staff"
                            class="nav-link d-flex lrv-text-light lrv-fs-6 lrv-fw-normal text-start">
                            <div class="lrv-admin-employee"></div><span class="ps-3">Employees</span>
                        </button>

                        <button data-admin-panel-switch="seo" data-adminPanel="seo"
                            class="nav-link d-flex lrv-text-light lrv-fs-6 lrv-fw-normal text-start">
                            <div class="lrv-admin-inventory"></div> <span class="ps-3">Inventory</span>
                        </button>
                    </div>
                    <div class="lrv-alg-logo "></div>
                </div>
            </div>
            <div class="col-xl-10 col-lg-9 col-12 d-flex flex-column">
                <div class="lrv-admin-header">
                    <div class="d-flex justify-content-between align-items-center pt-3 px-3">
                        <a class="navbar-brand d-block d-lg-none"><i class="fa-solid fa-align-justify lrv-text-primary lrv-fs-6"
                                onclick="sidebar(true)"></i></a>

                        <div class="lrv-text-light lrv-admin-topic">Dashboard</div>

                        <div class="d-flex align-items-center">
                            <div class="notification-container">
                                <button id="notification-button"
                                    class="lrv-btn lrv-btn-unstyled lrv-text-light notification-button"><i
                                        class="fa-solid fa-bell notification-button"></i></button>
                                <div id="notification-dropdown" class="notification-dropdown">
                                    <ul id="notification-list">
                                        <li class="d-inline-flex w-100 align-items-center">
                                            <div class="col-2 text-center">
                                                <img src="{{ asset('/storage/images/admin/user_img.png') }}" alt=""
                                                    class="notification-img">
                                            </div>
                                            <div class="col-9">
                                                <span class="lrv-fs-7">sdfslkdnfas sdlkf jalkdsfj lsdj fla</span><br>
                                                <div class="d-inline-block">
                                                    <span class="lrv-fs-8 lrv-bg-secondary-200 lrv-rounded-1 px-2">New
                                                        Order</span>
                                                    <span class="lrv-fs-8">2024/05/06 20:45:12</span>
                                                </div>
                                            </div>
                                            <div class="col-1 text-center">
                                                <button class="lrv-btn lrv-btn-unstyled lrv-text-red-600 ">
                                                    <i class="fa-solid text-light fa-trash"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <img src="{{ asset('resources/images/admin/user_img.png') }}" alt="admin user image"
                                class="admin-image lrv-rounded-circle  p-1 ">
                            <div
                                class="d-flex flex-column lrv-nav-drop-box py-1  d-flex justify-content-center align-items-center lrv-rounded-1">
                                <i class="fa-solid fa-chevron-down" style="color: #ffffff;"></i>
                            </div>
                        </div>
                    </div>
                    <hr class="text-white">
                </div>
                {{-- content --}}
                <div class="lrv-admin-container p-3">
                    <div class="overflow-auto h-100" id="adminPanelMainContainer">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
