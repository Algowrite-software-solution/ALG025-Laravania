import Core from "../Core";
import Panel from "../Panel";
import ProductCard from "../UI/components/ProductCard";

/**
 * dashboard functionalities will be handled here
 */
export class AddStockPanel extends Panel {
    
    #data = {
        products: [],
        stocks: [],
        stockVariations: [],
        variation: [],
        variationOption: [],
        selectedvariationOptions: [],
        selectStock: [],
        selectStockVariation: [],
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
        this.loadStocks();
        this.loadStocksVariations();
        this.loadVariation();
        this.loadVariationOption();
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

        this.loadProductsTable();
    }

    loadProductsTable() {
        Core.EDT.create("tabAddStockProductsTable", {
            data: this.#data.products,
            responsive: true,

            elements: [
                {
                    index: 3,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            this.setSelectProduct(row);;
                            this.productPreviewCardLoader(row);
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
     * Load stocks data and set the options
     */
    async loadStocks() {
        this.#data.stocks = await Core.RM.get(
            "/api/stocks",
            null,
            {
                responseType: "json",
            }
        );
        this.loadStocksTable();
        
    }

    async loadStocksVariations() {
        this.#data.stockVariations = await Core.RM.get(
            "/api/stock-variations",
            null,
            {
                responseType: "json",
            }
        );
        this.loadStocksVariationsTable();
        
    }

    loadStocksTable() {

        Core.EDT.clearTable("tabAddStockStocksTable");

        Core.EDT.create("tabAddStockStocksTable", {
            data: this.#data.stocks,
            responsive: true,
            destroy: true,
            elements: [
                {
                    index: 3,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            this.setStockInputs(row);;
                        };
                        domElement.classList.add("iz-btn", "iz-btn-primary");
                        return domElement;
                    },
                },
            ],
        });
    }

    loadStocksVariationsTable() {

        Core.EDT.clearTable("tabAddStockVariationTable");

        Core.EDT.create("tabAddStockVariationTable", {
            data: this.#data.stockVariations,
            responsive: true,
            destroy: true,
            elements: [
                {
                    index: 4,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            this.setStockVariationsInputs(row);;
                        };
                        domElement.classList.add("iz-btn", "iz-btn-primary");
                        return domElement;
                    },
                },
            ],
        });
    }

    async loadVariation() {

        this.#data.variation = await this.loadSelectOptionsFromRemote(
            "variations",
            "addStockVariation",
            "Select a variations",
        );

        await this.loadSelectOptionsFromRemote(
            "variations",
            "addStockVariationVariation",
            "Select a variations",
        );
        
    }
    
    async loadVariationOption() {

        this.#data.variationOption = await this.loadSelectOptionsFromRemote(
            "variation-options",
            "addStockVariationOption",
            "Select a Variation Option",
            "id",
            "variation_option",
        );

        await this.loadSelectOptionsFromRemote(
            "variation-options",
            "addStockVariationOptionVariation",
            "Select a Variation Option",
            "id",
            "variation_option",
        );
        
    }

    /**
     * @description
     * load the men product cards for the home page
     *
     * @param {Array} dataList - the data list for the product cards
     */
    productPreviewCardLoader() {

        const productCard = new ProductCard({
            title: "Product 1",
            price: 100,
            image: "/images/product1.jpg",
        });

        document
            .getElementById("addProductPreviewContainer")
            .appendChild(productCard.loadComponent());
    }

    /**
     * @description
     * Initialize all listeners
     */
    #_init_listeners() {
        this.addProductAddButtonListener();
        this.addStockVariationOptionSelectListener();
        this.addStockButtonListener();
        this.addStockVariationButtonListener();
        this.addStockRemoveButtonListener();
        this.addStockVariationRemoveButtonListener();
        this.clearStockButtonListener();
        this.clearStockVariationButtonListener();
        this.resetStockButtonListener();
        this.resetStockVariationButtonListener();
    }

    /**
     * @description
     * Add product button click listener
     */
    addProductAddButtonListener() {
        document
            .getElementById("addStockButton")
            .addEventListener("click", this.addProduct);
    }
    
    addStockVariationOptionSelectListener() {
        // document
        //     .getElementById("addStockVariationOption")
        //     .addEventListener("change", this.variationOptionSelectUpdates.bind(this));
    }

    addStockButtonListener() {
        document
            .getElementById("addStockButton")
            .addEventListener("click",() => this.checkStockPath());
    }

    addStockVariationButtonListener() {
        document
            .getElementById("addStockVariationButton")
            .addEventListener("click",() => this.checkStockVariationPath());
    }

    addStockRemoveButtonListener() {
        document
            .getElementById("addStockRemoveButton")
            .addEventListener("click", this.stockRemove);
    }

    addStockVariationRemoveButtonListener() {
        document
            .getElementById("addStockVariationRemoveButton")
            .addEventListener("click", this.stockVariationRemove);
    }

    resetStockButtonListener() {
        document
            .getElementById("resetStockButton")
            .addEventListener("click", () => this.loadStocksTable());
    }

    resetStockVariationButtonListener() {
        document
            .getElementById("resetStockVariationButton")
            .addEventListener("click", () => this.loadStocksVariationsTable());
    }

    clearStockButtonListener() {
        document
            .getElementById("clearStockButton")
            .addEventListener("click", this.clearStockInputs);
    }

    clearStockVariationButtonListener() {
        document
            .getElementById("clearStockVariationButton")
            .addEventListener("click", this.clearStockVariationInputs);
    }
    
    /**
     * @description
     * Add stock function
     */
    async addStock() {
        const inputs = Core.UIM.getInputs("addStockContainer");

        await Core.RM.post("/api/stocks",inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
    }

    async addStockVariation() {
        const inputs = Core.UIM.getInputs("addStockVariationContainer");

        await Core.RM.post("/api/stock-variations",inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
    }

    async updateStock() {
        const inputs = Core.UIM.getInputs("addStockContainer");

        await Core.RM.put("/api/stocks",inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
    }

    async updateStockVariation() {
        const inputs = Core.UIM.getInputs("addStockVariationContainer");

        await Core.RM.put("/api/stock-variations",inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
    }

    setSelectProduct(row){
        let matchingStock = [];

        this.#data.stocks.forEach(item => {
            if (item.product_id === row.id) {
                matchingStock.push(item);
            }
        });

       Core.EDT.clearTable("tabAddStockStocksTable");
        
        Core.EDT.create("tabAddStockStocksTable", {
            data: matchingStock,
            responsive: true,
            destroy: true,
            elements: [
                {
                    index: 3,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            this.setStockInputs(row);;
                        };
                        domElement.classList.add("iz-btn", "iz-btn-primary");
                        return domElement;
                    },
                },
            ],
        });

    }

    setStockInputs(row) {
        let matchingStock = [];

        this.#data.stocks.forEach(item => {
            if (item.id == row.id) {
                Core.UIM.fillData("addStockContainer",row);
                this.#data.selectStock = item;
            };
        });

        this.#data.stockVariations.forEach(item => {
            if (item.stock_id == row.id) {
                matchingStock.push(item);
            };
        });

        document.getElementById("addStockButton").innerHTML = "Update Stock";
        document.getElementById("addStockButton").classList.add("addStockButton");
        document.getElementById("addStockButton").classList.remove("updateStockButton");
        
        Core.EDT.clearTable("tabAddStockVariationTable");

        Core.EDT.create("tabAddStockVariationTable", {
            data: matchingStock,
            responsive: true,
            destroy: true,
            elements: [
                {
                    index: 4,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            this.setStockVariationsInputs(row);;
                        };
                        domElement.classList.add("iz-btn", "iz-btn-primary");
                        return domElement;
                    },
                },
            ],
        });
    }

    setStockVariationsInputs(row) {
        this.#data.stockVariations.forEach(item => {
            if (item.id == row.id) {
                Core.UIM.fillData("addStockVariationContainer",row);
                this.#data.selectStockVariation = item;
            };
        });
        document.getElementById("addStockVariationButton").innerHTML = "Update Stock Variation";
        document.getElementById("addStockVariationButton").classList.add("addStockVariationButton");
        document.getElementById("addStockVariationButton").classList.remove("updateStockVariationButton");
    }

    async stockRemove() {
        const inputs = this.#data.selectStock;

        await Core.RM.put("/api/stocks",inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
    }

    async stockVariationRemove() {
        const inputs = this.#data.selectStockVariation;

        await Core.RM.delete("/api/stock-variations",inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
    }

    checkStockPath() {
        let stockButton = document.getElementById("addStockButton");
        if (stockButton.innerHTML === "Add Stock" && stockButton.classList.contains("addStockButton")) {
            this.addStock();
        } else if (stockButton.innerHTML === "Update Stock" && stockButton.classList.contains("updateStockButton")) {
            this.updateStock();
        }
    }

    checkStockVariationPath() {
        let stockButton = document.getElementById("addStockVariationButton");
        if (stockButton.innerHTML === "Add Stock Variation" && stockButton.classList.contains("addStockVariationButton")) {
            this.addStockVariation();
        } else if (stockButton.innerHTML === "Update Stock Variation" && stockButton.classList.contains("updateStockVariationButton")) {
            this.updateStockVariation();
        }
    }

    clearStockInputs() {
        Core.UIM.clearInputs("addStockContainer");
        document.getElementById("addStockButton").innerHTML = "Add Stock";
        document.getElementById("addStockButton").classList.remove("updateStockButton");
        document.getElementById("addStockButton").classList.add("addStockButton");
    }

    clearStockVariationInputs() {
        Core.UIM.clearInputs("addStockVariationContainer");
        document.getElementById("addStockVariationButton").innerHTML = "Add Stock Variation";
        document.getElementById("addStockVariationButton").classList.remove("updateStocVariationkButton");
        document.getElementById("addStockVariationButton").classList.add("addStockVariationButton");
    }

    productPreviewCardLoader(row) {

        const selectedProduct = this.#data.products.find(product => product.id === row.id);

        if (selectedProduct) {
            const productCard = new ProductCard(selectedProduct);
            
            document
                .getElementById("product-card-container-addstockpage")
                .innerHTML = "";

            document
                .getElementById("product-card-container-addstockpage")
                .appendChild(productCard.getComponent());
        } else {
            console.error('Product with the given ID not found.');
        }
    }

    variationOptionSelectUpdates(){

        const stockVariationOptionSelect = document.getElementById("addStockVariationOption");
        const stockVariationSelect = document.getElementById("addStockVariation");

        const stockVariationData = this.#data.variation;
        const stockVariationOptionData = this.#data.variationOption;
        let selectedstockVariationOptionsData = this.#data.selectedvariationOptions;

        let selectedStockVariationOptionId = stockVariationOptionSelect.value;
        let selectedStockVariationOptionName = "";
        let selectedStockVariationId = "";
        let selectedStockVariationName = "";

        stockVariationOptionData.forEach(item => {
            if (item.id == selectedStockVariationOptionId) {
                selectedStockVariationOptionName = item.variation_option;
                selectedStockVariationId = item.variation_id;
            };
        });

        stockVariationData.forEach(item => {
            if (item.id == selectedStockVariationId) {
                selectedStockVariationName = item.name;
            };
        });

        stockVariationSelect.value = selectedStockVariationId;

        const newSelectedVariationOptions = {
            id:selectedStockVariationOptionId,
            variation_options:selectedStockVariationOptionName,
            variation_id:selectedStockVariationId,
            variation_name:selectedStockVariationName,
        }

        const isAlreadySelected = selectedstockVariationOptionsData.find(item => item.id == selectedStockVariationOptionId);

        if (isAlreadySelected) {

        }else{
            selectedstockVariationOptionsData.push(newSelectedVariationOptions);
            this.#data.selectedvariationOptions = selectedstockVariationOptionsData;
            this.updateVariationOptionList();
        }

    }

    updateVariationOptionList() {

        let selectedstockVariationOptionsData = this.#data.selectedvariationOptions;
        
        const variationOptionList = document.getElementById("addStockVariationOptionList");
        variationOptionList.innerHTML = '';

        selectedstockVariationOptionsData.forEach(item => {
            const listItem = document.createElement("li");
            listItem.className = "taxonomy-list-item";
            listItem.textContent = item.variation_name+" - "+item.variation_options;

            const removeButton = document.createElement("span");
            removeButton.className = "remove-button";
            removeButton.textContent = "Remove";
            removeButton.addEventListener("click", () => {
                this.removeVariationOption(item.id);
            });

            listItem.appendChild(removeButton);
            variationOptionList.appendChild(listItem);
        });
    }

    removeVariationOption(id) {
        let selectedstockVariationOptionsData = this.#data.selectedvariationOptions;
        const index = selectedstockVariationOptionsData.findIndex(item => item.id === id);
        if (index !== -1) {
            selectedstockVariationOptionsData.splice(index, 1);
            this.variationOptionSelectUpdates();
        }
    }
    
}
