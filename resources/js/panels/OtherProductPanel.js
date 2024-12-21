import Core from "../Core";
import Panel from "../Panel";

/**
 * dashboard functionalities will be handled here
 */
export class OtherProductPanel extends Panel {
    

    /**
     * @description
     * data to be used in the panel
     * @type {Object}
     * @property {Array<Object>} mainCategories - The mainCategories
     * @property {Array<Object>} subCategories - The subCategories
     */
    #data = {
        mainCategories: [],
        subCategories: [],
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
        this.loadMainCategories();
        this.loadSubCategories();
    }

    /**
     * @description
     * Load main categories data and set the options
     */
    async loadMainCategories() {
        this.#data.mainCategories = await Core.RM.get(
            "/api/main-categories",
            null,
            {
                responseType: "json",
            }
        );

        this.loadMainCategoryTable();
    }

    /**
     * @description
     * Load main category table
     */
    loadMainCategoryTable() {
        Core.EDT.create("mainCategoryTable", {
            data: this.#data.mainCategories,
            responsive: true,

            elements: [
                {
                    index: 4,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            this.getDataAndSetInputData(row, "tabOPMCInputGroup", this.#data.mainCategories);
                            this.changeButtonText( "tabOPMCAddButton", "Update Main Category", "update", "add");
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
     * Load sub categories data and set the options
     */
    async loadSubCategories() {
        this.#data.subCategories = await Core.RM.get(
            "/api/sub-categories",
            null,
            {
                responseType: "json",
            }
        );

        this.loadSubCategoryTable();
    }

    /**
     * @description
     * Load sub category table
     */
    loadSubCategoryTable() {
        Core.EDT.create("subCategoryTable", {
            data: this.#data.subCategories,
            responsive: true,

            elements: [
                {
                    index: 5,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Select";
                        domElement.onclick = (e) => {
                            this.getDataAndSetInputData(row, "tabOPSCInputGroup", this.#data.subCategories);
                            this.changeButtonText( "tabOPSCAddButton", "Update Sub Category", "update", "add");
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
        this.clearTabOPMCInputButtonListener();
    }

    addNewMCButtonListener() {
        document
            .getElementById("addNewMCButton")
            .addEventListener("click",() => 
                this.clearInputHideContainer("tabOPMCInputGroup", "hide") ,
                this.clearInputHideContainer("tabOPMCInputGroup"));
    }

    clearTabOPMCInputButtonListener() {
        document
            .getElementById("clearTabOPMCInputButton")
            .addEventListener("click",() => this.clearInputHideContainer("tabOPMCInputGroup", "hide"));
    }

    getDataAndSetInputData(rowData, inputGroupId, loadedFullData, selectedData = null,) {
        const matchedItem = loadedFullData.find(item => item.id === rowData.id);
        if (matchedItem) {
            Core.UIM.fillData(inputGroupId, rowData);
            if(selectedData) {
                selectedData = matchedItem;
            }
        }
        document.getElementById(inputGroupId).classList.remove("d-none");
    }

    changeButtonText( buttonId = null, buttonText=null, add=null, remove=null) {
        document.getElementById(buttonId).innerHTML = buttonText;
        document.getElementById(buttonId).classList.remove(remove);
        document.getElementById(buttonId).classList.add(add);
    }

    clearInputHideOrShowContainer(inputGroupId,HOS){
        Core.UIM.clearInputs(inputGroupId);
        if (HOS = "show") {
            document.getElementById(inputGroupId).classList.remove("d-none");
        } else if (HOS = "hide") {
            document.getElementById(inputGroupId).classList.add("d-none");
        }    
    }
    

}