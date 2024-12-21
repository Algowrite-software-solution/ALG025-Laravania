<!-- Tab Add Product -->
<section>
    <div class="container-fluid d-flex flex-column gap-5">

        <div class="d-flex mt-2 position-relative flex-column lrv-border lrv-border-1 lrv-border-primary lrv-rounded p-4 lrv-bg gap-4">
            <span class="lrv-admin-job-card-panel-div-border-text lrv-text-light">Customer Details</span>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <input type="text" class="form-control lrv-form-input lrv-text-light lrv-admin-job-card-panel-inputs" disabled placeholder="Customer ID">
                </div>
                <div class="offset-0 offset-lg-6 col-12 col-md-6 col-lg-3 lrv-rounded-pill">
                    <div class="input-group lrv-rounded-start-pill lrv-border-0">
                        <span class="input-group-text p-0 m-0 ps-4 pe-1 lrv-rounded-start-pill lrv-border-0">
                          <i class="bi bi-search lrv-text-primary lrv-fs-5"></i>
                        </span>
                        <input type="text" class="lrv-admin-job-card-panel-text-2 form-control lrv-form-input lrv-bg-light lrv-border-0 lrv-text-dark lrv-admin-job-card-panel-inputs" placeholder="Search mobile">
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-text-dark lrv-admin-job-card-panel-inputs" placeholder="First Name">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-text-dark lrv-admin-job-card-panel-inputs" placeholder="Last Name">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-text-dark lrv-admin-job-card-panel-inputs" placeholder="Email (Optional)">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-text-dark lrv-admin-job-card-panel-inputs" placeholder="Mobile">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-lg-6">
                    <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-text-dark lrv-admin-job-card-panel-inputs" placeholder="Address">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-job-card-panel-province-select-div" id="lrv-admin-job-card-panel-province-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-job-card-panel-selects">
                        <option value="0">Province</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 position-relative">
                    <div class="lrv-admin-job-card-panel-plus-div d-none d-lg-block">
                        <a><img class="lrv-admin-job-card-panel-image-plus" src="{{ asset('/storage/images/Admin/job-card-panel/plus-button.svg') }}" alt=""></a>
                    </div>
                    <select name="lrv-admin-job-card-panel-city-select-div" id="lrv-admin-job-card-panel-city-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-job-card-panel-selects">
                        <option value="0">City</option>
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="offset-0 offset-lg-6 col-12 col-md-6 col-lg-3">
                    <button class="lrv-btn lrv-bg-primary lrv-rounded-2">Update</button>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <button class="lrv-btn lrv-bg-primary lrv-rounded-2">Register</button>
                </div>
            </div>
        </div>

        <div class="d-flex position-relative flex-column lrv-border lrv-border-1 lrv-border-primary lrv-rounded p-4 lrv-bg gap-4">
            <span class="lrv-admin-job-card-panel-div-border-text lrv-text-light">Product Details</span>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-job-card-panel-device-select-div" id="lrv-admin-job-card-panel-device-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-job-card-panel-selects">
                        <option value="0">Select Device</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 position-relative">
                    <div class="lrv-admin-job-card-panel-plus-div d-none d-lg-block">
                        <a><img class="lrv-admin-job-card-panel-image-plus" src="{{ asset('/storage/images/Admin/job-card-panel/plus-button.svg') }}" alt=""></a>
                    </div>
                    <select name="lrv-admin-job-card-panel-brand-select-div" id="lrv-admin-job-card-panel-brand-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-job-card-panel-selects">
                        <option value="0">Select Brand</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 position-relative">
                    <div class="lrv-admin-job-card-panel-plus-div d-none d-lg-block">
                        <a><img class="lrv-admin-job-card-panel-image-plus" src="{{ asset('/storage/images/Admin/job-card-panel/plus-button.svg') }}" alt=""></a>
                    </div>
                    <select name="lrv-admin-job-card-panel-model-select-div" id="lrv-admin-job-card-panel-model-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-job-card-panel-selects">
                        <option value="0">Select Model</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-job-card-panel-color-select-div" id="lrv-admin-job-card-panel-color-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-job-card-panel-selects">
                        <option value="0">Select Color</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="d-flex position-relative flex-column lrv-border lrv-border-1 lrv-border-primary lrv-rounded p-4 lrv-bg gap-4">
            <span class="lrv-admin-job-card-panel-div-border-text lrv-text-light">Customer Problem</span>
            <div class="row g-3">
                <div class="col-12 col-md-9">
                    <select name="lrv-admin-job-card-panel-problem-suggestion-select-div" id="lrv-admin-job-card-panel-problem-suggestion-select-div" class="form-control lrv-rounded-pill lrv-admin-job-card-panel-text-2 lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-job-card-panel-selects">
                        <option value="0">Problem Suggestion</option>
                    </select>
                </div>
                <div class="col-12 col-md-3">
                    <button class="lrv-btn lrv-bg-primary lrv-rounded-2">Add Other</button>
                </div>
            </div>
        </div>

        <div class="d-flex position-relative flex-column lrv-border lrv-border-1 lrv-border-primary lrv-rounded p-4 lrv-bg gap-4">
            <span class="lrv-admin-job-card-panel-div-border-text lrv-text-light">Price Details</span>
            <div class="row g-3">
                <div class="col-12 col-lg-6">
                    <p class="text-start lrv-fs-5 lrv-text-primary">Checking Charge</p>
                </div>
                <div class="col-12 col-lg-6">
                    <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-text-dark text-center lrv-admin-job-card-panel-inputs" placeholder="Rs.">
                </div>
                <div class="offset-0 offset-lg-6 col-12 col-md-6 col-lg-3">
                    <button class="lrv-btn lrv-bg-primary lrv-rounded-2">Clear</button>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <button class="lrv-btn lrv-bg-primary lrv-rounded-2">Save & Print</button>
                </div>
            </div>
        </div>

        <div class="d-flex mb-3 position-relative flex-column lrv-border lrv-border-1 lrv-border-primary lrv-rounded p-4 lrv-bg gap-4">
            <span class="lrv-admin-job-card-panel-div-border-text lrv-text-light">Jobs Card Table</span>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-job-card-panel-pending-select-div" id="lrv-admin-job-card-panel-pending-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg lrv-border lrv-border-primary lrv-border-2 lrv-text-light lrv-admin-job-card-panel-selects">
                        <option value="0">Pending</option>
                    </select>
                </div>
                <div class="offset-0 offset-lg-6 col-12 col-md-6 col-lg-3">
                    <div class="input-group lrv-rounded-pill lrv-border bg-transparent lrv-border-primary lrv-border-2">
                        <span class="input-group-text bg-transparent lrv-border-0 p-0 m-0 ps-4 pe-1">
                          <i class="bi bi-search lrv-text-primary lrv-fs-5"></i>
                        </span>
                        <input type="text" class="bg-transparent lrv-admin-job-card-panel-text-2 form-control lrv-form-input lrv-border-0 lrv-text-primary lrv-admin-job-card-panel-inputs" placeholder="Search Job ID">
                    </div>
                </div>
                <div class="col-12">
                    <table class="w-100 lrv-bg-dark lrv-rounded-2" id="jobs-card-table">
                      <thead>
                        <tr>
                          <th data-column="jobID">Job ID</th>
                          <th data-column="model">Model</th>
                          <th data-column="color">Color</th>
                          <th data-column="mobile">Mobile</th>
                          <th data-column="checkingFree">Checking Free</th>
                          <th data-column>Status</th>
                          <th data-column>Action</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
            </div>
        </div>
    </div>
</section>