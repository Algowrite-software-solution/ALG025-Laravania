<!-- Tab Add Product -->
<section>
    <div class="container-fluid d-flex flex-column gap-5">

        <div class="d-flex mt-4 mt-lg-2 position-relative flex-column lrv-border lrv-border-1 lrv-border-primary lrv-rounded p-4 lrv-bg gap-4">
            <span class="lrv-admin-billing-issuing-panel-div-border-text lrv-text-light">Customer Details</span>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <input type="text" class="form-control lrv-form-input lrv-text-light lrv-admin-billing-issuing-panel-inputs" disabled placeholder="Customer ID">
                </div>
                <div class="offset-0 offset-lg-6 col-12 col-md-6 col-lg-3 lrv-rounded-pill">
                    <div class="input-group lrv-rounded-start-pill lrv-border-0">
                        <span class="input-group-text p-0 m-0 ps-4 pe-1 lrv-rounded-start-pill lrv-border-0">
                          <i class="bi bi-search lrv-text-primary lrv-fs-5"></i>
                        </span>
                        <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-border-0 lrv-text-dark lrv-admin-billing-issuing-panel-inputs" placeholder="Search mobile">
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-inputs" placeholder="First Name">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-inputs" placeholder="Last Name">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-inputs" placeholder="Email (Optional)">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-inputs" placeholder="Mobile">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-lg-6">
                    <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-inputs lrv-admin-billing-issuing-panel-inputs-special-1" placeholder="Address">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-billing-issuing-panel-province-select-div" id="lrv-admin-billing-issuing-panel-province-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-selects">
                        <option value="0">Province</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-billing-issuing-panel-city-select-div" id="lrv-admin-billing-issuing-panel-city-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-selects">
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
            <span class="lrv-admin-billing-issuing-panel-div-border-text lrv-text-light">Product Details</span>
            <div class="row g-3">
                <div class="offset-0 offset-md-6 offset-lg-9 col-12 col-md-6 col-lg-3 lrv-rounded-pill">
                    <div class="input-group lrv-rounded-start-pill lrv-border-0">
                        <span class="input-group-text p-0 m-0 ps-4 pe-1 lrv-rounded-start-pill lrv-border-0">
                          <i class="bi bi-search lrv-text-primary lrv-fs-5"></i>
                        </span>
                        <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-border-0 lrv-text-dark lrv-admin-billing-issuing-panel-inputs" placeholder="Search Stock - ID">
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-billing-issuing-panel-category-select-div" id="lrv-admin-billing-issuing-panel-category-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-selects">
                        <option value="0">Category</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-billing-issuing-panel-brand-select-div" id="lrv-admin-billing-issuing-panel-brand-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-selects">
                        <option value="0">Brand</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-billing-issuing-panel-component-select-div" id="lrv-admin-billing-issuing-panel-component-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-selects">
                        <option value="0">Component</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-billing-issuing-panel-capacity-select-div" id="lrv-admin-billing-issuing-panel-capacity-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-selects">
                        <option value="0">Capacity</option>
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-billing-issuing-panel-product-select-div" id="lrv-admin-billing-issuing-panel-product-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-selects">
                        <option value="0">Product</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-billing-issuing-panel-supplier-select-div" id="lrv-admin-billing-issuing-panel-supplier-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-selects">
                        <option value="0">Supplier</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-billing-issuing-panel-condition-select-div" id="lrv-admin-billing-issuing-panel-condition-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-selects">
                        <option value="0">Condition</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-billing-issuing-panel-warranty-select-div" id="lrv-admin-billing-issuing-panel-warranty-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-billing-issuing-panel-selects">
                        <option value="0">Warranty</option>
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12">
                    <table class="w-100 lrv-bg-dark lrv-rounded-2" id="billing-issuing-panel-job-details-table">
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

        <div class="d-flex position-relative flex-column lrv-border lrv-border-1 lrv-border-primary lrv-rounded p-2 lrv-bg gap-4">
            <span class="lrv-admin-billing-issuing-panel-div-border-text lrv-text-light">Invoice Details</span>
            <div class="row g-3 p-3">
                <div class="col-12">
                    <table class="w-100 lrv-bg-dark lrv-rounded-2" id="billing-issuing-panel-invoice-details-table">
                      <thead>
                        <tr>
                          <th data-column="jobID">Job Card ID</th>
                          <th data-column="model">Model</th>
                          <th data-column="color">Color</th>
                        </tr>
                      </thead>
                    </table>
                </div>
            </div>
            <hr class="lrv-admin-billing-issuing-panel-border-2 lrv-border-2 d-block d-md-none"/>
            <div class="row g-3 p-1">
                <div class="col-12 d-none d-md-block">
                    <div class="flex-row row">
                        <p class="col-6 lrv-bg-light pt-1 pb-1 lrv-fs-6 text-center lrv-text-primary">Description</p>    
                        <p class="col-2 lrv-bg-light pt-1 pb-1 lrv-fs-6 text-center lrv-text-primary">Rate</p>  
                        <p class="col-2 lrv-bg-light pt-1 pb-1 lrv-fs-6 text-center lrv-text-primary">QTY</p>  
                        <p class="col-2 lrv-bg-light pt-1 pb-1 lrv-fs-6 text-center lrv-text-primary">Amount</p>
                    </div> 
                </div>
                <div class="col-12 row d-md-none"> 
                    <div class="col-12 row"> 
                        <div class="col-1 lrv-bg-light d-flex justify-content-center align-items-center">
                            <p class="lrv-admin-billing-issuing-panel-text-1 pt-1 pb-1 lrv-fs-6 text-center lrv-text-primary">Amount</p>
                        </div>
                        <div class="col-10 d-flex justify-content-between align-items-center">
                            <p class="lrv-admin-billing-issuing-panel-amout-p text-start">Rs. 1500.00</p>
                            <div class="pb-1">
                                <a><img class="lrv-admin-billing-issuing-panel-image-1" src="{{ asset('/storage/images/Admin/delete-red-button.svg') }}" alt=""></a>
                            </div>
                        </div> 
                    </div> 
                    <div class="col-12 row"> 
                        <div class="col-1 lrv-bg-light d-flex justify-content-center align-items-center">
                            <p class="lrv-admin-billing-issuing-panel-text-1 pt-1 pb-1 lrv-fs-6 text-center lrv-text-primary">QTY</p>  
                        </div>
                        <div class="col-10">
                            <div class="d-flex flex-row bg-transparent lrv-border lrv-border-primary lrv-border-2 lrv-rounded-pill">
                                <input type="number" class="lrv-admin-billing-issuing-panel-qty-input form-control lrv-border-0 lrv-form-input bg-transparent lrv-text-light lrv-admin-billing-issuing-panel-inputs lrv-admin-billing-issuing-panel-inputs-special-2" value="1">
                                <div class="bg-danger position-relative">
                                    <a class="lrv-text-light position-absolute lrv-admin-billing-issuing-panel-qty-up-input"><i class="fa-solid fa-chevron-up lrv-fs-8 p-0 m-0"></i></a>
                                    <a class="lrv-text-light position-absolute lrv-admin-billing-issuing-panel-qty-down-input"><i class="fa-solid fa-chevron-down lrv-fs-8 p-0 m-0"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 row"> 
                        <div class="col-1 lrv-bg-light d-flex justify-content-center align-items-center">
                            <p class="lrv-admin-billing-issuing-panel-text-1 pt-1 pb-1 lrv-fs-6 text-center lrv-text-primary">Rate</p>  
                        </div>
                        <div class="col-10">
                            <input type="text" class="lrv-admin-billing-issuing-panel-rate-input form-control lrv-form-input bg-transparent lrv-text-light lrv-border-primary lrv-border-2 lrv-admin-billing-issuing-panel-inputs lrv-admin-billing-issuing-panel-inputs-special-2" value="1500.00">
                        </div> 
                    </div>
                    <div class="col-12 row"> 
                        <div class="col-1 lrv-bg-light d-flex justify-content-center align-items-center">
                            <p class="lrv-admin-billing-issuing-panel-text-1 pt-1 pb-1 lrv-fs-6 text-center lrv-text-primary">Description</p>    
                        </div>
                        <div class="col-10">
                            <div class="">
                                <input type="text" class="mb-3 form-control lrv-admin-billing-issuing-panel-text-2 lrv-form-input bg-transparent lrv-text-light lrv-border-primary lrv-border-2 lrv-admin-billing-issuing-panel-inputs lrv-admin-billing-issuing-panel-inputs-special-2" placeholder="Checking fee">
                                <textarea type="text" class="form-control lrv-admin-billing-issuing-panel-text-2 lrv-form-input bg-transparent lrv-rounded-3 lrv-text-light lrv-border-primary lrv-border-2 lrv-admin-billing-issuing-panel-inputs lrv-admin-billing-issuing-panel-inputs-special-2 lrv-admin-billing-issuing-panel-textarea" placeholder="Description goes here"></textarea>
                            </div>
                        </div> 
                    </div>    
                </div>
                <div class="col-12 d-none d-md-block">
                    <div class="flex-row row">
                        <div class="col-6 d-flex flex-row">
                            <div class="col-1">
                                <a><img class="lrv-admin-billing-issuing-panel-image-1" src="{{ asset('/storage/images/Admin/delete-red-button.svg') }}" alt=""></a>
                            </div>
                            <div class="col-11">
                                <input type="text" class="mb-3 form-control lrv-form-input bg-transparent lrv-text-light lrv-border-primary lrv-border-2 lrv-admin-billing-issuing-panel-inputs lrv-admin-billing-issuing-panel-inputs-special-2" placeholder="Checking fee">
                                <textarea type="text" class="form-control lrv-form-input bg-transparent lrv-rounded-3 lrv-text-light lrv-border-primary lrv-border-2 lrv-admin-billing-issuing-panel-inputs lrv-admin-billing-issuing-panel-inputs-special-2 lrv-admin-billing-issuing-panel-textarea" placeholder="Description goes here"></textarea>
                            </div>
                        </div>    
                        <div class="col-2">
                            <input type="text" class="lrv-admin-billing-issuing-panel-rate-input form-control lrv-form-input bg-transparent lrv-text-light lrv-border-primary lrv-border-2 lrv-admin-billing-issuing-panel-inputs lrv-admin-billing-issuing-panel-inputs-special-2" value="1500.00">
                        </div>  
                        <div class="col-2">
                            <div class="d-flex flex-row bg-transparent lrv-border lrv-border-primary lrv-border-2 lrv-rounded-pill">
                                <input type="number" class="lrv-admin-billing-issuing-panel-qty-input form-control lrv-border-0 lrv-form-input bg-transparent lrv-text-light lrv-admin-billing-issuing-panel-inputs lrv-admin-billing-issuing-panel-inputs-special-2" value="1">
                                <div class="bg-danger position-relative">
                                    <a class="lrv-text-light position-absolute lrv-admin-billing-issuing-panel-qty-up-input"><i class="fa-solid fa-chevron-up lrv-fs-8 p-0 m-0"></i></a>
                                    <a class="lrv-text-light position-absolute lrv-admin-billing-issuing-panel-qty-down-input"><i class="fa-solid fa-chevron-down lrv-fs-8 p-0 m-0"></i></a>
                                </div>
                            </div>
                        </div>  
                        <div class="col-2">
                            <p class="lrv-admin-billing-issuing-panel-amout-p text-center">Rs. 1500.00</p>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="row p-1 d-flex justify-content-center align-items-center">
                <div class="col-12 d-flex justify-content-md-start justify-content-end align-items-center lrv-admin-billing-issuing-panel-border-1 lrv-border-3 p-3">    
                    <a><img class="lrv-admin-billing-issuing-panel-image-1" src="{{ asset('/storage/images/Admin/plus-button.svg') }}" alt=""></a>
                </div>
            </div>
            <div class="row g-3 p-4">
                <div class="col-12 col-md-5">
                    <p class="lrv-text-light">Discount :</p>
                    <input type="text" class="form-control lrv-form-input bg-transparent lrv-text-light lrv-border-primary lrv-border-2 lrv-admin-billing-issuing-panel-inputs lrv-admin-billing-issuing-panel-inputs-special-1 lrv-admin-billing-issuing-panel-inputs-special-2" value="10%">
                </div>
                <div class="offset-0 offset-md-2 col-12 col-md-5 p-2">
                    <div class="row lrv-admin-billing-issuing-panel-text-2 lrv-rounded-2 lrv-text-light p-2 pt-3 pb-3 lrv-border lrv-border-primary lrv-border-2">
                        <div class="col-7">
                            <span>Sub total</span>
                        </div>
                        <div class="col-5">
                            <span>Rs.1500.00</span>
                        </div>
                        <div class="col-7">
                            <span>Discount</span>
                        </div>
                        <div class="col-5">
                            <span>Rs. 0 .00</span>
                        </div>
                        <div class="col-7">
                            <span>Total</span>
                        </div>
                        <div class="col-5">
                            <span>Rs. 1500 .00</span>
                        </div>
                        <div class="col-7 pt-1 lrv-admin-billing-issuing-panel-span-color-1">
                            <span class="">Balance Due</span>
                        </div>
                        <div class="col-5 pt-1 lrv-admin-billing-issuing-panel-span-color-1">
                            <span>Rs. 1500 .00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 p-4">
                <div class="col-12">
                    <p class="lrv-text-light">Notes :</p>
                    <textarea type="text" class="p-3 h-100 lrv-admin-billing-issuing-panel-text-2 form-control lrv-form-input bg-transparent lrv-text-light lrv-border-primary lrv-border-2 lrv-rounded-2 lrv-admin-billing-issuing-panel-textarea-2" placeholder="Notes - any relevant information additional terms and condition"></textarea>
                </div>
            </div>
            <div class="row g-3 p-4">
                <div class="offset-1 offset-md-6 col-10 col-md-3">
                    <button class="lrv-btn lrv-btn-primary lrv-rounded-2">Save Draft</button>
                </div>
                <div class="offset-1 offset-md-0 col-10 col-md-3">
                    <button class="lrv-btn lrv-btn-primary lrv-rounded-2">Print & Close</button>
                </div>
            </div>
        </div>
    </div>
</section>