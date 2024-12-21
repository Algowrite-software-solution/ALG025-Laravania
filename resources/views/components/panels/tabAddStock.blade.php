<Section class="container-fluid">
  <div class="row justify-content-center mx-0 pb-5">
    <div class="col-12">
      <h1 class="lrv-fs-4 lrv-text-dark">Add Stock</h1>
      <div class="">
        <nav style="--bs-breadcrumb-divider: '&#x2022;';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item lrv-text-dark"><a>Admin</a></li>
            <li class="breadcrumb-item lrv-text-dark">Products</li>
            <li class="breadcrumb-item lrv-text-dark">Stock</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-12">
      <div class="row mx-0">
        <div class="col-12 col-lg-8 pe-lg-5">
          <div class="row justify-content-center">

            <div class="row justify-content-center" id="addStockContainer">

              <div class="col-12 d-flex flex-column lrv-bg-primary-100 lrv-shadow-l lrv-rounded p-3 my-2 my-md-0 me-md-3 me-lg-0 my-lg-0">
                <h4 class="lrv-text-dark lrv-fs-7 mb-0">Products</h4>
                <label class="lrv-fs-8 mt-0">Search the product you desired.</label>
                <div class="lrv-form-floating my-3">
                  <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="searchtabAddStockProductName" placeholder="Name">
                  <label for="searchtabAddStockProductName">Name</label>
                </div>
                <div id="tableContainer" class="">
                  <table class="w-100" id="tabAddStockProductsTable">
                    <thead>
                      <tr class="topc-border-bottom">
                        <th data-column="id" class="topc-text-clr-2 text-start p-2 pb-3">ID</th>
                        <th data-column="title" class="topc-text-clr-2 text-start p-2 pb-3">Name</th>
                        <th data-column="price" class="topc-text-clr-2 text-start p-2 pb-3">Price</th>
                        <th data-column class="topc-text-clr-2 text-center p-2 pb-3">Action</th>
                      </tr>
                    </thead>
                    <tbody id="productDataTableBody" class="productDataTableBody">
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- stock table  -->
              <div id="productStockManagement" class="col-12 d-flex flex-column lrv-bg-primary-100 lrv-shadow-l lrv-rounded p-3 my-2 me-md-3 me-lg-0 mt-5">
                <div class="col-12 p-0 d-flex flex-row justify-content-between align-items-center">
                  <div>
                    <h4 class="lrv-text-dark lrv-fs-7 mb-0">Products Stock Management</h4>
                    <label class="lrv-fs-8 mt-0">Selected product stock management.</label>
                  </div>
                  <button id="resetStockButton" class="lrv-btn lrv-btn-primary-outline col-md-2 col-4">Reset</button>
                </div>
                <div class="lrv-form-floating my-3">
                  <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="searchtabAddStockStocktName" placeholder="Name">
                  <label for="searchtabAddStockStocktName">Name</label>
                </div>
                <div id="stockTableContainer" class="">
                  <table class="w-100" id="tabAddStockStocksTable">
                    <thead>
                      <tr class="topc-border-bottom">
                        <th data-column="id" class="topc-text-clr-2 text-start p-2 pb-3">ID</th>
                        <th data-column="sku" class="topc-text-clr-2 text-start p-2 pb-3">SKU</th>
                        <th data-column="quantity" class="topc-text-clr-2 text-start p-2 pb-3">Quantity</th>
                        <th data-column class="topc-text-clr-2 text-center p-2 pb-3">Action</th>
                      </tr>
                    </thead>
                    <tbody id="productStockDataTableBody">
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- stock table  -->

              <div class="col-12 p-0 mt-5 d-flex flex-row justify-content-between align-items-center">
                <div>
                  <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Details</span>
                  <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">stocks</p>
                </div>
                <button id="clearStockButton" class="lrv-btn lrv-btn-primary-outline col-md-2 col-4">clear</button>
              </div>
              <div class="col-12 col-md-6 p-0 input-div ps-1">
                <div class="lrv-form-floating">
                  <input type="text" readonly name="product_id" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabAddProductId" placeholder="Product Id">
                  <label for="tabAddProductId">Product Id</label>
                </div>
              </div>

              <div class="col-12 col-md-6 p-0 input-div ps-1">
                <div class="lrv-form-floating">
                  <input type="text" name="sku" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabAddSku" placeholder="SKU">
                  <label for="tabAddSku">SKU</label>
                </div>
              </div>

              <div class="col-12 col-md-6 p-0 input-div ps-1">
                <div class="lrv-form-floating">
                  <input type="text" name="price" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabAddPrice" placeholder="Price">
                  <label for="tabAddPrice">Price</label>
                </div>
              </div>

              <div class="col-12 col-md-6 p-0 input-div ps-1">
                <div class="lrv-form-floating">
                  <input type="text" name="quantity" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabAddStockQuantity" placeholder="Quantity">
                  <label for="quantity">Quantity</label>
                </div>
              </div>

              <div class="col-12 col-md-6 input-div">
                <div class="lrv-form-floating">
                    <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="variation" id="addStockVariation" aria-label="Variation">
                        <option value="" selected>Select</option>
                    </select>
                    <label for="addStockVariation">Variation</label>
                </div>
              </div>

              <div class="col-12 col-md-6 input-div">
                  <div class="lrv-form-floating">
                      <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="variation_option_id" id="addStockVariationOption" aria-label="Variation Option">
                          <option value="" selected>Select</option>
                      </select>
                      <label for="addStockVariationOption">Variation Option</label>
                  </div>
              </div>

              <ul id="addStockVariationOptionList" class="taxonomy-list"></ul>

              <div class="col-12 row justify-content-md-between justify-content-center align-items-stretch mt-3 mb-3">
                <div class="col-md-5 col-12 mb-md-0 mb-3">
                    <button type="button" class="lrv-btn lrv-btn-primary w-100 addStockButton" id="addStockButton">
                      Add Stock
                    </button>
                </div>
                <div class="col-md-5 col-12">
                    <button type="button" class="lrv-btn bg-danger w-100" id="addStockRemoveButton">
                      Remove Stock
                    </button>
                </div>
              </div> 

            </div>

            <div class="row justify-content-center" id="addStockVariationContainer">
              <div id="productStockVariationManagement" class="col-12 d-flex flex-column lrv-bg-primary-100 lrv-shadow-l lrv-rounded p-3 my-2 me-md-3 me-lg-0 mt-5">
                <div class="col-12 p-0 d-flex flex-row justify-content-between align-items-center">
                  <div>
                    <h4 class="lrv-text-dark lrv-fs-7 mb-0">Products Stock Variation Management</h4>
                    <label class="lrv-fs-8 mt-0">Selected product stock Variation management.</label>
                  </div>
                  <button id="resetStockVariationButton" class="lrv-btn lrv-btn-primary-outline col-md-2 col-4">Reset</button>
                </div>
                <div class="lrv-form-floating my-3">
                  <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="searchtabAddStockVariationName" placeholder="Name">
                  <label for="searchtabAddStockVariationName">Name</label>
                </div>
                <div id="stockVariationTableContainer" class="">
                  <table class="w-100" id="tabAddStockVariationTable">
                    <thead>
                      <tr class="topc-border-bottom">
                        <th data-column="id" class="topc-text-clr-2 text-start p-2 pb-3">ID</th>
                        <th data-column="stock_id" class="topc-text-clr-2 text-start p-2 pb-3">Stock Id</th>
                        <th data-column="quantity" class="topc-text-clr-2 text-start p-2 pb-3">Quantity</th>
                        <th data-column="variation_option_id" class="topc-text-clr-2 text-start p-2 pb-3">Variation Option Id</th>
                        <th data-column class="topc-text-clr-2 text-center p-2 pb-3">Action</th>
                      </tr>
                    </thead>
                    <tbody id="productStockVariationDataTableBody">
                    </tbody>
                  </table>
                </div>
              </div>

              <div class="col-12 p-0 mt-5 d-flex flex-row justify-content-between align-items-center">
                <div>
                  <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Details</span>
                  <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">Stocks Variation</p>
                </div>
                <button id="clearStockVariationButton" class="lrv-btn lrv-btn-primary-outline col-md-2 col-4">clear</button>
              </div>

              <div class="col-12 col-md-6 p-0 input-div ps-1">
                <div class="lrv-form-floating">
                  <input type="text" name="stock_id" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabAddstockIdVariation" placeholder="Stock Id">
                  <label for="tabAddstockIdVariation">stock_id</label>
                </div>
              </div>

              <div class="col-12 col-md-6 p-0 input-div ps-1">
                <div class="lrv-form-floating">
                  <input type="text" name="quantity" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabAddStockVariationQuantity" placeholder="Quantity">
                  <label for="tabAddStockVariationQuantity">Quantity</label>
                </div>
              </div>

              <div class="col-12 col-md-6 input-div">
                <div class="lrv-form-floating">
                    <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="variation" id="addStockVariationVariation" aria-label="Variation">
                        <option value="" selected>Select</option>
                    </select>
                    <label for="addStockVariationVariation">Variation</label>
                </div>
              </div>

              <div class="col-12 col-md-6 input-div">
                  <div class="lrv-form-floating">
                      <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="variation_option_id" id="addStockVariationOptionVariation" aria-label="Variation Option">
                          <option value="" selected>Select</option>
                      </select>
                      <label for="addStockVariationOptionVariation">Variation Option</label>
                  </div>
              </div>

              <ul id="addStockVariationVariationOptionList" class="taxonomy-list"></ul>

              <div class="col-12 row justify-content-md-between justify-content-center align-items-stretch mt-3 mb-3">
                <div class="col-md-5 col-12 mb-md-0 mb-3">
                    <button type="button" class="lrv-btn lrv-btn-primary w-100 addStockVariationButton" id="addStockVariationButton">
                      Add Stock Variation
                    </button>
                </div>
                <div class="col-md-5 col-12">
                    <button type="button" class="lrv-btn bg-danger w-100" id="addStockVariationRemoveButton">
                      Remove Stock Variation
                    </button>
                </div>
              </div> 

            </div>

          </div>
        </div>
        <div class="col-4 ps-5 d-none d-lg-block">
          <div class="d-flex flex-column">
            <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Product Preview</span>
            <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">Preview of the product</p>

            <div class="product-card-container" id="product-card-container-addstockpage">
              <div id="productCard" class="product-card row gy-3 mx-0">
                <div class="col-12 px-0 placeholder-glow">
                  <div class="stkProduct-preview product-preview placeholder lrv-rounded-3 lrv-fs-7" >
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
        </div>
      </div>
    </div>
  </div>
  <div class="toast-container position-fixed bottom-0 end-0 p-1" style="width: fit-content;" id="alertdiv">
</Section>