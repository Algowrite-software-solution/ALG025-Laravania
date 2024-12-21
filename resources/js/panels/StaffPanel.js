import Core from "../Core";
import TextManager from "../modules/optional/TextManager";
import Panel from "../Panel";

/**
 * dashboard functionalities will be handled here
 */
export class StaffPanel extends Panel {
    
    /**
     * @description
     * data to be used in the panel
     * @type {Object}
     * @property {Array<Object>} staff - The staff
     * @property {Array<Object>} staffRoles - The staff roles
     */
    #data = {
        staff: [],
        staffRoles: []
    };
    
    constructor(config) {
        super(config);
    }

    init() {}

    boot() {
        this.isPasswordCopied = false;
        this.staffDeleteModal;
        this.bsOffcanvas2;

        this.loadData();
        this.#_init_listeners();
    }

    /**
     * @description
     * Load all data and UI initializations
     */
    loadData() {
        // this.setRoleSelector();
        this.loadStaff();
    }

    /**
     * @description
     * Load products data and set the options
     */
    async loadStaff() {
        this.#data.staff = await Core.RM.get(
            "/api/staff",
            null,
            {
                showToast: true,
                responseType: "json",
            }
        );
        Core.debugLog(this.#data.staff);
        // this.updateStaffData();
        this.loadStaffTable();
    }

    /**
     * @description
     * Update staff data
     */
    updateStaffData(){
        this.#data.staff.forEach(staff => {
            let match = this.#data.staffRoles.find(role => role.id === staff.role_id);
            if (match) {
                staff.role_name = match.role_name;
            }
        });
    }

    /**
     * @description
     * Load staff table
     */
    loadStaffTable() {

        Core.EDT.create("adminStaffTable", {
            data: this.#data.staff,
            responsive: true,

            dom: '<"top"f>rt<"bottom"lip><"clear">',
            
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search...",
            },

            // columnDefs: [
            //     {
            //         targets: 0,
            //         className: 'dt-container-cell-text-start'
            //     },
            //     {
            //         targets: 1,
            //         className: 'dt-container-cell-text-start'
            //     },
            //     {
            //         targets: 4,
            //         render: (data, type, row, meta) => {
            //             return `<td class="text-center p-2 pb-0 d-flex flex-row gap-3">
            //                         <i class="fa-solid fa-pen-to-square"></i>&nbsp;&nbsp;<i class="fa-solid fa-trash"></i>
            //                     </td>`;
            //         },
            //     },

            // ],
        });
    }
      
    /**
     * @description
     * Set role selector
     */
    async setRoleSelector() {
        // const roles =  await this.loadSelectOptionsFromRemote(
        //     "roles",
        //     "tabviewsSearchStatus",
        //     "Select staff role"
        // );
        
        this.#data.staffRoles = await Core.RM.get(
            "/api/roles",
            null,
            {
                showToast: true,
                responseType: "json",
            }
        );

        console.log(this.#data.staffRoles);

        Core.UIM.setSelectOptions("tabviewsSearchStatus",this.#data.staffRoles,{
            defaultOption: "Select an Role",
        });

        // this.#data.staffRoles = this.loadSelectOptionsFromRemote(
        //     "roles",
        //     "addStaffRoleInput",
        //     "Select staff role"
        // );
        // this.#data.staffRoles = this.loadSelectOptionsFromRemote(
        //     "roles",
        //     "updateStaffRoleInput",
        //     "Select staff role"
        // );
    }

    /**
     * @description
     * Initialize all listeners
     */
    #_init_listeners() {
        this.staffEmailSearchListener();
        this.staffNameSearchListener();
        this.staffroleSearchListener();
        this.addNewStaffButtonListener();
        this.staffAddGeneartePasswordListener();
        this.staffAddPasswordCopyVerifyCheckListener();
    }

    /**
     * @description
     * Search staff email listener
     */
    staffEmailSearchListener() {
        document
            .getElementById("staffEmailSearch")
            .addEventListener("change", this.searchStaff);
    }

    /**
     * @description
     * Search staff name listener
     */
    staffNameSearchListener() {
        document
            .getElementById("staffNameSearch")
            .addEventListener("change", this.searchStaff);
    }

    /**
     * @description
     * Search staff role listener
     */
    staffroleSearchListener() {
        document
            .getElementById("staffroleSearch")
            .addEventListener("change", this.searchStaff);
    }

    /**
     * @description
     * Add new staff button listener
     */
    addNewStaffButtonListener() {
        document
            .getElementById("addNewStaffButton")
            .addEventListener("click", this.showOffcanvas);
    }

    /**
     * @description
     * Add new staff generate password listener
     */
    staffAddGeneartePasswordListener() {
        document
            .getElementById("staffAddGeneartePassword")
            .addEventListener("click", this.staffAddGeneartePassword);
    }

    /**
     * @description
     * Add new staff password copy verify check listener
     */
    staffAddPasswordCopyVerifyCheckListener() {
        document
            .getElementById("staffAddPasswordCopyVerifyCheck")
            .addEventListener("change", this.haveCopiedPasswordAdminStaff.bind(this));
    }

    /**
     * @description
     * Search staff function
     */
    searchStaff() {
        const inputs = Core.UIM.getInputs("staffSearchContainer");
        Core.debugLog(inputs);
    }

    /**
     * @description
     * Show offcanvas
     */
    showOffcanvas() {
        const bsOffcanvas = new bootstrap.Offcanvas("#addStaff");
        bsOffcanvas.show();
      
        // this.resetGeneartePassword();
    }
      
    /**
     * @description
     * Add new staff password
     */
    async staffAddGeneartePassword() {
        const password = TextManager.passwordGenerator(10);
        document.getElementById("staffAddPasswordInput").value = password;
        document.getElementById("staffAddPasswordCopyVerifyCheck").checked = false;
        document.getElementById("staffUpdatePasswordInput").value = password;
        document.getElementById("staffUpdatePasswordCopyVerifyCheck").checked = false;
        this.isPasswordCopied = false;

        navigator.clipboard.writeText(password).then(() => {
          Core.toast.show("info", "Password copied to clipboard!");
        }).catch(err => {
          Core.toast.show("error", "Failed to copy: "+err);
        });
    }
      
    /**
     * @description
     * Reset password
     */
    resetGeneartePassword() {
        document.getElementById("staffAddPasswordInput").value = "";
        document.getElementById("staffAddPasswordCopyVerifyCheck").checked = false;
        document.getElementById("staffUpdatePasswordInput").value = "";
        document.getElementById("staffUpdatePasswordCopyVerifyCheck").checked = false;
        this.isPasswordCopied = false;
    }
      
    /**
     * @description
     * Have copied password admin staff
     */
    haveCopiedPasswordAdminStaff(e) {
        if (e.target.checked) {
            this.isPasswordCopied = true;
        } else {
            this.isPasswordCopied = false;
        }
    }
      
    /**
     * @description
     * Tab staff delete staff
     */
    tabStaffDeleteStaff(email,fname,lname) {
        document.getElementById("staffDeleteModalText").innerHTML = fname+" "+lname;
        this.staffDeleteModal = new bootstrap.Modal("#tabStaffDeleteModal");
        this.staffDeleteModal.show();
      
        document.querySelector("#staffDeleteModalDeleteButton").addEventListener(
          "click",
          (e) => {
            deleteStaff(email);
            e.preventDefault();
      });
    }
      
    /**
     * @description
     * Tab staff show offcanvas 2
     */
    tabStaffShowOffcanvas2(email,fname,lname,role) {
        this.bsOffcanvas2 = new bootstrap.Offcanvas("#updateStaff");
        this.bsOffcanvas2.show();
      
        document.getElementById("emailInputUpdateStaff").disabled = true;
        this.resetGeneartePassword();
        document.getElementById("firstNameInputUpdateStaff").value = fname;
        document.getElementById("lastNameInputUpdateStaff").value = lname;
        document.getElementById("emailInputUpdateStaff").value = email;
        document.getElementById("updateStaffRoleInput").value = role;
      
    }
}