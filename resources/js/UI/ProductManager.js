import Core from "../Core";
import URIManager from "../modules/optional/URIManager";
import PageManager from "./PageManager";
import ProductCard from "./components/ProductCard";

export default class ProductManager extends PageManager {
    constructor() {
        super("productPage");
        Core.debugLog("Product Manager instatiated");
    }

    async load() {
        // any data that needs to be loaded on the page
        this.data = {
            title: "Product",
            description: "Product Page",
        };

        this.data.product = await Core.SS.search("products", {
            slug: new URIManager().getURIParts()[0],
        });

        this.data.related_products = await Core.SS.search("products", {});

        console.log(this.data.product);
        console.log(this.data.related_products);
    }

    // interfrace setting up things
    init() {
        Core.debugLog(this.data.product);

        this.generateBreadcrumb(this.data.product).forEach((element) => {
            document.body.innerHTML += element;
            document.body.innerHTML += "</br>";
        });

        this.loadRelatedProducts();

        this.fillData();
    }

    setListners() {
        this.mainImageSetter();
    }

    mainImageSetter() {
        const imageTumbsContainer =
            document.querySelectorAll("#imageCarousal img");
        imageTumbsContainer.forEach((imgElement) => {
            imgElement.addEventListener("click", (e) => {
                imageTumbsContainer.forEach((imgElement) => {
                    imgElement.classList.remove(
                        "border",
                        "border-2",
                        "border-danger"
                    );
                    if (e.target === imgElement) {
                        imgElement.classList.add(
                            "border",
                            "border-2",
                            "border-danger"
                        );
                        document.querySelector("#mainImage img").src =
                            e.target.src;
                    }
                });
            });
        });
    }

    // interactions based actions
    actions() {
        console.log("actions implemented");
    }

    generateBreadcrumb(product) {
        if (!product) {
            return;
        }
        const breadcrumb = [];

        // Check for taxonomy
        if (
            product.product_taxonomies &&
            product.product_taxonomies.length > 0
        ) {
            const taxonomy = product.product_taxonomies[0].taxonomy;
            if (taxonomy) {
                breadcrumb.push(
                    this.createLink(taxonomy.slug, taxonomy.name, "taxonomy")
                );
            }
        }

        // Check for main category
        if (product.sub_category && product.sub_category.main_category) {
            const mainCategory = product.sub_category.main_category;
            breadcrumb.push(
                this.createLink(
                    mainCategory.slug,
                    mainCategory.name,
                    "main category"
                )
            );
        }

        // Check for sub category
        if (product.sub_category) {
            const subCategory = product.sub_category;
            breadcrumb.push(
                this.createLink(
                    subCategory.slug,
                    subCategory.name,
                    "sub category"
                )
            );
        }

        return breadcrumb;
    }

    // Helper function to create a link element
    createLink(slug, name, level) {
        const url = `/${slug}`;
        return `<a href="${url}" data-level="${level}" class="text-decoration-none text-black">${name}</a>`;
    }

    /**
     * @description
     * fill the data to the UI
     */
    fillData() {
        console.log(this.data.product);
        Core.UIM.setFields("productPageContainer", this.data.product, {
            useHook: true,
        });
    }

    loadRelatedProducts() {
        this.data.related_products.forEach((product, index) => {
            if (index > 5) {
                return;
            }
            document
                .getElementById("relatedProducts")
                .appendChild(new ProductCard(product).getComponent());
        });
    }
}
