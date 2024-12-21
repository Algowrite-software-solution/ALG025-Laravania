<section>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center p-4">
        <div class="col-12 d-flex flex-column align-items-center align-items-md-start align-items-lg-start justify-content-center">
            <h1 class="lrv-fs-4 lrv-text-dark">Add Other Details</h1>
            <div class="">
                <nav style="--bs-breadcrumb-divider: '&#x2022;';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item lrv-text-dark"><a onclick="dashboardBCTOP();">Admin</a></li>
                    <li class="breadcrumb-item lrv-text-dark"><a onclick="stockBCTOP();">Products</a></li>
                    <li class="breadcrumb-item lrv-text-dark">Other</li>
                </ol>
                </nav>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-lg-row justify-content-lg-between flex-md-row flex-md-wrap my-md-3 my-lg-3">
            <div class="d-flex flex-column lrv-bg-primary-100 lrv-shadow-l lrv-rounded topc-card1-w p-3 my-2 my-md-0 me-md-3 me-lg-0 my-lg-0">
                <h4 class="lrv-text-dark lrv-fs-7 mb-0">Main Category</h4>
                <label class="lrv-fs-8 mt-0">Lorem ipsum dolor sit.</label>
                <div class="lrv-form-floating my-3">
                    <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="mainCategoryNameTOP" placeholder="Name">
                    <label for="mainCategoryNameTOP">Name</label>
                </div>
                <div id="loadMainCategoryAllTOP" class="">
                    <table class="w-100" id="mainCategoryTable">
                        <thead>
                            <tr class="topc-border-bottom">
                                <th data-column="id" class="topc-text-clr-2 text-center p-2 pb-3 topc-txt1">ID</th>
                                <th data-column="name" class="topc-text-clr-2 text-start p-2 pb-3 topc-txt1">Name</th>
                                <th data-column="slug" class="topc-text-clr-2 text-center p-2 pb-3 topc-txt1">Slug</th>
                                <th class="topc-text-clr-2 text-center p-2 pb-3 topc-txt1">Action</th>
                            </tr>
                        </thead>
                        <tbody >
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex flex-column lrv-bg-primary-100 lrv-shadow-l lrv-rounded topc-card1-w p-3 my-2 my-md-0 mt-md-4 mt-lg-0 my-lg-0">
                <h4 class="lrv-text-dark lrv-fs-7 mb-0">Sub Category</h4>
                <label class="lrv-fs-8 mt-0">Lorem ipsum dolor sit.</label>
                <div class="lrv-form-floating my-3">
                    <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="subCategoryNameTOP" placeholder="Name">
                    <label for="subCategoryNameTOP">Name</label>
                </div>
                <div id="loadSubCategoryAllTOP" class="">
                    <table class="w-100" id="subCategoryTable">
                        <thead>
                            <tr class="topc-border-bottom">
                                <th data-column="id" class="topc-text-clr-2 text-center p-2 pb-3 topc-txt1">ID</th>
                                <th data-column="name" class="topc-text-clr-2 text-start p-2 pb-3 topc-txt1">Name</th>
                                <th data-column="slug" class="topc-text-clr-2 text-center p-2 pb-3 topc-txt1">Slug</th>
                                <th class="topc-text-clr-2 text-center p-2 pb-3 topc-txt1">Action</th>
                            </tr>
                        </thead>
                        <tbody >
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12 d-flex flex-column flex-md-row flex-lg-row justify-content-lg-between justify-content-md-between my-md-3 my-lg-3">
            <div class="d-flex flex-column lrv-bg-primary-100 lrv-shadow-l lrv-rounded p-3 topc-card2-w my-2 my-md-0 my-lg-0">
                <h4 class="lrv-text-dark lrv-fs-7 mb-0">Colors</h4>
                <label class="lrv-fs-8 mt-0">Lorem ipsum dolor sit.</label>
                <div class="d-flex flex-row justify-content-between">
                    <div class="topc-div1-w">
                        <div class="lrv-form-floating my-3">
                            <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="colorsHEXTOP" placeholder="Name">
                            <label for="colorsHEXTOP">HEX</label>
                        </div>
                    </div>
                    <div class="topc-div1-w">
                        <div class="lrv-form-floating my-3">
                            <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="colorsNameTOP" placeholder="Name">
                            <label for="colorsNameTOP">Name</label>
                        </div>
                    </div>
                </div>
                <div id="loadColorTOP" class="table-container">
                </div>
            </div>
            <div class="d-flex flex-column lrv-bg-primary-100 lrv-shadow-l lrv-rounded p-3 topc-card2-w my-2 my-md-0 my-lg-0">
                <h4 class="lrv-text-dark lrv-fs-7 mb-0">Materials</h4>
                <label class="lrv-fs-8 mt-0">Lorem ipsum dolor sit.</label>
                <div class="lrv-form-floating my-3">
                    <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="materialsNameTOP" placeholder="Name">
                    <label for="materialsNameTOP">Name</label>
                </div>
                <div id="loadMaterialTOP" class="table-container">
                </div>
            </div>
        </div>
    </div>
    <div class="toast-container position-fixed bottom-0 end-0 p-1" style="width: fit-content;" id="alertdiv">
</section>