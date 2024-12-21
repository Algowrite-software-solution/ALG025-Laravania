import Core from "../Core";
import PageManager from "./PageManager";

/**
 * @description
 * HeaderComponentManager is the manager for the header component.
 *
 * @extends {PageManager}
 * @author Janith Nirmal
 * @version {1.0.0}
 */
export default class HeaderComponentManager extends PageManager {
    /**
     * @description
     * constructor for the HeaderComponentManager class.
     *
     * @param {string} id - the id of the page container.
     */
    constructor() {
        super("header-component");
    }

    /**
     * @description
     * load the page data that are needed for the page to function.
     *
     * @abstract
     */
    async load() {
        this.data = {
            title: "Header Component",
            description: "Header Component",
        };

        this.data.header_categories = await Core.SS.search("header-categories"); //get the header categories from the server
        Core.debugLog(this.data.header_categories);
    }

    /**
     * @description
     * initialize the page features and functionalities.
     *
     * @abstract
     */
    init() {
        Core.debugLog("HeaderComponentManager initialized");

        this.can_have_header = document.getElementById(
            "magHeaderLevel1Container"
        )
            ? true
            : false;

        if (!this.can_have_header) {
            return;
        }

        this.initNavigationComponent();
    }

    /**
     * @description
     * set the listners for the page
     */
    setListners() {
        if (!this.can_have_header) {
            return;
        }
        this.setHeaderLevel1Events(); // set events for the header level 1
    }

    /**
     * @description
     * actions for the page that will be called after the page is initialized.
     *
     * @abstract
     */
    actions() {
        console.log(this.listners);
    }

    // create header component
    initNavigationComponent() {
        const headerLevel1Container = document.getElementById(
            "magHeaderLevel1Container"
        );
        headerLevel1Container.innerHTML = "";
        headerLevel1Container.appendChild(this.createHeaderCategoryComponent());

        this.createSidebarCategoryComponent();
    }

    createHeaderCategoryComponent(
        primary_category,
        main_categories,
        sub_categories
    ) {
        const container = document.createElement("div");
        container.classList.add(
            "mag-header-level1-container",
            "d-flex",
            "gap-2"
        );

        // create level 1 category blocks
        this.data.header_categories.forEach((header_category) => {
            container.appendChild(
                this.createLevel1CategoryBlock(header_category)
            );
        });
        return container;
    }

    createLevel1CategoryBlock(primary_category) {
        const header_level1 = document.createElement("div");
        header_level1.classList.add("mag-header-level1");
        header_level1.innerHTML = `
        <div class="mag-header-level1-block">
            <a  data-primary-category="${primary_category.name}" href="/${primary_category.slug}" class="">${primary_category.name}</a>
        </div>
        `;
        return header_level1;
    }

    createLevel2CategoryBlock(main_categories, level1URI) {
        const header_level2 = document.createElement("div");
        header_level2.classList.add(
            "mag-header-level2",
            "mag-header-level2-block"
        );

        header_level2.innerHTML = `
            <a href="/${level1URI}/${main_categories.slug}"  data-primary-category="${main_categories.name}" data-main-category="${main_categories.name}" class="">${main_categories.name}</a>
        `;
        return header_level2;
    }

    createLevel3CategoryBlock(sub_categories, level1URI, level2URI) {
        const header_level3 = document.createElement("div");
        header_level3.classList.add(
            "mag-header-level3",
            "mag-header-level3-block"
        );
        header_level3.innerHTML = `
            <link href="/${level1URI}/${level2URI}/${sub_categories.slug}" class="text-decoration-none text-black">${sub_categories.name}</link>
        `;
        return header_level3;
    }

    // set events for the header component
    setHeaderLevel1Events() {
        this.ELM.setMouseOverListners(".mag-header-level1-block a", (e) => {
            const primary_category_name = e.target.dataset.primaryCategory;
            const primaryCategory = this.data.header_categories.find(
                (category) => category.name === primary_category_name
            );

            const magHeaderLevel2Container = document.getElementById(
                "magHeaderLevel2Container"
            );
            magHeaderLevel2Container.innerHTML = "";

            primaryCategory.main_categories.forEach((main_category) => {
                magHeaderLevel2Container.appendChild(
                    this.createLevel2CategoryBlock(
                        main_category,
                        primaryCategory.slug
                    )
                );
            });

            this.setHeaderLevel2Events();

            document
                .querySelectorAll(".mag-header-level1-block a")
                .forEach((element) => {
                    const highlight_class = "iz-text-primary-600";
                    element.classList.remove(highlight_class);
                    e.target.classList.add(highlight_class);
                });
        });
    }

    setHeaderLevel2Events() {
        this.ELM.setMouseOverListners(".mag-header-level2 a", (e) => {
            const primary_category_name = e.target.dataset.primaryCategory;
            const main_category_name = e.target.dataset.mainCategory;

            console.log(primary_category_name);
            console.log(main_category_name);

            const mainCategories = this.data.header_categories.find(
                (category) => category.name === primary_category_name
            );

            const subCategories = mainCategories.find(
                (category) => category.name === main_category_name
            );

            console.log(subCategories);
            return;

            const magHeaderLevel3Container = document.getElementById(
                "magHeaderLevel3Container"
            );
            magHeaderLevel3Container.innerHTML = "";

            subCategory.sub_categories.forEach((sub_category) => {
                magHeaderLevel3Container.appendChild(
                    this.createLevel3CategoryBlock(sub_category)
                );
            });
        });
    }

    extractURLParts() {
        const path = window.location.pathname;
        return path.split("/").filter(Boolean);
    }

    createSidebarCategoryComponent() {}
}

//
//
//
//
//
//
//

// export default class HeaderComponentManager extends PageManager {
//     #headerContainerId = "magHeaderLevel1Container";

//     constructor() {
//         super("header-component");
//     }

//     async load() {
//         this.data = {
//             title: "Header Component",
//             description: "Header Component",
//         };

//         this.data.header_categories = await Core.SS.search("header-categories"); //get the header categories from the server
//         this.linkGenerator = new CategoryLinkGenerator(
//             this.data.header_categories
//         );

//         Core.debugLog(this.data.header_categories);
//     }

//     init() {
//         this.can_have_header = document.getElementById(this.#headerContainerId)
//             ? true
//             : false;

//         if (!this.can_have_header) {
//             return;
//         }

//         this.initNavigationComponent();
//     }

//     initNavigationComponent() {
//         document
//             .getElementById(this.#headerContainerId)
//             .appendChild(this.createHeaderCategoryComponent());

//         // this.createSidebarCategoryComponent();
//     }

//     createHeaderCategoryComponent() {
//         console.log(
//             this.linkGenerator.buildDOMElements(
//                 this.linkGenerator.generateLinks()
//             )
//         );
//     }
// }

// /**
//  * generate DOM for links
//  */
// class CategoryLinkGenerator {
//     constructor(data) {
//         this.data = data;
//     }

//     generateLinks() {
//         return this.traverseCategories(this.data, "", 0);
//     }

//     traverseCategories(categories, parentSlug, level) {
//         return categories.map((category) => {
//             const url = parentSlug
//                 ? `${parentSlug}/${category.slug}`
//                 : `/${category.slug}`;
//             const link = this.createLinkElement(url, level, category.name);

//             // Look for subcategories ending with '_categories'
//             const subcategories = {};
//             for (let key in category) {
//                 if (
//                     key.endsWith("_categories") &&
//                     Array.isArray(category[key])
//                 ) {
//                     subcategories[key] = this.traverseCategories(
//                         category[key],
//                         url,
//                         level + 1
//                     );
//                 }
//             }

//             return {
//                 link,
//                 ...subcategories,
//             };
//         });
//     }

//     createLinkElement(url, level, name) {
//         return `<link href="${url}" data-level="${level}" class="text-decoration-none text-black">${name}</link>`;
//     }

//     /**
//      * Convert the generated links array into a nested DOM structure.
//      */
//     buildDOMElements(linksArray) {
//         const ul = document.createElement("ul");

//         linksArray.forEach((linkObj) => {
//             const li = document.createElement("li");

//             // Parse the string HTML to a DOM element
//             const linkElement = this.createDOMElementFromHTML(linkObj.link);
//             li.appendChild(linkElement);

//             // Recursively process any nested subcategories
//             Object.keys(linkObj).forEach((key) => {
//                 if (key.endsWith("_categories")) {
//                     const nestedUl = this.buildDOMElements(linkObj[key]);
//                     li.appendChild(nestedUl);
//                 }
//             });

//             ul.appendChild(li);
//         });

//         return ul;
//     }
// }
