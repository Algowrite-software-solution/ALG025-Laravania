/**
 * @description
 * all the application configurations should be set here
 */
export default class Config {
    /** @type {Object} */
    static config = {

        project_name: "Hasthi Restaurant | ALG023 | Under Maintanance 🔧",

        // domain: "http://localhost:8000", // local
        domain: "https://hasthi.com.au", // server

        main_container_id: "adminPanelMainContainer",
        debug: true, // update this to true to enable debug mode
    };

    /**
     * @description
     * get the config value by key
     * @param {string} key
     * @returns {any}
     */
    static get(key) {
        return this.config[key];
    }

    /**
     * @description
     * set the config value by key
     * @param {string} key
     * @param {any} value
     */
    static set(key, value) {
        this.config[key] = value;
    }

    /**
     * @description
     * get the domain value
     * @returns {string}
     */
    static get_domain() {
        return this.config.domain;
    }

    /**
     * @description
     * set the domain value
     * @param {string} domain
     */
    static set_domain(domain) {
        this.config.domain = domain;
    }

    /**
     * @description
     * get the main container id
     * @returns {string}
     */
    static get_main_container_id() {
        return this.config.main_container_id;
    }

    /**
     * @description
     * set the main container id
     * @param {string} mainContainerId
     */
    static set_main_container_id(mainContainerId) {
        this.config.main_container_id = mainContainerId;
    }

    /**
     * @description
     * get the debug value
     * @returns {boolean}
     */
    static get_debug() {
        return this.config.debug;
    }

    /**
     * @description
     * set the debug value
     * @param {boolean} debug
     */
    static set_debug(debug) {
        this.config.debug = debug;
    }
}
