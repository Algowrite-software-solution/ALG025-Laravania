import Core from "../Core";
import Panel from "../Panel";
import { ConfirmationModalManager } from "../UI/components/ConfirmationModalManager";

/**
 * JobCardPanel functionalities will be handled here
 */
export class JobCardPanel extends Panel {
    /**
     * @description
     * data to be used in the panel
     * @type {Object}
     */
    #data = {
        jobs: [],
    };

    constructor(config) {
        super(config);
    }

    init() {}

    boot() {

        this.loadData();
        this.#_init_listeners();
    }

    /**
     * @description
     * Load all data and UI initializations
     */
    loadData() {
        this.loadJobs();
    }

    /**
     * @description
     * Load orders data and set the options
     */
    loadJobs() {
        // Dataset
        const dataset =
            "5146846548465, HP Core i7 Laptop, Black, 07765443921, Rs.4000";

        // Parse the dataset into an object
        const [jobID, model, color, mobile, checkingFree] = dataset.split(", ");
        const job = {
            jobID,
            model,
            color,
            mobile,
            checkingFree,
        };

        // Add the job to this.#data.jobs
        this.#data.jobs.push(job);

        // Check the updated jobs
        console.log(this.#data.jobs);
        this.loadJobTable();
    }

    /**
     * @description
     * Load jobs data and set to table
     */
    loadJobTable() {
        Core.EDT.clearTable("jobs-card-table");

        Core.EDT.create("jobs-card-table", {
            data: this.#data.jobs,
            responsive: true,
            destroy: true,
            elements: [
                {
                    index: 5,
                    comp: (data, type, row) => {
                        var domElement = document.createElement("button");
                        domElement.innerText = "Active";
                        domElement.classList.add(
                            "lrv-btn",
                            "lrv-rounded-2",
                            "lrv-bg-light",
                            "lrv-text-dark",
                            "p-0"
                        );
                        return domElement;
                    },
                },
                {
                    index: 6,
                    comp: (data, type, row) => {
                        const mainDivElement = document.createElement("div");
                        mainDivElement.classList.add("container");
                        const secondaryDivElement =
                            document.createElement("div");
                        secondaryDivElement.classList.add(
                            "row",
                            "justify-content-evenly",
                            "align-items-center"
                        );

                        const aElement1 = document.createElement("a");
                        aElement1.classList.add("col-auto", "p-0", "m-0");

                        const iElement1 = document.createElement("i");
                        iElement1.classList.add(
                            "bi",
                            "bi-eye",
                            "lrv-text-primary",
                            "lrv-fs-5"
                        );
                        aElement1.appendChild(iElement1);

                        const buttonElement1 = document.createElement("button");
                        buttonElement1.innerText = "Add to bill";
                        buttonElement1.classList.add(
                            "col-auto",
                            "lrv-btn",
                            "lrv-bg-light",
                            "lrv-text-dark",
                            "lrv-rounded-2"
                        );

                        const buttonElement2 = document.createElement("button");
                        buttonElement2.innerText = "Cancel";
                        buttonElement2.classList.add(
                            "col-auto",
                            "lrv-btn",
                            "lrv-bg-light",
                            "lrv-text-dark",
                            "lrv-rounded-2"
                        );

                        secondaryDivElement.appendChild(aElement1);
                        secondaryDivElement.appendChild(buttonElement1);
                        secondaryDivElement.appendChild(buttonElement2);
                        mainDivElement.appendChild(secondaryDivElement);

                        return mainDivElement;
                    },
                },
            ],
        });
    }

    /**
     * @description
     * Initialize all listeners
     */
    #_init_listeners() {}
}
