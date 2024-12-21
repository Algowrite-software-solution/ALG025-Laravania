import Core from "../Core";
import Panel from "../Panel";

/**
 * dashboard functionalities will be handled here
 */
export class InvoicePanel extends Panel {
    constructor(config) {
        super(config);
    }

    init() {
       
    }

    boot() {
        console.log("Invoice Panel panel rendered");
        Core.toast.show("info", "Invoice Panel rendered");
        Core.RM
    }

}