import Core from "./Core";
import { DashboardPanel } from "./panels/DashboardPanel";
import { ViewProductPanel } from "./panels/ViewProductPanel";
import { AddStockPanel } from "./panels/AddStockPanel";
import { AddProductPanel } from "./panels/AddProductPanel";
import { OtherProductPanel } from "./panels/OtherProductPanel";
import { OfferEditPanel } from "./panels/OfferEditPanel";
import { OfferEmailPanel } from "./panels/OfferEmailPanel";
import { ManageUiPanel } from "./panels/ManageUiPanel";
import { UsersPanel } from "./panels/UsersPanel";
import { StaffPanel } from "./panels/StaffPanel";
import { SeoPanel } from "./panels/SeoPanel";
import { SettingPanel } from "./panels/SettingPanel";
import { OrderHistoryPanel } from "./panels/OrderHistoryPanel";
import { JobCardPanel } from "./panels/JobCardPanel";
import { BillingIssuingPanel } from "./panels/BillingIssuingPanel";
import { InventoryPanel } from "./panels/InventoryPanel";
import { InvoicePanel } from "./panels/InvoicePanel";
import { TestPanel } from "./panels/TestPanel";
import { ConfirmationModalManager } from "./UI/components/ConfirmationModalManager";

/**
 * repesent an instance of admin panel and mange all the features regarding the admin panel
 *
 * @description
 * **Directly dependant on the following dependancies**
 * - Core
 */
export default class Admin extends Core {
    static #instance = null;
    static get instance() {
        return Admin.#instance ?? null;
    }

    /**
     * @typedef {Object} AdminPanelInfo
     * @property {Date} started_time
     * @property {("live"|"offline"|"connecting"|"crashed")} state
     * @property {string} activePanelName
     */

    /**
     * @type {AdminPanelInfo}
     */
    info = null;

    /**
     * @typedef {Object} AdminPanelUI
     * @property {Array<Panel>} panels
     */

    /**
     * @type {AdminPanelUI}
     */
    UI = null;

    /**
     * @type {Panel}
     */
    activePanel = null;

    /**
     * @typedef {Object} AdminPanelData
     * @property {string} application_name
     * @property {string} application_version
     * @property {string} application_copyright
     */

    /**
     * @type {AdminPanelData}
     */
    data = {
        application_name: "Hasthi Restaurant Admin Dashboard",
        application_version: "1.0.0",
        application_copyright:
            "Made with ❤️ by Algowrite © 2024. All Rights Reserved By Algowrite Solutions",
    };

    constructor() {
        super();
        Admin.#instance = this; // not required
        this.#init();
    }

    /**
     * testing method
     */
    async test() {
        console.log("test ===> start");
        console.log(this.info.started_time);
    }

    /**
     * initial panel bootstrap
     */
    async #init() {
        // set config data
        this.info = {
            started_time: new Date(),
            state: "live",
            activePanelName: "inventory-panel", // default panel
        };

        this.activePanel = null;

        this.#addRegisters();

        this.UI = {
            panels: this.#createPanels(),
        };

        // bootstrap functions
        await this.#boot();
    }

    /**
     * admin event subscriber
     */
    async #boot() {
        // set switch listners
        document
            .querySelectorAll("[data-admin-panel-switch]")
            .forEach((button) => {
                button.addEventListener("click", () => {
                    Admin.switchPanel(button.dataset.adminPanelSwitch);
                });
            });

        // load default panel
        Admin.switchPanel(this.info.activePanelName);
    }

    /** applciation registers */
    #addRegisters() {
        this.#modalRegister();
    }

    /**
     * register all  modals
     */
    #modalRegister() {
        new ConfirmationModalManager();
    }

    /**
     *
     * @returns {Admin|null} - returns the admin panel object
     */
    static getInstance() {
        return Admin.instance ?? null;
    }

    // UI manager
    /**
     *
     * @returns {Array<Panel>} - list of all the panels
     */
    #createPanels() {
        const panels = [
            new DashboardPanel({ name: "dashboard" }),
            new ViewProductPanel({ name: "tabViewProduct" }),
            new AddStockPanel({ name: "tabAddStock" }),
            new AddProductPanel({ name: "tabAddProduct" }),
            new OtherProductPanel({ name: "tabOtherProduct" }),
            new OfferEditPanel({ name: "offerTabEdit" }),
            new OfferEmailPanel({ name: "offerTabEmail" }),
            new ManageUiPanel({ name: "manage-ui" }),
            new UsersPanel({ name: "users" }),
            new StaffPanel({ name: "staff" }),
            new SeoPanel({ name: "seo" }),
            new SettingPanel({ name: "settings" }),
            new OrderHistoryPanel({ name: "orderHistory" }),
            new JobCardPanel({ name: "job-card-panel" }),
            new BillingIssuingPanel({ name: "billing-issuing-panel" }),
            new InventoryPanel({ name: "inventory-panel" }),
            new TestPanel({ name: "test" }),
        ];

        return panels;
    }

    /**
     * get all the initiated panels
     *
     * @returns {Array<Panel>} - panels list
     */
    static getPanelList() {
        return Admin.getInstance().UI.panels;
    }

    /**
     * get all the initiated panels
     *
     * @param {string} name - panel name
     * @returns {Panel} - panel
     */
    static getPanel(name) {
        Admin.getPanelList().forEach((panel) => {
            if (panel.name === name) {
                return panel;
            }
        });
        return null;
    }

    /**
     * returns current panel
     *
     * @returns {Panel} - current panel
     */
    static getCurrentPanel() {
        return Admin.getInstance().activePanel ?? null;
    }

    /**
     * change the main panel into a different panel
     *
     * @param {string} name panel name
     */
    static async switchPanel(name) {
        const adminPanel = Admin.getInstance();
        Admin.getPanelList().forEach(async (panel) => {
            if (panel.getName() === name) {
                // clean existing panels
                Admin.getPanelList().forEach((panel) => {
                    panel._destroy();
                });

                // render new panel
                await panel.render();
                adminPanel.info.activePanelName = name;
                adminPanel.activePanel = Admin.getPanel(name);
            }
        });
    }
}
