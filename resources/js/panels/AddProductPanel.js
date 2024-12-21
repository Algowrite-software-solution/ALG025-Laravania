import Admin from "../Admin";
import Core from "../Core";
import Panel from "../Panel";
import ProductCard from "../UI/components/ProductCard";
import Filter from "../modules/optional/dataFilter/Filter";

export class AddProductPanel extends Panel {
    /**
     * @description
     * data to be used in the panel
     * @type {Object}
     * @property {Array<Object>} mainCategories - The main categories
     * @property {Array<Object>} subCategories - The sub categories
     * @property {Array<Object>} materials - The materials
     * @property {Array<Object>} newly_arrived - The newly arrived
     * @property {Array<Object>} status - The status
     * @property {Array<Object>} taxonomy - The taxonomy
     */
    #data = {
        mainCategories: [],
        subCategories: [],
        promotion: [],
        newly_arrived: [],
        status: [],
        taxonomyType: [],
        taxonomyName: [],
        selectedTaxonomies: [],
        productCardPreview: {
            title: "Product Card Title",
            description: "Description goes here...",
            price: 0,
            sub_category: {
                name: "Sub Category",
                main_category: {
                    name: "Main Category",
                },
            },
            images: [
                {
                    path: "https://via.placeholder.com/640x480.png/008888?text=sed",
                },
                {
                    path: "https://via.placeholder.com/640x480.png/00ff55?text=itaque",
                },
                {
                    path: "https://via.placeholder.com/640x480.png/0066bb?text=dicta",
                },
            ],
        },
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

    #imagePickerSetter() {
        Core.ImageInputManager.createImagePicker(
            document.getElementById("addProductImagePicker")
        );
    }

    /**
     * @description
     * Load all data and UI initializations
     */
    loadData() {
        this.loadMainCategories();
        this.loadSubCategories();
        this.loadPromotion();
        this.loadStatus();
        this.loadTaxonomyType();
        this.loadTaxonomyName();
        this.productPreviewCardLoader();
    }

    /**
     * @description
     * Load main categories data and set the options
     */
    async loadMainCategories() {
        this.#data.mainCategories = this.loadSelectOptionsFromRemote(
            "main-categories",
            "addProductMainCategory",
            "Select a Main Category"
        );
    }

    /**
     * @description
     * Load sub categories data and set the options
     */
    async loadSubCategories() {
        this.#data.subCategories = this.loadSelectOptionsFromRemote(
            "sub-categories",
            "addProductSubCategory",
            "Select a sub category"
        );
    }

    async loadTaxonomyType() {
        this.#data.taxonomyType = await this.loadSelectOptionsFromRemote(
            "taxonomy-types",
            "addProductTaxonomyType",
            "Select a Taxonomy Types",
            "id",
            "type",
        );
    }

    async loadTaxonomyName() {
        this.#data.taxonomyName = await this.loadSelectOptionsFromRemote(
            "taxonomies",
            "addProductTaxonomyName",
            "Select a Taxonomy Names",
        );
    }

    /**
     * @description
     * Load materials data and set the options
     */
    async loadPromotion() {
        this.#data.promotion = await this.loadSelectOptionsFromRemote(
            "promotions",
            "addProductPromotion",
            "Select a Promotion",
            "id",
            "title",
        );
    }

    /**
     * @description
     * Load status data and set the options
     */
    async loadStatus() {
        this.#data.status = this.loadSelectOptionsFromRemote(
            "conditions",
            "addProductStatus",
            "Select a status"
        );
    }

    /**
     * @description
     * load product cards for the preview
     *
     * @param {Array} dataList - the data list for the product cards
     */
    productPreviewCardLoader() {
        const productCard = new ProductCard(this.#data.productCardPreview);
        document
            .getElementById("addProductPreviewContainer")
            .appendChild(productCard.getComponent());
    }

    /**
     * @description
     * Initialize all listeners
     */
    #_init_listeners() {
        this.addProductAddButtonListener();
        this.updateProductPreviewCardListener();
        this.addProductTaxonomyNameSelectListener();
    }

    /**
     * @description
     * Add product button click listener
     */
    addProductAddButtonListener() {
        document
            .getElementById("addProductButton")
            .addEventListener("click", this.addProduct);
    }

    /**
     * @description
     * Update the product preview card title
     */
    updateProductPreviewCardListener() {

        document
            .getElementById("addProductName")
            .addEventListener("change", this.updateProductPreviewCardTitle);

        document
            .getElementById("addProductPrice")
            .addEventListener("change", this.updateProductPreviewCardPrice);
            
        document
            .getElementById("addProductMainCategory")
            .addEventListener("change", this.updateProductPreviewCardMainCategory);
            
        document
                .getElementById("addProductSubCategory")
                .addEventListener("change", this.updateProductPreviewCardSubCategory);

        
    }
    
    addProductTaxonomyNameSelectListener() {
        document
            .getElementById("addProductTaxonomyName")
            .addEventListener("change", this.taxonomyNameSelectUpdates.bind(this));
    }

    /**
     * @description
     * Add product function
     */
    async addProduct() {

        const inputs = Core.UIM.getInputs("productAddInputGroup", {});
        inputs.admin_id = 1;
        inputs.images = [];

        const images = Core.ImageInputManager.getPicker(
            document.getElementById("addProductImagePicker")
        );

        // console.log(images);
        // console.log(images.picker.getImageFiles()); // send this req as a form data format with post method by adding these data to the ovject
        // like this
        images.picker.getImageFiles().forEach((element, index) => {
            inputs.images["image_" + index] = element;
        });
        // images.picker.clear();
        console.log(inputs);
        // console.log(images.picker.getImageFiles());
        
        const response = await Core.RM.post("/api/products", inputs, {
            requestType: "formData",
            responseType: "json",
            showToast: true,
        });
        // Core.UIM.clearInputs("productAddInputGroup");
        // images.picker.clear();
        // console.log(response);
    }
    
    /**
     * @description
     * Update the product preview card title
     */
    updateProductPreviewCardTitle() {

        const inputs = Core.UIM.getInputs("productAddInputGroup", {});
        document.querySelector(".product-card-title").innerHTML = inputs.product_name;

    }

    /**
     * @description
     * Update the product preview card price
     */
    updateProductPreviewCardPrice() {

        const inputs = Core.UIM.getInputs("productAddInputGroup", {});
        document.querySelector(".product-card-price").textContent = inputs.price;

    }

    /**
     * @description
     * Update the product preview card main category
     */
    async updateProductPreviewCardMainCategory() {

        const inputs = Core.UIM.getInputs("productAddInputGroup", {});
        let mainCategory = await Core.SS.search("main-categories");

        mainCategory.forEach(category => {
            if (category.id == inputs.main_category) {
                document.querySelector('[data-field="sub_category.main_category.name"]').innerHTML = category.name;
            }else{
                console.log("not found");
            }
        });

    }

    /**
     * @description
     * Update the product preview card sub category
     */
    async updateProductPreviewCardSubCategory() {

        const inputs = Core.UIM.getInputs("productAddInputGroup", {});
        let subCategory = await Core.SS.search("sub-categories");

        subCategory.forEach(category => {
            if (category.id == inputs.sub_category) {
                document.querySelector('[data-field="sub_category.name"]').innerHTML = category.name;
            }else{
                console.log("not found");
            }
        });
    }

    taxonomyNameSelectUpdates(){

        const taxonomyNameSelect = document.getElementById("addProductTaxonomyName");
        const taxonomyTypeSelect = document.getElementById("addProductTaxonomyType");

        const taxonomyNameData = this.#data.taxonomyName;
        const taxonomyTypeData = this.#data.taxonomyType;
        let selectedTaxonomiesData = this.#data.selectedTaxonomies;

        let selectedTaxonomyId = taxonomyNameSelect.value;
        let selectedTaxonomyName = "";
        let selectedTaxonomyTypeId = "";
        let selectedTaxonomyTypeName = "";

        taxonomyNameData.forEach(item => {
            if (item.id == selectedTaxonomyId) {
                selectedTaxonomyName = item.name;
                selectedTaxonomyTypeId = item.taxonomy_type_id;
            };
        });

        taxonomyTypeData.forEach(item => {
            if (item.id == selectedTaxonomyTypeId) {
                selectedTaxonomyTypeName = item.type;
            };
        });

        taxonomyTypeSelect.value = selectedTaxonomyTypeId;

        const newSelectedTaxonomies = {
            id:selectedTaxonomyId,
            name:selectedTaxonomyName,
            type_id:selectedTaxonomyTypeId,
            type_name:selectedTaxonomyTypeName,
        }

        const isAlreadySelected = selectedTaxonomiesData.find(item => item.id == selectedTaxonomyId);

        if (isAlreadySelected) {

        }else{
            selectedTaxonomiesData.push(newSelectedTaxonomies);
            this.#data.selectedTaxonomies = selectedTaxonomiesData;
            this.updateTaxonomyList();
        }
    }

    updateTaxonomyList() {

        let selectedTaxonomiesData = this.#data.selectedTaxonomies;
        
        const taxonomyList = document.getElementById("addProductTaxonomyList");
        taxonomyList.innerHTML = '';

        selectedTaxonomiesData.forEach(taxonomy => {
            const listItem = document.createElement("li");
            listItem.className = "taxonomy-list-item";
            listItem.textContent = taxonomy.type_name+" - "+taxonomy.name;

            const removeButton = document.createElement("span");
            removeButton.className = "remove-button";
            removeButton.textContent = "Remove";
            removeButton.addEventListener("click", () => {
                this.removeTaxonomy(taxonomy.id);
            });

            listItem.appendChild(removeButton);
            taxonomyList.appendChild(listItem);
        });
    }

    removeTaxonomy(id) {
        let selectedTaxonomiesData = this.#data.selectedTaxonomies;
        const index = selectedTaxonomiesData.findIndex(t => t.id === id);
        if (index !== -1) {
            selectedTaxonomiesData.splice(index, 1);
            this.updateTaxonomyList();
        }
    }
}
