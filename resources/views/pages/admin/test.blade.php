<div class="row bg-white h-100">
    <!-- header -->
    <nav class="navbar header fixed-top lrv-bg-main-bg bg-danger">
        <div class="container-fluid d-none">
            <a class="navbar-brand d-block d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                aria-controls="staticBackdrop"><i class="fa-solid fa-align-justify lrv-fs-6"></i></a>
            <div class="d-flex gap-3 p-2 lrv-logo-box" >
                <div class="logo-div d-flex lrv-bg-primary-100 lrv-rounded-2 flex-row align-content-center justify-content-center ">
                    <h1 class="lrv-text-dark logo-img lrv-fw-medium"></h1>
                </div>
                <div class=" d-flex align-items-center">
                   <h1>hello</h1>
                </div>
            </div>
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
                <img src="{{ asset('resources/images/admin/user_img.png.png') }}" alt="admin user image"
                    class="admin-image lrv-rounded-circle  p-1 ">
                <div class="d-flex flex-column lrv-nav-drop-box py-1  d-flex justify-content-center align-items-center lrv-rounded-1">
                    <i class="fa-solid fa-chevron-down" style="color: #ffffff;"></i>
                </div>
            </div>
        </div>
        <hr style="border-color: white;">
    </nav>

    <!-- sidebar -->
    <div class="sidebar col-2 d-none d-xl-block lrv-rounded-3 lrv-shadow-l bg-primary"
        id="desktopSidePanelContainer">
        <div class="d-none nav flex-column nav-pills p-0" role="tablist" aria-orientation="vertical"
            id="adminPanelSideBar">
            <div class=" p-0 mt-5 d-flex flex-column gap-2">
                <button data-adminPanel="dashboard" data-admin-panel-switch="dashboard"
                    class="nav-link lrv-text-light lrv-fs-7 lrv-fw-normal text-start"><i
                        class='fa fa-tachometer-alt'></i> <span class="ps-3">Dashboard</span></button>
                
                <button data-admin-panel-switch="orders" data-adminPanel="orders"
                    class="nav-link lrv-text-light lrv-fs-7 lrv-fw-normal text-start"><i class="fa-solid fa-briefcase" style="color: #ffffff;"></i>
                    <span class="ps-3">Job Cards</span></button>
                
                <button data-admin-panel-switch="manage-ui" data-adminPanel="manage-ui"
                    class="nav-link lrv-text-light lrv-fs-7 lrv-fw-normal text-start"><i class="fa-regular fa-file-lines" style="color: #ffffff;"></i> <span class="ps-3">Bills</span></button>
                <button data-admin-panel-switch="users" data-adminPanel="users"
                    class="nav-link lrv-text-light lrv-fs-7 lrv-fw-normal text-start"><i class="fa-solid fa-user-group" style="color: #ffffff;"></i> <span class="ps-3">Suppliers</span></button>
                <button data-admin-panel-switch="staff" data-adminPanel="staff"
                    class="nav-link lrv-text-light lrv-fs-7 lrv-fw-normal text-start"><i class="fa-solid fa-users" style="color: #ffffff;"></i> <span class="ps-3">Employees</span></button>
                <button data-admin-panel-switch="seo" data-adminPanel="seo"
                    class="nav-link lrv-text-light lrv-fs-7 lrv-fw-normal text-start"><i class="fa-regular fa-folder" style="color: #ffffff;"></i> <span class="ps-3">Inventory</span></button>
            </div>
            <div class="bottom-sidebar d-flex  w-100 justify-content-center align-items-end d-grid p-0 pb-1 gap-2">
                <div class="lrv-alg-logo"></div>
                {{-- <button data-admin-panel-switch="settings" data-adminPanel="settings"
                    class="lrv-btn lrv-text-dark lrv-fs-7 lrv-fw-normal text-start"><i
                        class="fa-solid fa-gear"></i><span class="ps-3">Setting</span></button>
                <button class="lrv-btn lrv-text-dark lrv-fs-7 lrv-fw-normal text-start" role="button"
                    data-bs-toggle="modal" data-bs-target="#logoutModal"><i
                        class="fa-solid fa-right-from-bracket"></i><span class="ps-3">Log
                        out</span></button>
                <button data-admin-panel-switch="test" data-adminPanel="test"
                    class="nav-link lrv-text-dark lrv-fs-7 lrv-fw-normal text-start"><i
                        class='fa fa-truck'></i>
                    <span class="ps-3">Test</span></button> --}}
            </div>
        </div>
    </div>
    
    {{-- <div class="col-12 col-xl-10 offset-xl-2 p-0 mt-5 pt-5 lrv-bg-main-BG">
        <!-- content -->
        <div class="tab-content p-3" id="adminPanelMainContainer">

        </div>
        <!-- content -->
    </div> --}}
    <div class="col-12 col-xl-10 offset-xl-2 p-0 mt-5 pt-5 bg-secondary flex-grow-1">
        
        <!-- Content -->
        <div class="tab-content p-3 d-none" id="adminPanelMainContainer">
            <!-- Your content goes here -->
            <div class="blue-circle big-circle text-white">sddd</div>
            <div class="blue-circle small-circle text-white">sss</div>
        </div>
        <!-- Content -->
    </div>
    

    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start d-none" data-bs-backdrop="offcanvas" tabindex="-1" id="staticBackdrop"
        aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header justify-content-end pt-4">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"
                id="sideBarCloseBtn"></button>
        </div>
        <div class="offcanvas-body sidebar-sm p-0" id="mobileSidePanelContainer">
            <!-- side panel will load here -->

        </div>
    </div>

    <!-- logout modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content lrv-bg-primary-100">
                <div class="modal-header border border-0 d-flex justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column justify-content-center align-items-center px-5">
                    <div class="d-flex flex-row w-100 justify-content-center align-items-center">
                        <p class=" lrv-fs-6">Do you want to <span class=" lrv-fw-bold">Log Out</span> ?</p>
                    </div>
                    <div class="d-flex flex-row w-100 p-3 justify-content-between">
                        <button class="lrv-btn-primary lrv-bg-red-600 col-5 lrv-rounded-pill"
                            onclick="adminLogOut();">Log Out</button>
                        <button class="lrv-btn-primary col-5 lrv-rounded-pill"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>