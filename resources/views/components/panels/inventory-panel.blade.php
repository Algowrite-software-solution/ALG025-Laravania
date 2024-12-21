<!-- Tab Add Product -->
<section>
    <div class="container-fluid d-flex flex-column gap-5">

        <div class="d-flex mt-4 mt-lg-2 position-relative flex-column lrv-border lrv-border-1 lrv-border-primary lrv-rounded p-4 lrv-bg gap-4">
            <span class="lrv-admin-inventory-panel-div-border-text lrv-text-light">Accessories Detail</span>
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-inventory-panel-accessories-category-select-div" id="lrv-admin-inventory-panel-accessories-category-select-div" class="lrv-admin-inventory-panel-text-2 form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-selects">
                        <option value="0">Accessories category</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-inventory-panel-accessories-select-div" id="lrv-admin-inventory-panel-accessories-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-selects">
                        <option value="0">Accessories</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3 position-relative">
                    <div class="lrv-admin-inventory-panel-plus-div">
                        <a><img class="lrv-admin-inventory-panel-image-plus" src="{{ asset('/storage/images/Admin/plus-button.svg') }}" alt=""></a>
                    </div>
                    <select name="lrv-admin-inventory-panel-brand-select-div" id="lrv-admin-inventory-panel-brand-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-selects">
                        <option value="0">Brand</option>
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12">
                    <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-inputs lrv-admin-inventory-panel-text-2" placeholder="Accessory Model Name">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12">
                    <textarea type="text" class="form-control lrv-form-input lrv-bg-light lrv-rounded-2 lrv-text-dark lrv-admin-inventory-panel-inputs" placeholder="Description"></textarea>
                </div>
            </div>
            <div class="row g-3">
                <div class="offset-0 offset-lg-3 col-12 col-md-4 col-lg-3">
                    <button class="lrv-btn lrv-admin-inventory-panel-bg-color-1 lrv-text-dark lrv-rounded-2">Update</button>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <button class="lrv-btn lrv-bg-primary lrv-rounded-2">Add Accessory</button>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <button class="lrv-btn lrv-bg-primary lrv-rounded-2">Clear</button>
                </div>
            </div>
        </div>

        <div class="d-flex position-relative flex-column lrv-border lrv-border-1 lrv-border-primary lrv-rounded p-4 lrv-bg gap-4">
            <span class="lrv-admin-inventory-panel-div-border-text lrv-text-light">Stock Details</span>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-inventory-panel-accessories-model-select-div" id="lrv-admin-inventory-panel-accessories-model-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-selects">
                        <option value="0">Accessories Model</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-inventory-panel-supplier-select-div" id="lrv-admin-inventory-panel-supplier-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-selects">
                        <option value="0">Supplier</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-inventory-panel-condition-select-div" id="lrv-admin-inventory-panel-condition-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-selects">
                        <option value="0">Condition</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-inventory-panel-warranty-select-div" id="lrv-admin-inventory-panel-warranty-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-selects">
                        <option value="0">Warranty</option>
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-inventory-panel-product-select-div" id="lrv-admin-inventory-panel-product-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-selects">
                        <option value="0">Product</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-inventory-panel-supplier-select-div" id="lrv-admin-inventory-panel-supplier-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-selects">
                        <option value="0">Supplier</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-inventory-panel-condition-select-div" id="lrv-admin-inventory-panel-condition-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-selects">
                        <option value="0">Condition</option>
                    </select>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-inventory-panel-warranty-select-div" id="lrv-admin-inventory-panel-warranty-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-selects">
                        <option value="0">Warranty</option>
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <input type="text" class="form-control lrv-form-input lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-inputs" placeholder="Price">
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="d-flex flex-row bg-transparent lrv-rounded-pill">
                        <input type="number" class="lrv-admin-inventory-panel-qty-input form-control lrv-form-input lrv-bg-light lrv-text-dark lrv-admin-inventory-panel-inputs" value="1">
                        <div class="bg-danger position-relative">
                            <a class="lrv-text-primary position-absolute lrv-admin-inventory-panel-qty-up-input"><i class="fa-solid fa-chevron-up lrv-fs-8 p-0 m-0"></i></a>
                            <a class="lrv-text-primary position-absolute lrv-admin-inventory-panel-qty-down-input"><i class="fa-solid fa-chevron-down lrv-fs-8 p-0 m-0"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <input type="text" class="form-control lrv-form-input lrv-border-0 lrv-admin-inventory-panel-bg-color-1 lrv-text-dark lrv-admin-inventory-panel-inputs" disabled placeholder="Stock ID">
                </div>
            </div>
            <div class="row g-3">
                <div class="offset-0 offset-lg-3 col-12 col-md-4 col-lg-3">
                    <button class="lrv-btn lrv-admin-inventory-panel-bg-color-1 lrv-text-dark lrv-rounded-2">Update</button>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <button class="lrv-btn lrv-bg-primary lrv-rounded-2">Add Stock</button>
                </div>
                <div class="col-12 col-md-4 col-lg-3">
                    <button class="lrv-btn lrv-bg-primary lrv-rounded-2">Clear</button>
                </div>
            </div>
        </div>

        <div class="d-flex position-relative flex-column lrv-border lrv-border-1 lrv-border-primary lrv-rounded p-4 lrv-bg gap-4">
            <span class="lrv-admin-inventory-panel-div-border-text lrv-text-light">Stock</span>
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <select name="lrv-admin-inventory-panel-accessories-model-select-div" id="lrv-admin-inventory-panel-accessories-model-select-div" class="form-control lrv-rounded-pill lrv-form-select lrv-bg lrv-border lrv-border-primary lrv-border-2 lrv-text-light lrv-admin-inventory-panel-selects">
                        <option value="0">Accessories Model</option>
                    </select>
                </div>
                <div class="offset-0 offset-lg-6 col-12 col-md-6 col-lg-3">
                    <div class="input-group lrv-rounded-pill lrv-border bg-transparent lrv-border-primary lrv-border-2">
                        <span class="input-group-text bg-transparent lrv-border-0 p-0 m-0 ps-4 pe-1">
                          <i class="bi bi-search lrv-text-primary lrv-fs-5"></i>
                        </span>
                        <input type="text" class="bg-transparent lrv-admin-inventory-panel-text-2 form-control lrv-form-input lrv-border-0 lrv-text-primary lrv-admin-inventory-panel-inputs" placeholder="Stock Code">
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12">
                    <table class="w-100 lrv-bg-dark lrv-rounded-2" id="inventory-panel-stock-table">
                      <thead>
                        <tr>
                          <th data-column="stockID">Stock ID</th>
                          <th data-column="productTitle">Product Title</th>
                          <th data-column="category">Category</th>
                          <th data-column="brand">Brand</th>
                          <th data-column="component">Component</th>
                          <th data-column="category">Capacity</th>
                          <th data-column="condition">Condition</th>
                          <th data-column="warranty">Warranty</th>
                          <th data-column="qty">QTY</th>
                        </tr>
                      </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>