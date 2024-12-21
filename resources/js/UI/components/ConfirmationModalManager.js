import Core from "../../Core";
import ModalManager from "../../modules/core/ModalManager";

/**
 * Confirmation modal manager class
 */
export class ConfirmationModalManager extends ModalManager {
    static modalName = "modal-confirm";

    constructor() {
        // Access the static property correctly
        super(ConfirmationModalManager.modalName);
    }

    static show(callback = () => {}) {
        ModalManager.show(this.modalName); // Use `this` to access static properties
        ConfirmationModalManager.getElement()
            .querySelector("[data-modal-action]")
            .addEventListener("click", callback);
    }

    static hide() {
        ModalManager.hide(this.modalName);
    }

    static remove() {
        ModalManager.remove(this.modalName);
    }
}
