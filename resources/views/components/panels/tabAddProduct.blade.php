<!-- Tab Add Product -->
<section>
    <div class="container-fluid d-flex flex-column gap-3 p-4">
        <div class="row" style="height: 80px;">
            <div class="col-12">
                <h1 class="lrv-fs-4 lrv-fw-semibold lrv-font-poppins lrv-text-dark">Add Product</h1>
                <nav style="--bs-breadcrumb-divider: '&#x2022;';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"
                                class="lrv-text-dark lrv-fw-normal lrv-font-poppins">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#"
                                class="lrv-text-dark lrv-fw-normal lrv-font-poppins">Product</a></li>
                        <li class="breadcrumb-item active lrv-text-dark lrv-fw-normal lrv-font-poppins"
                            aria-current="page">Add</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row" id="productAddInputGroup">
            <div class="col-12 col-md-9 col-lg-9">
                <div class="row pt-3">
                    <div class="col-12 input-div">
                        <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Details</span>
                        <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">Enter product details.</p>
                    </div>
                    <!-- Main Category -->
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="main_category" id="addProductMainCategory" aria-label="Main Category">
                                <option value="0" selected>Select</option>
                            </select>
                            <label for="addProductMainCategory">Main Category</label>
                        </div>
                    </div>
                    <!-- /Main Category -->
                    <!-- /Category -->
                    <!-- Sub Category -->
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="sub_category_id" id="addProductSubCategory" aria-label="Sub Category">
                                <option value="0" selected>Select</option>
                            </select>
                            <label for="addProductSubCategory">Sub Category</label>
                        </div>
                    </div>
                    <!-- /Sub Category -->
                    <!-- Product Name -->
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <input name="title" type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom"
                                id="addProductName" placeholder="Product Name">
                            <label for="addProductName">Product Name</label>
                        </div>
                    </div>
                    <!-- /Product Name -->
                    <!-- Material -->
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <select name="promotion_id" class="lrv-form-select lrv-border-0 lrv-border-bottom" id="addProductPromotion"
                                aria-label="Promotion">
                                <option value="0" selected>Select</option>
                            </select>
                            <label for="addProductPromotion">Promotion</label>
                        </div>
                    </div>
                    <!-- /Material -->
                    <!-- Price -->
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <input type="text" name="price" class="lrv-form-input lrv-border-0 lrv-border-bottom"
                                id="addProductPrice" placeholder="Price">
                            <label for="addProductPrice">Price</label>
                        </div>
                    </div>
                    <!-- /Price -->
                    <!-- Status -->
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <select name="condition_id" class="lrv-form-select lrv-border-0 lrv-border-bottom" id="addProductStatus" aria-label="Status">
                                <option value="0" selected>Select</option>
                            </select>
                            <label for="addProductStatus">Status</label>
                        </div>
                    </div>
                    <!-- /Status -->
                    <!-- Description -->
                    <div class="col-12 input-div">
                        <div class="lrv-form-floating">
                            <textarea name="description" class="lrv-form-input lrv-border-0 lrv-border-bottom" placeholder="addProductDescription"
                                id="addProductDescription"></textarea>
                            <label for="addProductDescription">Description</label>
                        </div>
                    </div>
                    <!-- /Description -->
                    <!-- taxonomy type-->
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="taxonomy_type" id="addProductTaxonomyType" aria-label="Taxonomy Type">
                                <option value="0" selected>Select</option>
                            </select>
                            <label for="addProductTaxonomyType">Taxonomy Type</label>
                        </div>
                    </div>
                    <!-- /taxonomy type-->
                    <!-- taxonomy Name -->
                    <div class="col-12 col-md-6 input-div">
                        <div class="lrv-form-floating">
                            <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="taxonomy_id" id="addProductTaxonomyName" aria-label="Taxonomy Name">
                                <option value="0" selected>Select</option>
                            </select>
                            <label for="addProductTaxonomyName">Taxonomy Name</label>
                        </div>
                    </div>
                    <!-- /taxonomy Name-->
                    <ul id="addProductTaxonomyList" class="taxonomy-list"></ul>
                </div>
                <div class="row pt-5 p-0 justify-content-center m-0">
                    <div class="col-12 input-div">
                        <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Images</span>
                        <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">Product related images</p>
                    </div>
                    


                    {{-- advanced image picker --}}
                    <div class="container shadow image-picker-container" id="addProductImagePicker" data-image-picker="4"
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
                    <div class="col-10 col-md-4 d-grid mb-3">
                        <button type="button" class="lrv-btn lrv-btn-primary" id="addProductButton">Add
                            Product</button>
                    </div>
                </div>

            </div>
            <div class="col-md-3 col-lg-3 d-none d-md-block">
                <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Product Preview</span>
                <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">Product preview will be displayed here.
                </p>

                <div class="product-card-container row" id="addProductPreviewContainer">
                </div>
            </div>
        </div>

        <div class="position-fixed main-model-div fixed-top d-none" id="modelDiv">
            <div class="model-div">
                <div class="progress-div p-5" id="progress-div">
                    <div class="progress" id="progressBar" role="progressbar" aria-label="progressBar"
                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 0%">0%</div>
                    </div>
                </div>
                <div class="product-Added-div d-none" id="Added-div">
                    <div class="d-flex flex-column justify-content-end">
                        <h1 class="lrv-text-dark lrv-fw-normal lrv-fs-5 mt-3">Product Added</h1>
                    </div>
                    <div class="product-Added-img"></div>
                </div>
            </div>
        </div>
    </div>

</section>
