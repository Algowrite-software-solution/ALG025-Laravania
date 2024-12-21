import Admin from "../Admin";
import ProductCard from "../UI/components/ProductCard";
import Core from "../Core";
import RequestManager from "../modules/core/RequestManager";
import Panel from "./../Panel";
import Config from "../Config";
import { ConfirmationModalManager } from "../UI/components/ConfirmationModalManager";
import { QuantityModalManager } from "../UI/components/QuantityModalManager";

/**
 * testing functionalities will be handled here
 */
export class TestPanel extends Panel {
    constructor(config) {
        super(config);
    }

    init() {
        ConfirmationModalManager.show(this.deleteItem);
    }

    async boot() {}

    deleteItem() {
        Core.toast.show("info", "item DELETED!");
    }
}
