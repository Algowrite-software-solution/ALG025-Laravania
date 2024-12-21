import Core from "../Core";
import PageManager from "./PageManager";

/**
 * @description
 * ForgotPasswordManager is the manager for the forgot password page.
 *
 * @extends {PageManager}
 * @author Gayamina De Silva
 * @version {1.0.0}
 */
export default class ForgotPasswordManager extends PageManager {

    /**
     * @description
     * constructor for the ForgotPasswordManager class.
     *
     * @param {string} id - the id of the page container.
     */
    constructor() {
        super("forgot-password");
    }

    /**
     * @description
     * load the page data that are needed for the page to function.
     *
     * @abstract
     */
    load() {
        this.data = {
            title: "Forgot Password",
            description: "Forgot Password Page",
        };
    }

    /**
     * @description
     * initialize the page features and functionalities.
     *
     * @abstract
     */
    init() {
        Core.debug("ForgotPasswordManager initialized");
    }

    /**
     * @description
     * actions for the page that will be called after the page is initialized.
     *
     * @abstract
     */
    actions() {
        this.forgotPasswordListener();
        this.verifyListener();
        this.changePasswordListener();
        this.showPasswordBtnListener();
    }

    /**
     * @description
     * forgot password button click listener
     */
    forgotPasswordListener() {
        document
            .getElementById("forgotPasswordBtn")
            .addEventListener("click", this.forgotPassword);
    }

    /**
     * @description
     * verify button click listener
     */
    verifyListener() {
        document
            .getElementById("verifyBtn")
            .addEventListener("click", this.verify);
    }

    /**
     * @description
     * change password button click listener
     */
    changePasswordListener() {
        document
            .getElementById("changePasswordBtn")
            .addEventListener("click", this.changePassword);
    }

    /**
     * @description
     * show password for the password field
     *
     * @param {string} section - the section of the password field
     */
    showPasswordBtnListener() {
        document
            .getElementById("showPasswordBtn1")
            .addEventListener("click", () => {
                this.showPassword("password");
            });

        document
            .getElementById("showPasswordBtn2")
            .addEventListener("click", () => {
                this.showPassword("password");
            });
    }

    /**
     * @description
     * forgot password the user
     */
    async forgotPassword() {

        const inputs = Core.UIM.getInputs("forgotPasswordForm", {});

        console.log(inputs);

        const response = await Core.RM.post(
            "/api/forgot-password",
            {
                inputs,
            },
            {
                showToast: true,
            }
        );
        
        if (response.status === 200) {
            this.toggleViewTo("verificationSection");
        }
    }

    /**
     * @description
     * verify the user
     */
    async verify() {
        const inputs = Core.UIM.getInputs("verificationCodeSection", {});

        console.log(inputs);

        const response = await Core.RM.post(
            "/api/#",
            {
                inputs,
            },
            {
                showToast: true,
            }
        );
        
        if (response.status === 200) {
            this.toggleViewTo("credentialsSection");
        }
    }

    /**
     * @description
     * change password the user
     */
    async changePassword() {
        const inputs = Core.UIM.getInputs("credentialsSection", {});

        console.log(inputs);

        const response = await Core.RM.post(
            "/api/#",
            {
                inputs,
            },
            {
                showToast: true,
            }
        );
        
        if (response.status === 200) {
            this.toggleViewTo("congratulationsSection");
        }
    }

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
     * toggle the view to the section
     *
     * @param {string} section - the section to toggle
     */
    toggleViewTo(section) {
        const sections = [
          "emailSection",
          "verificationSection",
          "credentialsSection",
          "congratulationsSection",
        ];
      
        sections.forEach((sec) => {
          if (sec === section) {
            document.getElementById(sec).classList.toggle("d-none");
          } else {
            document.getElementById(sec).classList.add("d-none");
          }
        });
    }
}
