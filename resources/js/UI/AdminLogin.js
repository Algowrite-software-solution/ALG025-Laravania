import Core from "../Core";
import PageManager from "./PageManager";

/**
 * @description
 * AdminLogin is the manager for the admin sign in page.
 *
 * @extends {PageManager}
 * @author Gayamina De Silva
 * @version {1.0.0}
 */
export default class AdminLogin extends PageManager {
    /**
     * @description
     * constructor for the AdminLogin class.
     *
     * @param {string} id - the id of the page container.
     */
    constructor() {
        super("admin-sign-in");
    }

    /**
     * @description
     * load the page data that are needed for the page to function.
     *
     * @abstract
     */
    async load() {
        this.data = {
            title: "Admin Sign In",
            description: "Admin Sign In Page",
        };
    }

    /**
     * @description
     * initialize the page features and functionalities.
     *
     * @abstract
     */
    init() {}

    /**
     * @description
     * set the listners for the page
     */
    setListners() {
        this.ELM.setClickListners("#adminLoginBtn", this.login);
        this.ELM.setClickListners("#showPasswordBtn", () => {
            this.showPassword("password");
        });
    }

    /**
     * @description
     * actions for the page that will be called after the page is initialized.
     *
     * @abstract
     */
    actions() {}

    /**
     * @description
     * show password for the password field
     *
     * @param {string} section - the section of the password field
     */
    showPassword(section) {
        const passwordField = document.getElementById(section);
        const showPasswordBtn = document.getElementById("showPasswordBtn");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            showPasswordBtn.innerHTML = `<i class="fa-solid fa-eye"></i>`;
        } else {
            passwordField.type = "password";
            showPasswordBtn.innerHTML = `<i class="fa-solid fa-eye-slash"></i>`;
        }
    }

    /**
     * @description
     * login the user
     */
    async login() {
        const inputs = Core.UIM.getInputs("adminLoginForm", {});

        const response = await Core.RM.post("/api/admin/login", inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });
        console.log(response);
        if (response.token) {
            Core.debugLog(response.token);
            Core.LSM.setItem("token", response.token);
            console.log("Success");
            try {
                // const res = await fetch(`/admin/dashboard?token=${response.token}`, {
                //     method: "GET",
                //     headers: {
                //       "Accept": "application/json",
                //       "Authorization": `Bearer ${response.token}`,
                //     },
                // });

                // const res = await Core.RM.get(
                //     `/admin/web-auth`,
                //     {},
                //     {
                //         requestType: "json",
                //         responseType: "json",
                //         showToast: true,
                //         headers: {
                //             Accept: "application/json",
                //             Authorization: `Bearer ${response.token}`,
                //         },
                //     }
                // );
                try {
                    const res = await fetch(`/admin/web-auth`, {
                        method: "GET",
                        headers: {
                            Accept: "application/json",
                            Authorization: `Bearer ${response.token}`,
                        },
                        credentials: "include", // Ensure cookies are sent
                    });
                    const data = await res.json();
                    if (data.results.role_id === 1) {
                        window.location.href = "/admin";
                    }
                } catch (error) {
                    console.error("Error in GET request:", error);
                }
                
            } catch (error) {
                console.error("Error in GET request:", error);
            }
        } else {
            console.log("Token is missing, unable to proceed");
        }
    }
}
