<template data-tempalte-name="wishlist-card">
    <div class="wishlist-card-container col-6 p-3">
        <div class="w-100 row mx-0 d-flex flex-column justify-content-between">
            <a data-product-link class="col-12 px-0 placeholder-glow">
                <div class="wishlist-preview p-2 lrv-rounded-3 lrv-fs-7 image">
                    <i class="lrv-fs-6 bi bi-heart-fill lrv-text-red-400 float-end"></i>
                </div>
            </a>
            <div class="col-12 px-0 pt-2">
                <h4 data-field="title" class="lrv-fs-7 name">Lorem Ipsum</h4>
                <h5 data-field="price" class="lrv-fs-6 price">Rs. 0,000.00</h5>
                <div class="d-flex gap-2">
                    <button class="lrv-btn-primary lrv-btn w-100">Add to Cart</button> <i class="lrv-btn-primary lrv-btn bi bi-trash-fill"></i>
                </div>
            </div>
        </div>
    </div>
</template>
