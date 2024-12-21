import Core from "../Core";
import Panel from "../Panel";

/**
 * dashboard functionalities will be handled here
 */
export class SettingPanel extends Panel {
    constructor(config) {
        super(config);
    }

    init() {
       
    }

    boot() {
        console.log("Setting Panel rendered");
        Core.toast.show("info", "Setting Panel rendered");
        Core.RM
    }

}