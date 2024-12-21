import Core from "../Core";
import PageManager from "./PageManager";
import ProductCard from "./components/ProductCard";
import ShopFilter from "./components/ShopFilter";

export default class ShopManager extends PageManager {
    constructor() {
        super("shop");
        console.log("Shop Manager instatiated");

        this.shopFilter = new ShopFilter(this.searchProducts.bind(this));
    }

    async load() {
        // any data that needs to be loaded on the page
        this.data = {
            title: "Shop",
            description: "Shop Page",
        };

        // data load
        await this.searchProducts();
    }

    init() {}

    setListners() {}

    actions() {}

    async searchProducts(filterOptions = {}) {
        this.data.products = await Core.SS.search("products", filterOptions);
        console.log(this.data.products);

        this.productCardLoader();
    }

    /**
     * @description
     * load the product cards for the shop page
     *
     * @param {Array} dataList - the data list for the product cards
     */
    productCardLoader() {
        const container = document.getElementById("shopProductContainer");
        container.innerHTML = "";
        
        this.data.products.forEach((product) => {
            const productCard = new ProductCard(product);
            container.appendChild(productCard.getComponent());
        });
    }
}
