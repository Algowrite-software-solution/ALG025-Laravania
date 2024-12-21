<!-- Tab View Product -->
<section>
    <div class="container-fluid d-flex flex-column gap-3 p-4">
        <div class="col-12 col-md-10 d-flex flex-column align-items-center align-items-lg-start">
            <h1 class="lrv-fs-4 lrv-fw-semibold lrv-font-poppins lrv-text-dark">Products</h1>
            <nav style="--bs-breadcrumb-divider: '&#x2022;';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="lrv-text-dark lrv-fw-normal lrv-font-poppins">Admin</a></li>
                    <li class="breadcrumb-item active lrv-text-dark lrv-fw-normal lrv-font-poppins" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex flex-column lrv-rounded p-4 lrv-bg-primary-100 lrv-shadow-l gap-3">
            <div>
                <h4 class="lrv-text-dark lrv-fs-7 mb-0">Search & Edit</h4>
                <label class="lrv-fs-8 mt-0">Lorem ipsum dolor sit.</label>
            </div>
            <div id="viewProductSearchContainer" class="row d-flex flex-row justify-content-between pt-0 gy-3 gy-lg-0 mb-2">
                <div class=" d-flex flex-row justify-content-between">
                    <div class="tab-viewproduct-s1-div1">
                        <div class="lrv-form-floating">
                            <select name="tabviewsMainCategory" id="tabviewsMainCategory" class="lrv-form-select lrv-border-0 lrv-border-bottom">
                                <option selected value="0">Select</option>
                            </select>
                            <label for="tabviewsMainCategory">Main Category</label>
                        </div>
                    </div>
                    <div class="tab-viewproduct-s1-div1">
                        <div class="lrv-form-floating">
                            <select name="tabviewsSubCategory" id="tabviewsSubCategory" class="lrv-form-select lrv-border-0 lrv-border-bottom">
                                <option selected value="0">Select</option>
                            </select>
                            <label for="tabviewsSubCategory">Sub Category</label>
                        </div>
                    </div>
                    <div class="tab-viewproduct-s1-div1">
                        <div class="lrv-form-floating">
                            <select name="tabviewsTaxonomy" id="tabviewsTaxonomy" class="lrv-form-select lrv-border-0 lrv-border-bottom">
                                <option selected value="0">Select</option>
                            </select>
                            <label for="tabviewsTaxonomy">Taxonomy</label>
                        </div>
                    </div>
                </div>
                <div class=" d-flex flex-row justify-content-between mt-2">
                    <div class="tab-viewproduct-s1-div2">
                        <div class="lrv-form-floating">
                            <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabviewsSearchName" name="tabviewsSearchName" placeholder="Name">
                            <label for="searchName">Name</label>
                        </div>
                    </div>
                    <div class="tab-viewproduct-s1-div2">
                        <div class="lrv-form-floating">
                            <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabviewsSearchPrice" name="tabviewsSearchPrice" placeholder="Price">
                            <label for="searchPrice">Price</label>
                        </div>
                    </div>
                    <div class="tab-viewproduct-s1-div2">
                        <div class="lrv-form-floating">
                            <select name="tabviewsSearchStatus" id="tabviewsSearchStatus" class="lrv-form-select lrv-border-0 lrv-border-bottom">
                                <option selected value="0">Select</option>
                            </select>
                            <label for="tabviewsStatus">Status</label>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="">
                <table class="w-100 table-container dtbc" id="tabviewsProductsTable">
                    <thead>
                        <tr class="topc-border-bottom">
                            <th data-column class="topc-text-clr-2 text-start p-2 pb-3 tab-orders-s1-th1">Product ID</th>
                            <th data-column="title" class="topc-text-clr-2 text-start p-2 pb-3 tab-orders-s1-th1">Name</th>
                            <th data-column="sub_category.name" class="topc-text-clr-2 text-start p-2 pb-3">Sub Category</th>
                            <th data-column="price" class="topc-text-clr-2 text-start p-2 pb-3">Price</th>
                            <th data-column="condition.name" class="topc-text-clr-2 text-start p-2 pb-3">Status</th>
                            <th data-column class="topc-text-clr-2 text-center p-2 pb-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="tabviewsProductsTableBody">
                        
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-5 d-none" id="viewProductViewInputGroup">
            <div class="col-12 col-md-9 col-lg-9">
                <div class="row pt-3">
                    <div class="col-12 input-div">
                        <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Details</span>
                        <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">Enter product details.</p>
                    </div>
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="sub_category.main_category_id" id="viewProductViewMainCategory" aria-label="Main Category">
                                <option value="0" selected>Select</option>
                            </select>
                            <label for="viewProductViewMainCategory">Main Category</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="sub_category_id" id="viewProductViewSubCategory" aria-label="Sub Category">
                                <option value="0" selected>Select</option>
                            </select>
                            <label for="viewProductViewSubCategory">Sub Category</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <input name="title" type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom"
                                id="viewProductViewName" placeholder="Product Name">
                            <label for="viewProductViewName">Product Name</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <select name="promotion_id" class="lrv-form-select lrv-border-0 lrv-border-bottom" id="viewProductViewPromotion"
                                aria-label="Promotion">
                                <option value="0" selected>Select</option>
                            </select>
                            <label for="viewProductViewPromotion">Promotion</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <input type="text" name="price" class="lrv-form-input lrv-border-0 lrv-border-bottom"
                                id="viewProductViewPrice" placeholder="Price">
                            <label for="viewProductViewPrice">Price</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <select name="condition_id" class="lrv-form-select lrv-border-0 lrv-border-bottom" id="viewProductViewStatus" aria-label="Status">
                                <option value="0" selected>Select</option>
                            </select>
                            <label for="viewProductViewStatus">Status</label>
                        </div>
                    </div>
                    <div class="col-12 input-div">
                        <div class="lrv-form-floating">
                            <textarea name="description" class="lrv-form-input lrv-border-0 lrv-border-bottom" placeholder="viewProductViewDescription"
                                id="addProductDescription"></textarea>
                            <label for="viewProductViewDescription">Description</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="taxonomy_type" id="viewProductViewTaxonomyType" aria-label="Taxonomy Type">
                                <option value="0" selected>Select</option>
                            </select>
                            <label for="viewProductViewTaxonomyType">Taxonomy Type</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="taxonomy_id" id="viewProductViewTaxonomyName" aria-label="Taxonomy Name">
                                <option value="0" selected>Select</option>
                            </select>
                            <label for="viewProductViewTaxonomyName">Taxonomy Name</label>
                        </div>
                    </div>
                    <ul id="viewProductViewTaxonomyList" class="taxonomy-list"></ul>
                </div>
                <div class="row pt-5 p-0 justify-content-center m-0">
                    <div class="col-12 input-div">
                        <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Images</span>
                        <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">Product related images</p>
                    </div>
                    
                    <div class="container shadow image-picker-container w-100" id="viewProductViewImagePicker" data-image-picker="4"
                        data-name="myImages">
                        <h3 class="image-picker-header">Product Images</h3>
                        <div class="image-picker imagePicker">
                            <label>Click or Drop Images Here
                                <input type="file" class="imageInput hidden-input" accept="image/*" multiple
                                    aria-labelledby="imageInput" />
                            </label>
                        </div>
                        <div class="thumbnails" class="thumbnails"></div>
                        <button class="download-btn downloadBtn">Download Images</button>
                        <div class="alertContainer"></div>
                        <div class="loading-screen" class="loading-screen">
                            <div class="loading-spinner"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 row justify-content-md-between justify-content-center align-items-stretch mt-3 mb-3">
                    <div class="col-md-5 col-12 mb-md-0 mb-3">
                        <button type="button" class="lrv-btn lrv-btn-primary w-100" id="viewProductViewUpdateButton">
                            Update Product
                        </button>
                    </div>
                    <div class="col-md-5 col-12">
                        <button type="button" class="lrv-btn bg-danger w-100" id="viewProductViewRemoveButton">
                            Remove Product
                        </button>
                    </div>
                </div>                
            </div>
            <div class="col-md-3 col-lg-3 d-none d-md-block">
                <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Product Preview</span>
                <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">Product preview will be displayed here.
                </p>

                <div class="product-card-container row" id="viewProductViewPreviewContainer">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="viewProductViewModal" tabindex="-1" aria-labelledby="viewProductViewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class=" modal-content">
                <div class="modal-header border border-0 d-flex justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex flex-column justify-content-center align-items-center px-5">
                    <h1 class="lrv-fs-5 lrv-fw-medium">Product Preview</h1>
                    <h5 class="lrv-fs-8 lrv-fw-medium">Preview of the product</h5>
                    <div id="tab-viewproduct-s1-model1-div1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>