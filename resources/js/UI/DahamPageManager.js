import Core from "../Core";
import EventListnerManager from "../modules/optional/EventListnerManager";
import { ConfirmationModalManager } from "./components/ConfirmationModalManager";
import PageManager from "./PageManager";

export default class DahamPageManager extends PageManager {
    constructor() {
        super("dahamPage");

        new ConfirmationModalManager();

        Core.debugLog("Daham Page Manager instatiated");
    }

    async load() {
        // any data that needs to be loaded on the page
        this.data = {
            title: "Product",
            description: "Product Page",
        };

        ConfirmationModalManager.show(20, (data) => {
            this.actions();
        });
    }

    // interfrace setting up things
    init() {
        Core.toast.show("error", "something is happening!");
    }

    setListners() {}

    // interactions based actions
    actions() {
        console.log("actions implemented");
    }

    async loadCities() {}
}
