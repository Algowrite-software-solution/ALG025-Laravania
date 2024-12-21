import Core from "../Core";
import Panel from "../Panel";
import ProductCard from "../UI/components/ProductCard";
import Filter from "../modules/optional/dataFilter/Filter";

/**
 * dashboard functionalities will be handled here
 */
export class ViewProductPanel extends Panel {
    
    /**
     * @description
     * data to be used in the panel
     * @type {Object}
     * @property {Array<Object>} products - The products
     * @property {Array<Object>} mainCategories - The main categories
     * @property {Array<Object>} taxonomies - The taxonomies
     * @property {Array<Object>} subCategories - The sub categories
     */
    #data = {
        products: [],
        mainCategories: [],
        taxonomies: [],
        subCategories: [],
        status: [],
        selectProduct: [],
    };

    constructor(config) {
        super(config);
    }

    init() {}

    boot() {
        this.loadData();
        this.#_init_listeners();
        this.#imagePickerSetter();
    }

    /**
     * @description
     * Load all data and UI initializations
     */
    loadData() {
        this.loadProducts();
        this.loadMainCategories();
        this.loadTaxonomies();
        this.loadSubCategories();
        this.loadStatus();
        this.loadPromotion();
        this.loadTaxonomyType();
        this.loadTaxonomyName();
    }

    /**
     * @description
     * Load products data and set the options
     */
    async loadProducts() {
        this.#data.products = await Core.RM.get(
            "/api/products",
            null,
            {
                responseType: "json",
            }
        );
        console.log(this.#data.products);

        this.loadProductsTable();
    }

    loadProductsTable() {
        Core.EDT.create("tabviewsProductsTable", {
            data: this.#data.products,
            responsive: true,

            elements: [
                {
                    index: 0,
                    comp: (data, type, row) => {

                        var domElement = document.createElement("a");
                        domElement.innerText = row.id;
                        domElement.setAttribute('role', 'button');
                        domElement.setAttribute('data-bs-toggle', 'modal');
                        domElement.setAttribute('data-bs-target', '#viewProductViewModal');
                        domElement.onclick = (e) => {
                            this.productPreviewCardLoader(row,"tab-viewproduct-s1-model1-div1");
                        };
                        domElement.classList.add("p-2", "iz-text-dark");
                        return domElement;
                    },
                },
                // {
                //     index: 4,
                //     comp: (data, type, row) => {

                //         const mainDivElement = document.createElement('div');
                //         mainDivElement.classList.add('d-flex', 'justify-content-center');

                //         const divElement = document.createElement('div');
                //         divElement.classList.add('iz-form-check', 'form-switch');

                //         const inputElement = document.createElement('input');
                //         inputElement.classList.add('atpv-status', 'form-check-input', 'topc-s1-switch');
                //         inputElement.type = 'checkbox';
                //         inputElement.setAttribute('role', 'switch');

                //         divElement.appendChild(inputElement);
                //         mainDivElement.appendChild(divElement);
                //         return mainDivElement;

                        
                //     },
                // },
                {
                    index: 5,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            this.setViewProductsViewInputs(row);
                            this.productPreviewCardLoader(row,"viewProductViewPreviewContainer");
                        };
                        domElement.classList.add("iz-btn", "iz-btn-primary");
                        return domElement;
                    },
                },
            ],
        });
    }

    /**
     * @description
     * Load main categories data and set the options
     */
    loadMainCategories() {
        this.#data.mainCategories = this.loadSelectOptionsFromRemote(
            "main-categories",
            "tabviewsMainCategory",
            "Select a main category"
        );

        this.loadSelectOptionsFromRemote(
            "main-categories",
            "viewProductViewMainCategory",
            "Select a main category"
        );
    }

    /**
     * @description
     * Load taxonomies data and set the options
     */
    loadTaxonomies() {
        
        this.#data.taxonomies = this.loadSelectOptionsFromRemote(
            "taxonomies",
            "tabviewsTaxonomy",
            "Select a Taxonomies"
        );
    }

    /**
     * @description
     * Load sub categories data and set the options
     */
    async loadSubCategories() {
        this.#data.taxonomies = this.loadSelectOptionsFromRemote(
            "sub-categories",
            "tabviewsSubCategory",
            "Select a sub category"
        );

        this.loadSelectOptionsFromRemote(
            "sub-categories",
            "viewProductViewSubCategory",
            "Select a sub category"
        );
    }

    /**
     * @description
     * Load status data and set the options
     */
    async loadStatus() {
        this.#data.taxonomies = this.loadSelectOptionsFromRemote(
            "conditions",
            "tabviewsSearchStatus",
            "Select a status"
        );

        this.loadSelectOptionsFromRemote(
            "conditions",
            "viewProductViewStatus",
            "Select a status"
        );

    }

    async loadPromotion() {
        this.#data.promotion = await this.loadSelectOptionsFromRemote(
            "promotions",
            "viewProductViewPromotion",
            "Select a Promotion",
            "id",
            "title",
        );
    }

    async loadTaxonomyType() {
        this.#data.taxonomyType = await this.loadSelectOptionsFromRemote(
            "taxonomy-types",
            "viewProductViewTaxonomyType",
            "Select a Taxonomy Types",
            "id",
            "type",
        );
    }

    async loadTaxonomyName() {
        this.#data.taxonomyName = await this.loadSelectOptionsFromRemote(
            "taxonomies",
            "viewProductViewTaxonomyName",
            "Select a Taxonomy Names",
        );
    }
    
    #imagePickerSetter() {
        Core.ImageInputManager.createImagePicker(
            document.getElementById("viewProductViewImagePicker")
        );
    }

    /**
     * @description
     * Initialize all listeners
     */
    #_init_listeners() {
        this.viewProductSearchListener();
    }

    /**
     * @description
     * Search View Product listener
     */
    viewProductSearchListener() {
        document
            .getElementById("tabviewsMainCategory")
            .addEventListener("change", this.searchViewProduct);
            
        document
        .getElementById("tabviewsTaxonomy")
        .addEventListener("change", this.searchViewProduct);
        
        document
            .getElementById("tabviewsSubCategory")
            .addEventListener("change", this.searchViewProduct);
            
        document
        .getElementById("tabviewsSearchName")
        .addEventListener("change", this.searchViewProduct);
        
        document
            .getElementById("tabviewsSearchPrice")
            .addEventListener("change", this.searchViewProduct);
            
        document
        .getElementById("tabviewsSearchStatus")
        .addEventListener("change", this.searchViewProduct);
        
    }
    
    viewProductViewUpdateButtonListener() {
        document
            .getElementById("viewProductViewUpdateButton")
            .addEventListener("click", this.updateProduct);  
    }
    
    viewProductViewRemoveButtonListener() {
        document
            .getElementById("viewProductViewRemoveButton")
            .addEventListener("click", this.removeProduct);  
    }

    /**
     * @description
     * Search view Product function
     */
    searchViewProduct() {
        Core.debugLog("product searched");
    }

    setViewProductsViewInputs(row) {
        let selectedProductData = "";

        const images = Core.ImageInputManager.getPicker(
            document.getElementById("viewProductViewImagePicker")
        );

        this.#data.products.forEach(item => {
            if (item.id == row.id) {
                selectedProductData = item;
            };
        });

        document.getElementById("viewProductViewInputGroup").classList.remove("d-none");

        this.#data.selectProduct = selectedProductData;

        if (selectedProductData) {
            Core.UIM.fillData("viewProductViewInputGroup", row);

            selectedProductData.images.forEach(image => {
                const formattedImage = {
                    src: image.path,
                    name: `image_${image.id}`,
                };
    
                images.picker.addImage(formattedImage);
            });
        } else {
            console.error("Product not found for row id:", row.id);
        }
    }

    productPreviewCardLoader(row,id) {

        const selectedProduct = this.#data.products.find(product => product.id === row.id);

        if (selectedProduct) {
            const productCard = new ProductCard(selectedProduct);
            
            document
                .getElementById(id)
                .innerHTML = "";

            document
                .getElementById(id)
                .appendChild(productCard.getComponent());
        } else {
            console.error('Product with the given ID not found.');
        }
    }

    async updateProduct() {

        const inputs = Core.UIM.getInputs("viewProductViewInputGroup", {});
        inputs.admin_id = 1;
        inputs.images = [];

        const images = Core.ImageInputManager.getPicker(
            document.getElementById("viewProductViewImagePicker")
        );

        images.picker.getImageFiles().forEach((element, index) => {
            inputs.images["image_" + index] = element;
        });
        
        await Core.RM.put("/api/products", inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
        images.picker.clear();

        document.getElementById("viewProductViewInputGroup").classList.add("d-none");
    }

    async removeProduct() {
        let selectedProductData = this.#data.selectProduct;
        Core.UIM.clearInputs("viewProductViewInputGroup");
        const images = Core.ImageInputManager.getPicker(
            document.getElementById("viewProductViewImagePicker")
        );
        images.picker.clear();

        await Core.RM.delete("/api/products", selectedProductData, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
        
        document.getElementById("viewProductViewInputGroup").classList.add("d-none");
    }

}