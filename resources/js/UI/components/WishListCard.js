import Core from "../../Core";

/**
 * WishListCard class responsible for rendering and managing wishlist cards.
 * @class WishListCard
 * @author Gayamina De Silva
 * @version 1.0
 * @description This class is responsible for rendering and managing wishlist cards. It contains methods for handling wishlist card functionality.
 */
export default class WishListCard {
    
    /** @type {WishListCard} a product card component */
    card = null;

    /**
     * Creates an instance of WishListCard.
     * @param {Object} data - The data of the product to be displayed in the card.
     * @param {Object} options - The options for the product card.
     * @memberof WishListCard
     */
    constructor(data) {
        this.card = this.loadComponent(data);
    }

    /**
     *
     * @returns {WishListCard}
     */
    getComponent() {
        return this.card;
    }

    /**
     * Loads the wishlist card component.
     * @param {Object} data - The data of the wishlist to be displayed in the card.
     */
    loadComponent(data) {
        const cardTemplate = document.querySelector(
            '[data-tempalte-name="wishlist-card"]'
        );

        if (!cardTemplate) {
            Core.debugLog("WishList card template not found");
            return;
        }

        const documentFragment = cardTemplate.content.firstElementChild;

        documentFragment.querySelector(
            "[data-product-link]"
        ).href = `/${data.slug}`;

        /** @type {Element} */
        const card = documentFragment.cloneNode(true);
        Core.UIM.setFields(card, data);

        card.querySelector(".wishlist-preview").style.backgroundImage = 
            data.images && data.images.length ? data.images[0].path : "#";
            
        return card;
    }
}
