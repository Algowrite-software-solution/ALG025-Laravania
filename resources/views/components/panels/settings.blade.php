<!-- settings admin panel -->
<section class="p-4">
    <div class="container d-flex flex-column justify-content-center align-items-center gap-4">
        <h1 class=" w-100 text-start">Settings</h1>
        <div class="container lrv-shadow-s lrv-bg-primary-100 lrv-rounded-2 py-2">
            <div class="row d-flex justify-content-center align-items-center p-3">
                <div class="col-12 d-flex flex-row align-items-center justify-content-start px-3 px-md-5 py-lg-3 py-md-0 py-2 gap-2">
                    <label class="lrv-fs-5 mt-0"><i class="bi bi-person-fill"></i></label>
                    <h4 class="lrv-font-poppins lrv-text-dark lrv-fs-6 mb-0">Manage Profile</h4>
                </div>
                <div class="col-12 ">
                    <div class="row d-flex justify-content-center align-items-center p-1 p-md-4 p-lg-4">
                        <div class="col-12 col-md-6 px-3">
                            <div class="lrv-form-floating my-2 my-md-3 ">
                                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="fname" placeholder="First Name">
                                <label for="fname" class="lrv-font-poppins">First Name</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 px-3">
                            <div class="lrv-form-floating my-2 my-md-3 ">
                                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="lname" placeholder="Last Name">
                                <label for="lname" class="lrv-font-poppins">Last Name</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 px-3">
                            <div class="lrv-form-floating my-2 my-md-3">
                                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="mobile1" placeholder="Mobile-1">
                                <label for="mobile1" class="lrv-font-poppins">Mobile-1</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 px-3">
                            <div class="lrv-form-floating my-2 my-md-3">
                                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="mobile2" placeholder="Mobile-2">
                                <label for="mobile2" class="lrv-font-poppins">Mobile-2</label>
                            </div>
                        </div>
                        <div class="col-12 px-3">
                            <div class="lrv-form-floating my-2 my-md-3">
                                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="email" placeholder="e-Mail">
                                <label for="email" class="lrv-font-poppins">e-Mail</label>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-lg-end justify-content-center gap-2 py-3">
                            <button class="col-lg-2 col-md-3 col-4 lrv-btn lrv-btn-primary-outline lrv-font-poppins">Cancel</button>
                            <button class="col-lg-2 col-md-3 col-4 lrv-btn lrv-btn-primary lrv-font-poppins">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container lrv-shadow-s lrv-bg-primary-100 lrv-rounded-2 py-2">
            <div class="row d-flex justify-content-center align-items-center p-3">
                <div class="col-12 d-flex flex-row align-items-center justify-content-start px-3 px-md-5 py-lg-3 py-md-0 py-2 gap-2">
                    <label class="lrv-fs-5 mt-0"><i class="bi bi-lock-fill"></i></label>
                    <h4 class="lrv-font-poppins lrv-text-dark lrv-fs-6 mb-0">Manage Password</h4>
                </div>
                <div class="col-12 ">
                    <div class="row d-flex justify-content-center align-items-center p-1 p-md-4 p-lg-4">
                        <div class="col-12 px-3">
                            <div class="lrv-form-floating my-2 my-md-3">
                                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="cpw" placeholder="Current Password">
                                <label for="cpw" class="lrv-font-poppins">Current Password</label>
                            </div>
                        </div>
                        <div class="col-12 px-3">
                            <div class="lrv-form-floating my-2 my-md-3">
                                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="npw" placeholder="New Password">
                                <label for="npw" class="lrv-font-poppins">New Password</label>
                            </div>
                        </div>
                        <div class="col-12 px-3">
                            <div class="lrv-form-floating my-2 my-md-3">
                                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="rpw" placeholder="Re-type Password">
                                <label for="rpw" class="lrv-font-poppins">Re-type Password</label>
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-lg-end justify-content-center gap-2 py-3">
                            <button class="col-lg-2 col-md-3 col-4 lrv-btn lrv-btn-primary-outline lrv-font-poppins">Cancel</button>
                            <button class="col-lg-2 col-md-3 col-4 lrv-btn lrv-btn-primary lrv-font-poppins">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container col-12">
            <div class="row d-flex justify-content-center align-items-center gap-4">
                <div class="col-12 lrv-bg-primary-100 d-flex flex-row align-items-center justify-content-start px-5 py-4 gap-4 lrv-shadow-s lrv-rounded-2">
                    <label class="lrv-fs-5 mt-0" for="hs-text"><i class="bi bi-question-circle-fill lrv-text-dark"></i></label>
                    <a href="#" id="hs-text"><h4 class="lrv-text-dark lrv-fs-6 mb-0">Help Center</h4></a>
                </div>

                <div class="col-12 lrv-bg-primary-100 d-flex flex-row align-items-center justify-content-start px-5 py-4 gap-4 lrv-shadow-s lrv-rounded-2">
                    <label class="lrv-fs-5 mt-0" for="lo-text"><i class="bi bi-box-arrow-right lrv-text-red-500"></i></label>
                    <a href="#" id="lo-text"><h4 class="lrv-text-red-500 lrv-fs-6 mb-0" >Log Out</h4></a>
                </div>
            </div>
        </div>
    </div>
</section>