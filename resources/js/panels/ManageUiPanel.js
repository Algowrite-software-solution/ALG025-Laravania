import Core from "../Core";
import Panel from "../Panel";

/**
 * dashboard functionalities will be handled here
 */
export class ManageUiPanel extends Panel {
    
    /**
     * @description
     * Data to be used in the panel
     * @type {Object}
     * @property {Array<Object>} interfaces - The interfaces
     */
    #data = {};

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
            document.getElementById("tabUIMImagePicker")
        );
    }

    /**
     * @description
     * Load all data and UI initializations
     */
    loadData() {}

    /**
     * @description
     * Load interfaces data and set the options
     */
    async loadInterfaces() {
        // this.#data.interfaces = this.loadSelectOptionsFromRemote(
        //     "main-categories",
        //     "tabUIMUserInterface",
        //     "Select a main category"
        // );



        // this.#data.interfaces = await Core.SS.search("main-categories"),
        // console.log(this.#data.interfaces);
    }

    /**
     * @description
     * Initialize listeners
     */
    #_init_listeners() {
        this.uIMDivchangeViweListener();
        this.addFilesButtonListener();
    }
    
    /**
     * @description
     * Initialize search interfaces listener
     */
    searchInterfacesListener() {
        document
            .getElementById("tabUIMUserInterface")
            .addEventListener("change", this.searchInterfaces);
    }

    addFilesButtonListener() {
        document
            .getElementById("add-files-btn")
            .addEventListener("click", this.addFiles);
    }

    /**
     * @description
     * Initialize uIMDivchangeViwe listener
     */
    uIMDivchangeViweListener() {
        document
            .getElementById("UI-M-desktop-link")
            .addEventListener("click", this.uIMDivchangeViwe);

        document
            .getElementById("UI-M-mobile-link")
            .addEventListener("click", this.uIMDivchangeViwe);
    }

    /**
     * @description
     * Change view
     */
    uIMDivchangeViwe() {
        var uIMDesktopLink = document.getElementById("UI-M-desktop-link");
        var uIMMobileLink = document.getElementById("UI-M-mobile-link");
        var uIMDesktopDiv = document.getElementById("UI-M-desktop-div");
        var uIMMobileDiv = document.getElementById("UI-M-mobile-div");
      
        uIMDesktopDiv.classList.toggle("d-none");
        uIMMobileDiv.classList.toggle("d-none");
        uIMDesktopLink.classList.toggle("iz-UIM-s1-text1");
        uIMMobileLink.classList.toggle("iz-UIM-s1-text1");
        uIMDesktopLink.classList.toggle("text-decoration-underline");
        uIMMobileLink.classList.toggle("text-decoration-underline");
    }

    async addFiles() {

        const inputs = Core.UIM.getInputs("tabUIMInputGroup");
        const images = Core.ImageInputManager.getPicker(
            document.getElementById("tabUIMImagePicker")
        );

        inputs.image = images.picker.getImageFiles();
        await Core.RM.post(
            "/api/ui-primary-carousal",inputs,
            {
                requestType: "formData",
                responseType: "json",
                showToast: true,
            }
        );
        images.picker.clear();
    }
}