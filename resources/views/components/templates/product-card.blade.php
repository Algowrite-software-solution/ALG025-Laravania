<template data-tempalte-name="product-card">
    <div class="product-card d-flex flex-column gap-3 mx-0 mt-2 ">
        <a data-product-link href="#" class="col-12 px-0">
            <div class="w-100 m-0 row">
                <img class="product-preview" src="#" alt="Product image" />
            </div>
        </a>
        <div class="col-12 px-0">
            <div class="product-thumbnails">
                <img src="/resources/images/products/product_000.jpg" alt="product-000">
            </div>
            <h4 data-field="title"class="product-card-title " >Lorem Ipsum</h4>
            <h5 class="product-card-category"><span data-field="sub_category.main_category.name">Category</span>, <span
                    data-field="sub_category.name">Sub Category</span></h5>
            <h5 data-field="colors" class="product-card-colors overflow-hidden">0 Colors</h5>
            <h5 data-field="price" data-filter="formatPrice|price:LKR|colorSwatch:circle" class="product-card-price">Rs. 0,000.00</h5>
        </div>
    </div>
</template>
