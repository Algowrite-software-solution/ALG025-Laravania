import Core from "../../Core";
import ModalManager from "../../modules/core/ModalManager";

/**
 * Quantity modal manager class
 */
export class QuantityModalManager extends ModalManager {
    static modalName = "modal-quantity";

    constructor() {
        // Access the static property correctly
        super(QuantityModalManager.modalName);
    }

    static show(currentQty, callback = () => {}) {
        ModalManager.show(this.modalName); // Use `this` to access static properties
        // 
        // 
        callback(inputvaue)
    }

    static hide() {
        ModalManager.hide(this.modalName);
    }

    static remove() {
        ModalManager.remove(this.modalName);
    }
}
