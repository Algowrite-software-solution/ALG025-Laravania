import Core from "../Core";
import Panel from "../Panel";

/**
 * dashboard functionalities will be handled here
 */
export class SeoPanel extends Panel {
    
    /**
     * @description
     * data to be used in the panel
     * @type {Object}
     * @property {Array<Object>} products - The products
     * @property {Array<Object>} mainCategories - The main categories
     * @property {Array<Object>} categories - The categories
     * @property {Array<Object>} subCategories - The sub categories
     */
    #data = {
        products: [],
        mainCategories: [],
        taxonomy: [],
        subCategories: [],
        seo: [],
        seoTypes: [],
        selectSeo: "",
        selectSeoType: "",
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
    loadData() {
        this.loadProducts();
        this.loadMainCategories();
        this.loadTaxonomies();
        this.loadSubCategories();
        this.loadSeo();
        this.loadSeoTypes();
    }

    /**
     * @description
     * Load products data and set the options
     */
    async loadProducts() {
        this.#data.products = await this.loadSelectOptionsFromRemote(
            "products",
            "seoProduct",
            "Select a product",
            "id",
            "title",
        );
    }

    /**
     * @description
     * Load main categories data and set the options
     */
    async loadMainCategories() {
        this.#data.mainCategories = await this.loadSelectOptionsFromRemote(
            "main-categories",
            "seoMainCategory",
            "Select a main category"
        );
    }

    /**
     * @description
     * Load taxonomies data and set the options
     */
    async loadTaxonomies() {
        this.#data.taxonomy = await this.loadSelectOptionsFromRemote(
            "taxonomies",
            "seoTaxonomy",
            "Select a taxonomy"
        );
    }
    
    async loadSeoTypes() {
        this.#data.seoType = await this.loadSelectOptionsFromRemote(
            "seo-type",
            "seoType",
            "Select a Seo Type",
            "id",
            "type",
        );

        this.loadSeoTypeTable();
    }

    /**
     * @description
     * Load sub categories data and set the options
     */
    async loadSubCategories() {
        this.#data.subCategories = await this.loadSelectOptionsFromRemote(
            "sub-categories",
            "seoSubCategory",
            "Select a sub category"
        );
    }

    /**
     * @description
     * Load seo data and set the options
     */
    async loadSeo() {
        this.#data.seo = await Core.RM.get(
            "/api/seo-config",
            null,
            {
                showToast: true,
                responseType: "json",
            }
        );

        this.loadSeoTable();
    }

    loadSeoTable() {
        Core.EDT.create("seoTable", {
            data: this.#data.seo,
            responsive: true,

            elements: [
                {
                    index: 3,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            this.setSeoInputs(row);;
                        };
                        domElement.classList.add("iz-btn", "iz-btn-primary");
                        return domElement;
                    },
                },
            ],
        });
    }

    loadSeoTypeTable() {
        Core.EDT.create("seoTypeTable", {
            data: this.#data.seoType,
            responsive: true,

            elements: [
                {
                    index: 2,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            this.setSeoTypeInputs(row);;
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
        this.addSeoButtonListener();
        this.clearSeoButtonListener();
        this.clearSeoTypeButtonListener();
        this.addSeoTypeButtonListener();
    }

    /**
     * @description
     * Add Seo Button click listener
     */
    clearSeoButtonListener() {
        document
            .getElementById("clearSeoButton")
            .addEventListener("click", this.clearSeo);
    }
    
    clearSeoTypeButtonListener() {
        document
            .getElementById("clearSeoTypeButton")
            .addEventListener("click", this.clearSeoType);
    }

    addSeoButtonListener() {
        document
            .getElementById("addSeoButton")
            .addEventListener("click",() => this.checkSeoPath());
    }

    addSeoTypeButtonListener() {
        document
            .getElementById("addSeoTypeButton")
            .addEventListener("click",() => this.checkSeoTypePath());
    }

    checkSeoPath() {
        let seoButton = document.getElementById("addSeoButton");
        if (seoButton.innerHTML === "Add SEO" && seoButton.classList.contains("addSeo")) {
            this.addSeo();
        } else if (seoButton.innerHTML === "Update SEO" && seoButton.classList.contains("updateSeo")) {
            this.updateSeo();
        }
    }

    checkSeoTypePath() {
        let seoTypeButton = document.getElementById("addSeoTypeButton");
        if (seoTypeButton.innerHTML === "Add SEO Type" && seoTypeButton.classList.contains("addSeoType")) {
            this.addSeoType();
        } else if (seoTypeButton.innerHTML === "Update SEO Type" && seoTypeButton.classList.contains("updateSeoType")) {
            this.updateSeoType();
        }
    }

    /**
     * @description
     * Add Seo Button click function
     */
    async addSeo() {
        const inputs = await Core.UIM.getInputs("seoInputContainer");
        const response = await Core.RM.post("/api/seo-config", inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
    }

    async updateSeo() {
        const inputs = await Core.UIM.getInputs("seoInputContainer");
        inputs.id = this.#data.selectSeo;
        const response = await Core.RM.put("/api/seo-config", inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
    }
    
    async addSeoType() {
        const inputs = await Core.UIM.getInputs("seoTypeInputContainer");
        const response = await Core.RM.post("/api/seo-type", inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
    }

    async updateSeoType() {
        const inputs = await Core.UIM.getInputs("seoTypeInputContainer");
        inputs.id = this.#data.seoType;
        const response = await Core.RM.put("/api/seo-type", inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
    }

    setSeoInputs(row) {
        let seoData = this.#data.seo;
        let selectSeoData = [];

        seoData.forEach(item => {
            if (item.id == row.id) {
                selectSeoData = item;
                this.#data.selectSeo = item.id;
            };
        });
        Core.UIM.fillData("seoInputContainer",selectSeoData);

        document
            .getElementById("addSeoButton")
            .innerHTML = "Update SEO";
            
        document
            .getElementById("addSeoButton")
            .classList.remove("addSeo");
            
        document
            .getElementById("addSeoButton")
            .classList.add("updateSeo");
    }

    setSeoTypeInputs(row) {
        let seoTypeData = this.#data.seoType;
        let selectSeoTypeData = [];

        seoTypeData.forEach(item => {
            if (item.id == row.id) {
                selectSeoTypeData = item;
                this.#data.seoType = item.id;
            };
        });
        Core.UIM.fillData("seoTypeInputContainer",selectSeoTypeData);

        document
            .getElementById("addSeoTypeButton")
            .innerHTML = "Update SEO Type";
            
        document
            .getElementById("addSeoTypeButton")
            .classList.remove("addSeoType");
            
        document
            .getElementById("addSeoTypeButton")
            .classList.add("updateSeoType");
    }

    clearSeo() {
        Core.UIM.clearInputs("seoInputContainer");

        document
            .getElementById("addSeoButton")
            .innerHTML = "Add SEO";
            
        document
            .getElementById("addSeoButton")
            .classList.remove("updateSeo");
            
        document
            .getElementById("addSeoButton")
            .classList.add("addSeo");
    }

    clearSeoType() {
        Core.UIM.clearInputs("seoTypeInputContainer");

        document
            .getElementById("addSeoTypeButton")
            .innerHTML = "Add SEO Type";
            
        document
            .getElementById("addSeoTypeButton")
            .classList.remove("updateSeoType");
            
        document
            .getElementById("addSeoTypeButton")
            .classList.add("addSeoType");
    }

}