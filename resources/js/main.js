import Core from "./Core";
import HeaderComponentManager from "./UI/HeaderComponentManager";

setTimeout(() => {
    spinnerPause();
}, 1500);

// main js file
document.addEventListener("DOMContentLoaded", async function () {
    spinnerPause();

    await fetch("/sanctum/csrf-cookie");
    const header = new HeaderComponentManager();
});

const spinnerPause = () => {
    const spinner = document.getElementById("spinner");
    if (spinner) {
        spinner.remove();
    }
    Core.debugLog("Spinner paused");
};
