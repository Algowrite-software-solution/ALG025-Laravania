<Section class="container-fluid">
  <div class="row justify-content-center mx-0 pb-5">
    <div class="col-12">
      <h1 class="lrv-fs-4 lrv-text-dark">Add SEO</h1>
      <div class="">
        <nav style="--bs-breadcrumb-divider: '&#x2022;';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item lrv-text-dark"><a>Admin</a></li>
            <li class="breadcrumb-item lrv-text-dark">SEO</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-12">
      <div class="row mx-0">
        <div class="col-12">
          <div class="row justify-content-center">

            <div class="col-12 d-flex flex-column lrv-bg-primary-100 lrv-shadow-l lrv-rounded p-4">
              <h4 class="lrv-text-dark lrv-fs-7 mb-0">Search Seo</h4>
              <label class="lrv-fs-8 mt-0">Search the product you desired.</label>
              <div class="lrv-form-floating my-3" id="seoSearchProductContainer">
                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" name="seo_product_name" id="tabSeoSearchProductName" placeholder="Name"/>
                <label for="tabSeoSearchProductName">Name</label>
              </div>
              <div id="tableContainer" class="">
                <table class="w-100" id="seoTable">
                  <thead>
                    <tr class="topc-border-bottom">
                      <th data-column="id" class="topc-text-clr-2 text-start p-2 pb-3">ID</th>
                      <th data-column="meta_title" class="topc-text-clr-2 text-start p-2 pb-3">Meta Title</th>
                      <th data-column="seo_type.type" class="topc-text-clr-2 text-start p-2 pb-3">Seo Type</th>
                      <th data-column class="topc-text-clr-2 text-start p-2 pb-3">Action</th>
                    </tr>
                  </thead>
                  <tbody id="tabSeoDataTableBody" class="tabSeoDataTableBody">
                    
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-12 p-0 mt-5 d-flex flex-row justify-content-between align-items-center">
              <div>
                <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Details</span>
                <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">Meta Keyword, Description</p>
              </div>
              <button id="clearSeoButton" class="lrv-btn lrv-btn-primary-outline col-lg-1 col-md-2 col-4">clear</button>
            </div>
            <div id="seoInputContainer" class=" d-flex flex-column justify-content-start align-items-start ps-0" id="seoInputGroup">
              <div class="d-flex w-100 flex-row justify-content-md-between justify-content-center align-items-center">
                <div class="col-12 col-md-5">
                  <div class="lrv-form-floating">
                    <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" name="meta_title" id="seoMetaTitle" placeholder="Meta Title">
                    <label for="seoMetaTitle">Meta Title</label>
                  </div>
                </div>
                <div class="col-12 col-md-5">
                  <div class="lrv-form-floating">
                      <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="seo_type_id" id="seoType" aria-label="Seo Type">
                          <option value="" selected>Select</option>
                      </select>
                      <label for="seoType">Seo Type</label>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="lrv-form-floating">
                  <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" name="meta_description" id="seoMetaDescription" placeholder="Meta Description">
                  <label for="seoMetaDescription">Meta Description</label>
                </div>
              </div>
              <div class="col-12">
                <div class="lrv-form-floating">
                  <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" name="meta_keywords" id="seoMetaKeywords" placeholder="Meta Keywords">
                  <label for="seoMetaKeywords">Meta Keywords</label>
                </div>
              </div>
              <div class="d-flex w-100 flex-row justify-content-md-between justify-content-center align-items-center">
                <div class="col-12 col-md-5">
                  <div class="lrv-form-floating">
                      <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="taxonomy_id" id="seoTaxonomy" aria-label="Taxonomy">
                          <option value="" selected>Select</option>
                      </select>
                      <label for="seoTaxonomy">Taxonomy</label>
                  </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="lrv-form-floating">
                        <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="product_id" id="seoProduct" aria-label="Product">
                            <option value="" selected>Select</option>
                        </select>
                        <label for="seoProduct">Product</label>
                    </div>
                </div>
              </div>
              <div class="d-flex w-100 flex-row justify-content-md-between justify-content-center align-items-center">
                <div class="col-12 col-md-5">
                  <div class="lrv-form-floating">
                      <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="main_category_id" id="seoMainCategory" aria-label="Main Category">
                          <option value="" selected>Select</option>
                      </select>
                      <label for="seoMainCategory">Main Category</label>
                  </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="lrv-form-floating">
                        <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="sub_category_id" id="seoSubCategory" aria-label="Sub Category">
                            <option value="" selected>Select</option>
                        </select>
                        <label for="seoSubCategory">Sub Category</label>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-8 mt-5 mb-4">
              <button id="addSeoButton" class="lrv-btn lrv-btn-primary addSeo">Add SEO</button>
            </div>

            <div class="col-12 d-flex flex-column lrv-bg-primary-100 lrv-shadow-l lrv-rounded p-4">
              <h4 class="lrv-text-dark lrv-fs-7 mb-0">Search Seo Type</h4>
              <label class="lrv-fs-8 mt-0">Search the product you desired.</label>
              <div class="lrv-form-floating my-3" id="seoSearchProductContainer">
                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" name="seo_product_name" id="tabSeoSearchProductName" placeholder="Name"/>
                <label for="tabSeoSearchProductName">Name</label>
              </div>
              <div id="tableContainer" class="">
                <table class="w-100" id="seoTypeTable">
                  <thead>
                    <tr class="topc-border-bottom">
                      <th data-column="id" class="topc-text-clr-2 text-start p-2 pb-3">ID</th>
                      <th data-column="type" class="topc-text-clr-2 text-start p-2 pb-3">Seo Type</th>
                      <th data-column class="topc-text-clr-2 text-start p-2 pb-3">Action</th>
                    </tr>
                  </thead>
                  <tbody id="tabSeoTypeDataTableBody" class="tabSeoTypeDataTableBody">
                    
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-12 p-0 mt-5 d-flex flex-row justify-content-between align-items-center">
              <div>
                <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Details</span>
                <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">SEO Type</p>
              </div>
              <button id="clearSeoTypeButton" class="lrv-btn lrv-btn-primary-outline col-lg-1 col-md-2 col-4">clear</button>
            </div>
            <div id="seoTypeInputContainer" class=" d-flex flex-column justify-content-start align-items-start ps-0" id="seoInputGroup">
              <div class="col-12">
                <div class="lrv-form-floating">
                  <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" name="type" id="seoTypeType" placeholder="SEO Type">
                  <label for="seoTypeType">SEO Type</label>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-8 mt-5 mb-4">
              <button id="addSeoTypeButton" class="lrv-btn lrv-btn-primary addSeoType">Add SEO Type</button>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</Section>