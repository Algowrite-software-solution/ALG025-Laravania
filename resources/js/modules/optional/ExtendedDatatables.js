import DataTable from "datatables.net-dt";

export default class ExtendedDatatables {
    /**
     * @description
     * Active Tables
     * @type {Array<DataTable>}
     */
    #activeTables = [];

    static init() {
        console.log("ExtendedDatatables initialized");
    }

    /**
     *
     * @typedef {Object} DatatableColumnComp
     * @property {Function} comp - The component to be added
     * @property {number} index - The position to be added
     *
     * @description
     * Create Table
     * @param {string} tableId - The ID of the table to create
     * @param {Object} options - DataTable options
     * @param {Array<Object>} options.columns - Array of column definitions
     * @param {Array<DatatableColumnComp>} options.elements - list of compoentns to be aded to the table
     *
     */
    create(tableId, options) {
        const tableContainer = document.getElementById(tableId);
        const _options = {};

        if (!options.columns) {
            options.columns = Array.from(
                tableContainer.querySelectorAll("th[data-column]")
            ).map((th) => {
                const columns = {
                    title: th.textContent,
                };

                if (th.getAttribute("data-column") !== "") {
                    columns.data = th.getAttribute("data-column");
                } else {
                    const element = options.elements.find((element) => {
                        return (
                            element.index ===
                            Array.from(
                                tableContainer.querySelectorAll(
                                    "th[data-column]"
                                )
                            ).indexOf(th)
                        );
                    });
                    columns.render = (data, type, row) => {
                        return element.comp(data, type, row);
                    };
                }

                return columns;
            });
        }

        _options.responsive = true;

        _options.dom = options.dom ?? '<"top"fi>rt<"bottom"lp><"clear">';

        _options.language = {
            search: "_INPUT_",
            searchPlaceholder: "Search...",
        };

        Object.assign(_options, options);

        this.#activeTables.push(new DataTable(tableContainer, _options));
    }

    /**
     * @description
     * Update Table Data
     * @param {string} tableId - The ID of the table to update
     * @param {Array<Object>} data - The data to update the table with
     */
    updateData(tableId, data) {
        this.#activeTables.forEach((table) => {
            if (table.id === tableId) {
                table.clear().rows.add(data).draw();
            }
        });
    }

    /**
     * @description
     * Add Data to Table
     * @param {string} tableId - The ID of the table to add data to
     * @param {Array<Object>} data - The data to add to the table
     */
    addData(tableId, data) {
        this.#activeTables.forEach((table) => {
            if (table.id === tableId) {
                table.rows.add(data).draw();
            }
        });
    }

    /**
     * get a table based on the table id
     */
    getTable(id) {
        return this.#activeTables.find((table) => table.id === id);
    }

    /**
     * @description
     * Get All Tables
     * @returns {Array<DataTable>} - All tables
     */
    getTables() {
        return this.#activeTables;
    }

    /**
     * @description
     * Clear Table
     * @param {string} tableId - The ID of the table to clear
     */
    clearTable(tableId) {
        this.#activeTables = this.#activeTables.filter(
            (table) => table.id !== tableId
        );
    }

    /**
     * @description
     * Clear All Tables
     */
    clearAllTables() {
        this.#activeTables.forEach((table) => {
            table.destroy();
        });
        this.#activeTables = [];
    }
}
