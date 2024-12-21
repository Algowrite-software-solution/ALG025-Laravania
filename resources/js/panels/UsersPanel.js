import Core from "../Core";
import Panel from "../Panel";
import Admin from "../Admin";

/**
 * dashboard functionalities will be handled here
 */
export class UsersPanel extends Panel {
    /**
     * @description
     * data to be used in the panel
     * @type {Object}
     * @property {Array<Object>} users - The users
     */
    #data = {
        users: [],
    };

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
        this.loadUsers();
    }

    /**
     * @description
     * Load users data and set the options
     */
    async loadUsers() {
        this.#data.users = await Core.RM.get("/api/users", null, {
            responseType: "json",
        });
        this.loadUsersTable();
    }

    loadUsersTable() {
        
        Core.EDT.create("manageUserTable", {
            data: this.#data.users,
            elements: [
                {
                    index: 4,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            this.setInputData(row,"tabUsersInputGroup",this.#data.users);
                        };
                        domElement.classList.add("iz-btn", "iz-btn-primary", "p-0");
                        return domElement;
                    },
                },
                {
                    index: 5,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            Admin.temp = row.id;
                            Admin.switchPanel("orderHistory");
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
        this.clearUsersInputButtonListener();
        this.updateOrderButtonListener();
    }

    clearUsersInputButtonListener() {
        document
            .getElementById("clearUsersInputButton")
            .addEventListener("click", this.clearUsersInputs);
    }

    updateOrderButtonListener() {
        document
            .getElementById("updateOrderButton")
            .addEventListener("click", this.updateOrder);
    }


    setInputData(rowData, inputGroupId, loadedFullData, selectedData = null,) {
        const matchedItem = loadedFullData.find(item => item.id === rowData.id);
        if (matchedItem) {
            Core.UIM.fillData(inputGroupId, rowData);
            if(selectedData) {
                selectedData = matchedItem;
            }
        }

        document.getElementById("tabUsersInputGroup").classList.remove("d-none");
    }

    clearUsersInputs() {
        Core.UIM.clearInputs("tabUsersInputGroup");
        document.getElementById("tabUsersInputGroup").classList.add("d-none");
    }

    async updateUsers() {
        const inputs = Core.UIM.getInputs("tabUsersInputGroup");

        await Core.RM.put("/api/order-history",inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
    }
}
