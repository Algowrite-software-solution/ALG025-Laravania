<!-- Tab Order History -->
<Section>
  <div class="container-fluid gap-3">
    <div class="col-12 d-flex flex-column align-items-center align-items-lg-start">
        <h1 class="lrv-fs-4 lrv-text-dark">Order History</h1>
        <nav style="--bs-breadcrumb-divider: '&#x2022;';" aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item lrv-text-dark"><a>Admin</a></li>
            <li class="breadcrumb-item lrv-text-dark">Users</li>
            <li class="breadcrumb-item lrv-text-dark">Order History</li>
            </ol>
        </nav>
    </div>
    <div class="col-12 d-flex flex-column lrv-shadow-l lrv-bg-primary-100 lrv-rounded p-4 py-4 gap-3">
        <div class="mb-0 pb-0">
            <h4 class="lrv-text-dark lrv-fs-6 mb-0 pb-0">Search</h4>
            <label class="lrv-fs-8 mt-0 pt-0">Lorem ipsum dolor sit.</label>
        </div>
        <div class=" d-flex justify-content-between mt-0 pt-0 pb-1">
            <div class="lrv-form-floating tab-order-history-s1-div1">
                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="searchProductInvoiceID" placeholder="Invoice ID">
                <label for="searchProductInvoiceID">Invoice ID</label>
            </div>
            <div class="lrv-form-floating tab-order-history-s1-div1">
                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="searchProductDate&Time" placeholder="Date & Time">
                <label for="searchProductDate&Time">Date & Time</label>
            </div>
            <div class="lrv-form-floating tab-order-history-s1-div1">
                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="searchProductTotal" placeholder="Total">
                <label for="searchProductTotal">Total</label>
            </div>
        </div>
        <div>
            <table class="w-100 tab-order-history-s1-table1">
                <thead>
                    <tr class="tab-order-history-s1-border-bottom">
                        <th class="topc-text-clr-2 text-start p-2 pb-3 tab-order-history-s1-th1">Invoice ID</th>
                        <th class="topc-text-clr-2 text-center p-2 pb-3 tab-order-history-s1-th1">Date & Time</th>
                        <th class="topc-text-clr-2 text-center p-2 pb-3 d-none d-lg-table-cell">Total</th>
                        <th class="topc-text-clr-2 text-center p-2 pb-3 d-none d-lg-table-cell">Action</th>
                    </tr>
                </thead>
                <tbody id="orderHistoryTable">
                    
                </tbody>
            </table>
        </div>
    </div>
  </div>
</Section>