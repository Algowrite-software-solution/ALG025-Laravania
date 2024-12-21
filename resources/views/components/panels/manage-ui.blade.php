<Section class="container-fluid">
  <div class="row justify-content-center mx-0 pb-5">
    <div class="col-12">
      <h1 class="lrv-fs-4 lrv-text-dark">Manage User Interface</h1>
      <div class="">
        <nav style="--bs-breadcrumb-divider: '&#x2022;';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item lrv-text-dark"><a>Admin</a></li>
            <li class="breadcrumb-item lrv-text-dark">Manage UI</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-12">
      <div class="row mx-0">
        <div class="col-12 col-lg-7 pe-lg-5">
          <div class="row justify-content-center gap-4">
            <div class="col-12 d-flex flex-column lrv-bg-primary-100 lrv-shadow-l lrv-rounded px-4 py-3">
              <h4 class="lrv-text-dark lrv-fs-7 mb-0">Upload Images</h4>
              <label class="lrv-fs-8 mt-0">Please select a user interface to upload images</label>
              <div class="lrv-form-floating my-3" id="tabUIMUserInterfaceContainer">
                <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="tabUIMUserInterface" id="tabUIMUserInterface" aria-label="User Interface">
                  <option value="" selected>Select a interface</option>
                  <option value="1">Home</option>
                  <option value="2">Deals</option>
                </select>
                <label for="tabUIMUserInterface">User Interface</label>
              </div>
            </div>
            <div class="col-12 d-flex p-0" id="dropArea">
              <div class="container shadow image-picker-container" id="tabUIMImagePicker" data-image-picker="4"
                  data-name="myImages">
                  <h3 class="image-picker-header">Product Images</h3>
                  <div class="image-picker imagePicker">
                      <label>Click or Drop Images Here
                          <input type="file" class="imageInput hidden-input" accept="image/*" multiple
                              aria-labelledby="imageInput" />
                      </label>
                  </div>
                  <div class="thumbnails" class="thumbnails"></div>
                  <button class="download-btn downloadBtn d-none">Download Images</button>
                  <div class="alertContainer"></div>
                  <div class="loading-screen" class="loading-screen">
                      <div class="loading-spinner"></div>
                  </div>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-center p-0">
              <button class="lrv-btn lrv-btn-primary col-4" id="add-files-btn">Add Files</button>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-12 ps-3 d-flex flex-column gap-4">
          <div class="lrv-bg-primary-100 lrv-shadow-l lrv-rounded p-3 py-4">
            <div class="w-100" id="tabUIMInputGroup">
              <div class="lrv-form-floating">
                <input type="text" name="title" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabUIMNavigationTtitle" placeholder="Title">
                <label for="tabUIMNavigationTtitle">Title</label>
              </div>
              <div class="lrv-form-floating">
                <input type="text" name="description" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabUIMNavigationDescription" placeholder="Description">
                <label for="tabUIMNavigationDescription">Description</label>
              </div>
              <div class="lrv-form-floating">
                <input type="text" name="button_text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabUIMNavigationButtonText" placeholder="Button Text">
                <label for="tabUIMNavigationButtonText">Button Text</label>
              </div>
              <div class="lrv-form-floating">
                <input type="text" name="button_url" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabUIMNavigationButtonUrl" placeholder="Button Url">
                <label for="tabUIMNavigationButtonUrl">Button Url</label>
              </div>
            </div>
          </div>
          <div class="p-3 py-4">
            <div class="d-flex justify-content-center gap-4">
              <a id="UI-M-desktop-link" class="lrv-fs-6 text-decoration-underline">Desktop</a>
              <a id="UI-M-mobile-link" class="lrv-fs-6 lrv-UIM-s1-text1">Mobile</a>
            </div>
            <div id="UI-M-desktop-div" class="lrv-UIM-s1-div1"></div>
            <div id="UI-M-mobile-div" class="lrv-UIM-s1-div2 d-none"></div>
          </div>
        </div>
        <div class="col-lg-5 col-12 ps-3 d-flex flex-column gap-4">
          <button>save</button>
        </div>
      </div>
    </div>
  </div>
</Section>