import Core from "../Core";
import Panel from "../Panel";

/**
 * InventoryPanel functionalities will be handled here
 */
export class InventoryPanel extends Panel {
     
    /**
     * @description
     * data to be used in the panel
     * @type {Object}
     */
    #data = {
        stocks: [],
    }

    constructor(config) {
        super(config);
    }

    init() {}

    boot() {
        this.loadData();
        this.#_init_listeners();

    }

    /**
     * @description
     * Load all data and UI initializations
     */
    loadData() {
        this.loadStock();
    }

    /**
     * @description
     * Load orders data and set the options
     */
    loadStock() {
        // Dataset
        const dataset = "324234, HP Core i7 Laptop, Accessories, Razor, Mouse, None, Brand new, 3 Yr, 30";

        // Parse the dataset into an object
        const [stockID, productTitle, category, brand, component, Capacity, condition, warranty, qty,] = dataset.split(", ");
        const stock = {
        stockID,
        productTitle,
        category,
        brand,
        component,
        Capacity,
        condition,
        warranty,
        qty,
        };

        // Add the job to this.#data.stocks
        this.#data.stocks.push(stock);

        // Check the updated jobs
        console.log(this.#data.stocks);
        this.loadStockTable();
          
    }

    /**
     * @description
     * Load stocks data and set to table
     */
    loadStockTable() {

        Core.EDT.clearTable("inventory-panel-stock-table");

        Core.EDT.create("inventory-panel-stock-table", {
            data: this.#data.stocks,
            responsive: true,
            destroy: true,
            elements: [],
        });
    }

    /**
     * @description
     * Initialize all listeners
     */
    #_init_listeners() {
        this.updateAmountListener();
    }

    updateAmountListener() {
        document
            .querySelectorAll('.lrv-admin-inventory-panel-qty-input, .lrv-admin-inventory-panel-rate-input')
            .addEventListener("change",() => this.updateAmount());
    }
      
    updateAmount() {
        const bipQtyValue = document.querySelectorAll('.lrv-admin-inventory-panel-qty-input').value;
        const bipRateValue = document.querySelectorAll('.lrv-admin-inventory-panel-rate-input').value;
        const bipAmountP = document.querySelectorAll('.lrv-admin-inventory-panel-amout-p');
        
        const bipTotal = parseFloat(bipQtyValue) * parseFloat(bipRateValue);
        bipAmountP.textContent = `Rs. ${bipTotal.toFixed(2)}`;
    }

}