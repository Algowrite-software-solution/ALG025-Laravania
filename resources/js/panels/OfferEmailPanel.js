import Core from "../Core";
import Panel from "../Panel";

/**
 * dashboard functionalities will be handled here
 */
export class OfferEmailPanel extends Panel {
    constructor(config) {
        super(config);
    }

    init() {
       
    }

    boot() {
        console.log("Offer Email Panel rendered");
        Core.toast.show("info", "Offer Email Panel rendered");
        Core.RM
    }

}