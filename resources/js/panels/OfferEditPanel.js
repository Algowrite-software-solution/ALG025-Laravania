import Core from "../Core";
import Panel from "../Panel";

export class OfferEditPanel extends Panel {
    
    /**
     * @description
     * data to be used in the panel
     * @type {Object}
     * @property {Array<Object>} products - The products
     * @property {Array<Object>} offers - The offers
     */
    #data = {
        offers: [],
        products: [],
        taxonomies: [],
        subCategories: [],
        mainCategories: [],
    };

    constructor(config) {
        super(config);
    }

    init() {
       
    }

    boot() {
        this.loadData();
        this.#_init_listeners();
    }

     /**
     * @description
     * Load all data and UI initializations
     */
    async loadData() {
        this.loadOffers();
        this.loadOffersProducts();
        this.loadOffersTaxonomies();
        this.loadOffersSubCategories();
        this.loadOffersMainCategories();
    }

    /**
     * @description
     * Load offers data and set the options
     */
    async loadOffers() {
        this.#data.offers = await Core.RM.get(
            "/api/promotions",
            null,
            {
                responseType: "json",
            }
        );
        this.loadOfferTable();
    }

    async loadOffersProducts() {
        this.#data.products = await Core.RM.get(
            "/api/products",
            null,
            {
                responseType: "json",
            }
        );
    }
    
    async loadOffersTaxonomies() {
        this.#data.taxonomies = await Core.RM.get(
            "/api/taxonomies",
            null,
            {
                responseType: "json",
            }
        );
    }
    
    async loadOffersSubCategories() {
        this.#data.subCategories = await Core.RM.get(
            "/api/sub-categories",
            null,
            {
                responseType: "json",
            }
        );
    }
    
    async loadOffersMainCategories() {
        this.#data.mainCategories = await Core.RM.get(
            "/api/main-categories",
            null,
            {
                responseType: "json",
            }
        );
    }

    /**
     * @description
     * Load offer table
     */
    loadOfferTable() {

        Core.EDT.create("offerTable", {
            data: this.#data.offers,
            responsive: true,
            dom: '<"top"f>rt<"bottom"lip><"clear">',
            elements: [
                {
                    index: 6,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            this.loadOfferInputs(row);
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
     * Initialize all listeners
     */
    #_init_listeners() {
        this.searchProductNameOfferTabListener();
        this.addOfferButtonListener();
        this.removeOfferButtonListener();
        this.clearOfferButtonListener();
        this.offerTypeSelectListener();
    }

    /**
     * @description
     * Search Offer Product listener
     */
    searchProductNameOfferTabListener() {
        document
            .getElementById("searchProductNameOfferTab")
            .addEventListener("change", this.searchOfferProduct);
    }

    /**
     * @description
     * Add Seo Button click listener
     */
    addOfferButtonListener() {
        document
            .querySelector(".addOfferButton")
            .addEventListener("click", this.addOffer);
    }

    /**
     * @description
     * Update Offer Button click listener
     */
    updateOfferButtonListener() {
        document
            .querySelector(".updateOfferButton")
            .addEventListener("click", this.updateOffer);
    }

    /**
     * @description
     * Remove Offer Button click listener
     */
    removeOfferButtonListener() {
        document
            .getElementById("removeOfferButton")
            .addEventListener("click", this.removeOffer);
    }

    /**
     * @description
     * Clear Offer Button click listener
     */
    clearOfferButtonListener() {
        document
            .getElementById("clearOfferButton")
            .addEventListener("click", this.clearOffer);
    }

    offerTypeSelectListener() {

        document
            .getElementById("offerTypeSelect")
            .addEventListener("change", (event) =>  {
                const offerTypeSelectValue = event.target.value;

                switch (offerTypeSelectValue) {
                case "1":
                    this.setProductTable();
                    break;
                case "2":
                    this.setMainCategoryTable();
                    break;
                case "3":
                    this.setSubCategoryTable();
                    break;
                case "4":
                    this.setTaxonomiesTable();
                    break;
                default:
                    break;
                }
            });

    }

    /**
     * @description
     * Search Seo Product function
     */
    searchOfferProduct() {
        Core.debugLog("product searched");
        const inputs = Core.UIM.getInputs("searchProductNameOfferTabContainer");
        this.table
        .search(inputs.searchProductNameOfferTab)
        .draw();
    }

    /**
     * @description
     * Load offer inputs
     */
    loadOfferInputs(offer) {
        Core.UIM.fillData("offerTabEditForm", offer);
        document.getElementById("addOfferButton").innerHTML = "Update Offer";
        document.getElementById("addOfferButton").classList.add("updateOfferButton");
        document.getElementById("addOfferButton").classList.remove("addOfferButton");
    }

    /**
     * @description
     * Add Offer Button click function
     */
    async addOffer() {
        const inputs = Core.UIM.getInputs("offerTabEditForm", {});

        const response = await Core.RM.post(
            "/api/promotions",inputs,
            {
                showToast: true,
            }
        );
        
        if (response.status === 200) {
            this.loadOffers();
            Core.UIM.clearInputs("offerTabEditForm");
        }
    }

    async updateOffer() {
        const inputs = Core.UIM.getInputs("offerTabEditForm", {});

        const response = await Core.RM.put(
            "/api/promotions",inputs,
            {
                showToast: true,
            }
        );
        
        if (response.status === 200) {
            this.loadOffers();
        }
    }

    /**
     * @description
     * Remove Offer Button click function
     */
    async removeOffer() {
        const inputs = Core.UIM.getInputs("offerTabEditForm", {});

        const response = await Core.RM.delete(
            "/api/promotions",inputs,
            {
                showToast: true,
            }
        );
        
        if (response.status === 200) {
            this.loadOffers();
            Core.UIM.clearInputs("offerTabEditForm");
        }
    }

    /**
     * @description
     * Clear Offer Button click function
     */
    clearOffer() {
        Core.UIM.clearInputs("offerTabEditForm");
        document.getElementById("addOfferButton").innerHTML = "Add Offer";
        document.getElementById("addOfferButton").classList.remove("updateOfferButton");
        document.getElementById("addOfferButton").classList.add("addOfferButton");
    }

    setProductTable(){
        this.clearOfferTable("offerAllTypeTable");
        document.getElementById("offerAllTypeTable").innerHTML = `
            <thead>
                <tr class="topc-border-bottom">
                    <th data-column="id" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">ID</th>
                    <th data-column="title" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Title</th>
                    <th data-column="promotion_id" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Promotion ID</th>
                    <th data-column class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        `;
    
        this.loadOfferProductTable();
    }

    setMainCategoryTable(){
        this.clearOfferTable("offerAllTypeTable");
        document.getElementById("offerAllTypeTable").innerHTML = `
            <thead>
                <tr class="topc-border-bottom">
                    <th data-column="id" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">ID</th>
                    <th data-column="name" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Name</th>
                    <th data-column class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        `;
    
        this.loadOfferMainCategoryTable(); 
    }

    setSubCategoryTable(){
        this.clearOfferTable("offerAllTypeTable");
        document.getElementById("offerAllTypeTable").innerHTML = `
            <thead>
                <tr class="topc-border-bottom">
                    <th data-column="id" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">ID</th>
                    <th data-column="name" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Name</th>
                    <th data-column class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        `;

        this.loadOfferSubCategoryTable();
    }

    setTaxonomiesTable(){
        this.clearOfferTable("offerAllTypeTable");
        document.getElementById("offerAllTypeTable").innerHTML = `
            <thead>
                <tr class="topc-border-bottom">
                    <th data-column="id" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">ID</th>
                    <th data-column="name" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Name</th>
                    <th data-column="taxonomy_type_id" class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Taxonomy Type ID</th>
                    <th data-column class="topc-text-clr-2 text-start p-2 ps-0 pb-3">Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        `;
        
        this.loadOfferTaxonomiesTable();
    }
    
    loadOfferProductTable() {
        Core.EDT.create("offerAllTypeTable", {
            destroy: true, 
            data: this.#data.products,
            responsive: true,
            dom: '<"top"f>rt<"bottom"lip><"clear">',
            elements: [
                {
                    index: 3,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            console.log("Selected product: ", row);
                        };
                        domElement.classList.add("iz-btn", "iz-btn-primary");
                        return domElement;
                    },
                },
            ],
        });
    }
    
    loadOfferMainCategoryTable() {
        Core.EDT.create("offerAllTypeTable", {
            destroy: true,
            data: this.#data.mainCategories,
            responsive: true,
            dom: '<"top"f>rt<"bottom"lip><"clear">',
            elements: [
                {
                    index: 2,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select Category";
                        domElement.onclick = (e) => {
                            console.log("Selected category: ", row);
                        };
                        domElement.classList.add("iz-btn", "iz-btn-primary");
                        return domElement;
                    },
                },
            ],
        });
    }

    loadOfferSubCategoryTable() {
        Core.EDT.create("offerAllTypeTable", {
            data: this.#data.subCategories,
            destroy: true,
            responsive: true,
            dom: '<"top"f>rt<"bottom"lip><"clear">',
            elements: [
                {
                    index: 2,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            // this.loadOfferInputs(row);
                        };
                        domElement.classList.add("iz-btn", "iz-btn-primary");
                        return domElement;
                    },
                },
            ],
        });
    }
    
    loadOfferTaxonomiesTable() {
        Core.EDT.create("offerAllTypeTable", {
            data: this.#data.taxonomies,
            destroy: true,
            responsive: true,
            dom: '<"top"f>rt<"bottom"lip><"clear">',
            elements: [
                {
                    index: 3,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            // this.loadOfferInputs(row);
                        };
                        domElement.classList.add("iz-btn", "iz-btn-primary");
                        return domElement;
                    },
                },
            ],
        });
    }

    clearOfferTable(tableId) {
        Core.EDT.clearTable(tableId);
        document.getElementById(tableId).innerHTML = "";
    }
}