<section>
  <div class="row justify-content-center mx-0 pb-5">
    <div class="col-12">
      <h1 class="lrv-fs-4 lrv-text-dark">Send Email</h1>
      <div class="">
        <nav style="--bs-breadcrumb-divider: '&#x2022;';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item lrv-text-dark"><a onclick="dashboardBCTOP();">Admin</a></li>
            <li class="breadcrumb-item lrv-text-dark">Offers</li>
            <li class="breadcrumb-item lrv-text-dark">Promotion Email</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="col-12 d-flex flex-column lrv-bg-primary-100 lrv-rounded lrv-shadow-l p-4">
      <div class="d-flex flex-row mb-4">
        <input type="checkbox" class="lrv-form-check-input me-3"/>
        <span>Select All Users (80)</span>
      </div>
      <div id="tab-offer-email-editor">
      </div>
      <button class="lrv-btn-primary col-lg-4 col-12 offset-lg-4 lrv-rounded-pill mt-4 py-1" onclick="sendOfferEmails();">Send</button>
    </div>
  </div>
  <div class="toast-container position-fixed bottom-0 end-0 p-1" style="width: fit-content;" id="toastdiv">
</Section>