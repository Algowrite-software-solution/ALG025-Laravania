<!-- Tab Invoice -->
<section>
  <div class="container-fluid gap-3">
    <div class="col-12 d-flex flex-column align-items-center align-items-lg-start">
      <h1 class="lrv-fs-4 lrv-text-dark">Invoice</h1>
      <nav style="--bs-breadcrumb-divider: '&#x2022;';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item lrv-text-dark"><a>Admin</a></li>
          <li class="breadcrumb-item lrv-text-dark">Users</li>
          <li class="breadcrumb-item lrv-text-dark">Order History</li>
          <li class="breadcrumb-item lrv-text-dark">Invoice</li>
        </ol>
      </nav>
    </div>
    <div class="p-3 d-flex justify-content-end">
      <button class="btn btn-dark col-lg-3 col-12" onclick="printInvoice('adminInvoice')">Print</button>
    </div>
    <div class="col-12 d-flex flex-column justify-content-center align-items-center" id="adminInvoice">
      <div class="d-flex flex-row justify-content-between col-12 lrv-bg-primary-200 p-2 px-5">
        <div class="col-6 d-flex justify-content-start align-items-start">
          <img src="../../../../resources/images/branding/logo-dark.png" class="img-fluid img-thumbnail lrv-bg-primary-200 border-0" alt="" />
        </div>
        <div>
          <p class="lrv-fs-7">No 123 Road Name,<br />
            Colombo
          </p>
          <p class="lrv-fs-7">info@hasthi.com</p>
          <p class="lrv-fs-7">0710902997</p>
        </div>
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center col-12 gap-4 p-3 px-5">
        <h3 class="lrv-fs-5">INVOICE</h3>
        <div class="d-flex flex-column w-100 justify-content-center align-items-start gap-3">
          <div class="d-flex"><span class="lrv-fs-7">Invoice No :&nbsp;</span> <span id="invoiceDataNo"></span></div>
          <div class="d-flex"><span class="lrv-fs-7">Date :&nbsp;</span> <span id="invoiceDataDate">Somethign</span></div>
          <span class="lrv-fs-6">Shipping Information</span>
          <div class="d-flex"><span class="lrv-fs-7">Name :&nbsp;</span> <span id="invoiceDataName">Somethign</span></div>
          <div class="d-flex"><span class="lrv-fs-7">Email :&nbsp;</span> <span id="invoiceDataEmail">Somethign</span></div>
          <div class="d-flex"><span class="lrv-fs-7">Address :&nbsp;</span> <span id="invoiceDataAddress">Somethign</span></div>
        </div>
        <hr class="w-100" />
        <h5 class="w-100 d-flex justify-content-start align-items-center lrv-fs-6 px-5">Products</h5>
        <table class="col-12 px-5" style="border-collapse: separate;border-spacing: 0 20px;">
          <thead>
            <tr class="lrv-bg-primary-200">
              <th class="text-start p-2">Product ID</th>
              <th class="text-start p-2">Item</th>
              <th class="text-start p-2">Quntity</th>
              <th class="text-start p-2">Unit Price</th>
              <th class="text-start p-2">Total</th>
            </tr>
          </thead>
          <tbody id="invoiceTableContainer">

          </tbody>
        </table>
        <div class="col-12 offset-lg-6 col-lg-6 d-flex flex-column gap-2 px-5">
          <div class="d-flex w-100 justify-content-between align-items-center">
            <span>Subtotal</span>
            <span id="subTotal">Rs.00.00</span>
          </div>
          <div class="d-flex w-100 justify-content-between align-items-center">
            <span>Shipping</span>
            <span>Rs.00.00</span>
          </div>
          <div class="d-flex w-100 justify-content-between align-items-center">
            <span>Tax</span>
            <span>Rs.00.00</span>
          </div>
          <div class="d-flex w-100 justify-content-between align-items-center">
            <span class="lrv-fs-6">Total</span>
            <span class="lrv-fs-6" id="total">Rs.000.00</span>
          </div>
        </div>
        <hr class="w-100" />
        <span class="w-100 d-flex justify-content-start align-items-center lrv-fs-7">Additional Notes</span>
        <span class="w-100 d-flex justify-content-end align-items-end lrv-fs-8">© 2024 Hasthi Restaurant</span>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="invoice-modal-container" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class=" modal-content">
            <div class="modal-header border border-0 d-flex justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column justify-content-center align-items-center px-5">
                <h1 class="lrv-fs-5 lrv-fw-medium">Product Preview</h1>
                <div class="tab-viewproduct-s1-model1-div1 invoice-modal-image">
                </div>
                <span class="lrv-fs-6 lrv-fw-medium text-start">Product Title : <span class="invoice-modal-title"></span></span>
                <span class="apvpm-category lrv-fs-7 lrv-fw-medium text-start">Category : <span class="invoice-modal-category"></span></span>
                <span class="apvpm-price lrv-fs-7 lrv-fw-medium text-start">Unit Price : <span class="invoice-modal-price"></span></span>
                <span class="apvpm-price lrv-fs-7 lrv-fw-medium text-start">Quantity : <span class="invoice-modal-quantity"></span></span>
                <span class="apvpm-price lrv-fs-7 lrv-fw-medium text-start">Total Price : <span class="invoice-modal-total-price"></span></span>
            </div>
        </div>
    </div>
  </div>
</section>