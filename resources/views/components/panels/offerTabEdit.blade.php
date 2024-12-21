<!-- Tab Add Product -->
<section>
  <div class="row justify-content-center mx-0 pb-5">
    <div class="col-12">
      <h1 class="lrv-fs-4 lrv-text-dark">Offers</h1>
      <div class="">
        <nav style="--bs-breadcrumb-divider: '&#x2022;';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item lrv-text-dark"><a onclick="dashboardBCTOP();">Admin</a></li>
            <li class="breadcrumb-item lrv-text-dark">Offers</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-12 flex-row">
      <div class="row mx-0">
        <div class="col-12 pe-lg-5">
          <div class="row justify-content-center">
            <div class="col-12 d-flex flex-column lrv-bg-primary-100 lrv-shadow-l lrv-rounded p-4">
              <h4 class="lrv-text-dark lrv-fs-7 mb-0">Search Product</h4>
              <label class="lrv-fs-8 mt-0">Lorem ipsum dolor sit.</label>
              <div class="lrv-form-floating my-3" id="searchProductNameOfferTabContainer">
                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" name="searchProductNameOfferTab" id="searchProductNameOfferTab" placeholder="Name">
                <label for="searchProductNameOfferTab">Name</label>
              </div>
              <div id="tableContainer" class="">
                <table class="w-100" id="offerTable">
                  <thead>
                    <tr class="topc-border-bottom">
                      <th data-column="id" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">ID</th>
                      <th data-column="title" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Title</th>
                      <th data-column="discount" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Discount(%)</th>
                      <th data-column="start_date" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Start Date</th>
                      <th data-column="end_date" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">End Date</th>
                      <th data-column="status" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Status</th>
                      <th data-column class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
              </div>
            </div>

            <div class="d-flex gap-3 rounded-3 p-4">
              <div class="d-flex flex-column w-100" id="offerSelectedProductOffeer"></div>
            </div>

            <div id="offerTabEditForm">
              <div class="col-12 p-0 mt-5 d-flex flex-row justify-content-between align-items-center">
                <div>
                  <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Details</span>
                  <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">Enter offer details</p>
                </div>
                <button id="clearOfferButton" class="lrv-btn lrv-btn-primary-outline col-lg-1 col-md-2 col-4">clear</button>
              </div>
              <div class=" d-flex flex-row justify-content-between align-items-center">
                <div class="tab-offers-s1-div2">
                  <div class="lrv-form-floating">
                    <input type="text" name="title" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="offerTitle" placeholder="Title">
                    <label for="offerTitle">Title</label>
                  </div>
                </div>
                <div class="tab-offers-s1-div2">
                  <div class="lrv-form-floating">
                    <select name="status" id="offerStatus" class="lrv-form-select lrv-border-0 lrv-border-bottom">
                        <option value="0">Select a status</option>
                        <option value=true>Active</option>
                        <option value=false>Inactive</option>
                    </select>
                    <label for="offerStatus">Status</label>
                  </div>
                </div>
              </div>
              <div class=" d-flex flex-row justify-content-between align-items-center">
                <div class="w-100">
                  <div class="lrv-form-floating">
                    <textarea name="offerDescription" name="description" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="offerDescription" placeholder="Description"></textarea>
                    <label for="description">Description</label>
                  </div>
                </div>
              </div>
              <div class=" d-flex flex-row justify-content-between align-items-center">
                <div class="tab-offers-s1-div1">
                  <div class="lrv-form-floating">
                    <input type="text" name="discount" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="offerDiscount" placeholder="Offer Discount (%)">
                    <label for="offerDiscount">Discount (%)</label>
                  </div>
                </div>
                <div class="tab-offers-s1-div1">
                  <div class="lrv-form-floating">
                    <input type="datetime-local" name="start_date" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="offerStartDate" placeholder="Start Time">
                    <label for="startTime">Start Time</label>
                  </div>
                </div>
                <div class="tab-offers-s1-div1">
                  <div class="lrv-form-floating">
                    <input type="datetime-local" name="end_date" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="offerEndDate" placeholder="End Time">
                    <label for="endTime">End Time</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-8 mt-5 mb-4 d-flex flex-row align-items-center justify-content-between w-100 px-0">
              <button id="addOfferButton" class="lrv-btn lrv-btn-primary tab-offers-s1-btn1 addOfferButton">Add Offer</button>
              <button id="removeOfferButton" class="lrv-btn lrv-btn-primary lrv-bg-red-600 tab-offers-s1-btn1">Remove Offer</button>
            </div>

            <div class="col-12 d-flex flex-column lrv-bg-primary-100 lrv-shadow-l lrv-rounded gap-3 p-4">
              <h4 class="lrv-text-dark lrv-fs-7 mb-0">Search Product</h4>
              <label class="lrv-fs-8 mt-0">Lorem ipsum dolor sit.</label>
              <div class=" d-flex flex-row justify-content-between align-items-center">
                <div class="tab-offers-s1-div2">
                  <div class="lrv-form-floating">
                    <input type="text" name="title" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="offerTitle" placeholder="Title">
                    <label for="offerTitle">Name</label>
                  </div>
                </div>
                <div class="tab-offers-s1-div2">
                  <div class="lrv-form-floating">
                    <select name="status" id="offerTypeSelect" class="lrv-form-select lrv-border-0 lrv-border-bottom">
                        <option value="0">Select a Type</option>
                        <option value="1">Products</option>
                        <option value="2">Main Categories</option>
                        <option value="3">Sub Categories</option>
                        <option value="4">Taxonomies</option>
                    </select>
                    <label for="offerTypeSelect">Type</label>
                  </div>
                </div>
              </div>
              <div id="tableContainer" class="">
                <table class="w-100" id="offerAllTypeTable">
                  
                </table>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="col-4 ps-5 d-none d-lg-block">
          <div class="d-flex flex-column">
            <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Product Preview</span>
            <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">Preview of the product</p>

            <div class="product-card-container" id="product-card-container-tabofferTabEditpage">
              <div id="productCard" class="product-card row gy-3 mx-0">
                <div class="col-12 px-0 placeholder-glow">
                  <div class="stkProduct-preview product-preview placeholder lrv-rounded-3 lrv-fs-7">
                  </div>
                </div>
                <div class="col-12 px-0">
                  <h4 class="lrv-fs-6 lrv-fw-semibold stkName"></h4>
                  <h5 class="lrv-fs-7 text-secondary stkCategory"></h5>
                  <h5 class="lrv-fs-7 stkPrice"></h5>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
</Section>