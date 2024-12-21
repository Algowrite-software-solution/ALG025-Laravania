import Admin from "../Admin";
import Core from "../Core";
import Panel from "../Panel";

/**
 * dashboard functionalities will be handled here
 */
export class OrderHistoryPanel extends Panel {
    
    /**
     * @description
     * data to be used in the panel
     * @type {Object}
     * @property {Array<Object>} orders - The orders
     */
    #data = {
        orders: [],
        selectUserOrders: [],
    }
    
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
        this.loadOrders();
    }

    async loadOrders() {

        this.#data.orders = await Core.RM.get(
            "/api/all/order-history",
            null,
            {
                responseType: "json",
            }
        );
        console.log(this.#data.orders);
        this.#data.selectUserOrders = this.getOrdersByUserId(Admin.temp);
        Admin.temp = null;
        this.loadOrdersHistoryTable();
    }

    getOrdersByUserId(userId) {
        return this.#data.orders.filter(order => order.user_id === userId);
    }

    loadOrdersHistoryTable() {

        Core.EDT.clearTable("tabOrderHistoryTable");

        Core.EDT.create("tabOrderHistoryTable", {
            data: this.#data.selectUserOrders,
            responsive: true,
            destroy: true,
            elements: [
                {
                    index: 4,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            // this.setStockInputs(row);
                        };
                        domElement.classList.add("iz-btn", "iz-btn-primary", "p-0");
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
        // this.clearOrdersInputButtonListener();
        // this.updateOrderButtonListener();
    }

}