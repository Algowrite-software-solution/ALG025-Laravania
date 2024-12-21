import Core from "../Core";
import PageManager from "./PageManager";

export default class HomeManager extends PageManager {
    constructor() {
        super("home");
        console.log("Home Manager instatiated");
    }

    async load() {
        // any data that needs to be loaded on the page
        this.data = {
            title: "Home",
            description: "Home Page",
        };
    }

    async init() {
        Core.toast.show("info", await Core.LSM.getItem("token"));
    }

    setListners() {
        console.log("listners set");
    }

    actions() {
        console.log("actions implemented");
    }
}
