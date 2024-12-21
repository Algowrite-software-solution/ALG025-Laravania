@extends('layout.client-layout')
@section('title', 'Account Page')

@section('custom_css_js')
    @vite('resources/css/account.css')
    @vite('resources/js/pages/client/account.js')
@endsection

@section('content')
<!-- Account -->
<section>
    <div class="row justify-content-center m-0">
        <div class="col-12 mb-5 text-center d-flex flex-column">
            <h1 class="mt-3 mb-3 lrv-fs-3 lrv-fw-normal lrv-font-cormorant-garamond lrv-lh-sm">Account</h1>
            <span class="lrv-fs-6 lrv-fw-medium lrv-font-poppins lrv-lh-normal" id="name">Lorem Ipsum</span>
            <span class="lrv-fs-7 lrv-fw-normal lrv-font-poppins lrv-lh-normal" id="email">loremipsum@gmail.com</span>
            <span class="lrv-fs-7 lrv-fw-normal lrv-font-poppins lrv-lh-normal" id="mobile">077 77 77 777</span>
            <span class="lrv-fs-7 lrv-fw-normal lrv-font-poppins lrv-lh-normal" id="points">Points : 0</span>
            <div>
                <a href="account/addresses" class="mt-2 lrv-lh-lg">Add Address</a>
                <a href="/account/settings" class="mt-2 lrv-lh-lg ms-4">Settings</a>
            </div>

        </div>
        <div class="col-12 col-md-9 mt-3">
            <div class="lrv-accordion" id="orderHistoryAccordion">
                <div class="lrv-accordion-item">
                    <h2 class="lrv-accordion-header lrv-bg-primary-200 mb-3 lrv-rounded-1 ps-5 pe-5">
                        <button class="lrv-accordion-button lrv-fs-6 " type="button" data-bs-toggle="collapse" data-bs-target="#orderHistoryCollapse" aria-expanded="true" aria-controls="orderHistoryCollapse">
                            Order History
                        </button>
                    </h2>
                    <div id="orderHistoryCollapse" class="lrv-accordion-collapse collapse show" data-bs-parent="#orderHistoryAccordion">
                        <div class="lrv-accordion-body d-flex justify-content-center">
                            <div class="table-container me-2 ms-2 me-md-5 ms-md-5">
                                <table class="lrv-bg-primary-200 lrv-rounded-2 mb-md-5">
                                    <thead>
                                        <tr>
                                            <td scope="col">Invoice&nbsp;ID</td>
                                            <td scope="col">Product&nbsp;Details</td>
                                            <td scope="col">Date & Time</td>
                                            <td scope="col">Total</td>
                                            <td scope="col">Status</td>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider" id="orders">
                                        <!-- <tr>
                                            <td scope="row">8889598</td>
                                            <td>Lorem ipsum </td>
                                            <td>Rs&nbsp;0000.00</td>
                                            <td class="lrv-text-secondary-500 ">Success</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">12358798</td>
                                            <td>Lorem ipsum</td>
                                            <td>Rs 0000.00</td>
                                            <td class="lrv-text-red-600">Failed</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">12358798</td>
                                            <td><span class="d-inline">Lorem ipsum</span></td>
                                            <td>Rs 0000.00</td>
                                            <td class="lrv-text-secondary-500 ">Success</td>
                                        </tr>
                                        <tr>
                                            <td scope="row">12358798</td>
                                            <td>Lorem ipsum </td>
                                            <td>Rs 0000.00</td>
                                            <td class="lrv-text-red-600">Failed</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 d-block d-md-none text-center mb-3">
            <a href="#" class="mt-2 lrv-lh-lg">Log out</a>
        </div>
    </div>
</section>
@endsection
