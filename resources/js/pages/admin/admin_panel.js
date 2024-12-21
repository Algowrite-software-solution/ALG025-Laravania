import Admin from "../../Admin";

let ADMIN = null;
document.addEventListener("DOMContentLoaded", () => {
    console.log("admin panel loaded");
    ADMIN = new Admin();

    // default listners
    resizeListner();
});

// custom functions
// sidebar
const sidebar = (open = false) => {
    const adminSidebar = document.getElementById("adminSidebar");
    if (open) {
        adminSidebar.style.display = "flex";
    } else {
        adminSidebar.style.display = "none";
    }
};

const resizeListner = () => {
    window.addEventListener("resize", () => {
        const adminSidebar = document.getElementById("adminSidebar");
        if (window.innerWidth > 992) {
            adminSidebar.style.display = "flex"; // Show sidebar for larger screens
        }
    });
};

// add to window
window.sidebar = sidebar;
