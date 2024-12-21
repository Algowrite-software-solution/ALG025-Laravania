import Core from "../Core";
import PageManager from "./PageManager";

/**
 * @description
 * CartManager is the manager for the cart page.
 *
 * @extends {PageManager}
 * @author Gayamina De Silva
 * @version {1.0.0}
 */
export default class CartManager extends PageManager {
    
    /**
     * @description
     * constructor for the SignInManager class.
     *
     * @param {string} id - the id of the page container.
     */
    constructor() {
        super("cart");
    }

    /**
     * @description
     * load the page data that are needed for the page to function.
     *
     * @abstract
     */
    load() {
        this.data = {
            title: "Cart",
            description: "Cart",
            cartData: {},
        };
        this.loadCart();
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
    setListners() {}

    /**
     * @description
     * actions for the page that will be called after the page is initialized.
     *
     * @abstract
     */
    actions() {}

    async loadCart() {

        this.cartData = await Core.RM.get(
            "/api/cart",
            null,
            {
                responseType: "json",
            }
        );
        if (this.cartData) {
            this.loadCartTable();
            this.loadPriceData();
            document.getElementById("cartEmptyMessageContainer").classList.add("d-none");
            document.getElementById("cartAllContainer").classList.remove("d-none");
        } else {
            document.getElementById("cartAllContainer").classList.add("d-none");
            document.getElementById("cartEmptyMessageContainer").classList.remove("d-none");
        }
    }

    loadCartTable() {
        const cartTableBody = document.getElementById("cartContainer");
        cartTableBody.innerHTML = "";
        let userCartData = this.cartData;
        console.log(userCartData);
    
        userCartData.Products.forEach(item => {
            let itemTotalValue = item.stock.price * item.quantity;
            
            const row = document.createElement('tr');

            const imgCol = document.createElement('th');
            imgCol.setAttribute('scope', 'row');

            const imgDiv = document.createElement('div');
            imgDiv.className = 'd-flex align-items-center';

            const productImg = document.createElement('img');
            if (item.stock.product.images.length > 0) {
                productImg.src = item.stock.product.images[0].path;
            }
            productImg.className = 'img-fluid me-5';
            productImg.style.width = '80px';
            productImg.style.height = '80px';
            productImg.alt = '';

            imgDiv.appendChild(productImg);
            imgCol.appendChild(imgDiv);
            row.appendChild(imgCol);

            const titleCol = document.createElement('td');
            const productTitle = document.createElement('p');
            productTitle.className = 'mb-0 mt-4';
            productTitle.textContent = item.stock.product.title;
            titleCol.appendChild(productTitle);
            row.appendChild(titleCol);

            const priceCol = document.createElement('td');
            const productPrice = document.createElement('p');
            productPrice.className = 'mb-0 mt-4';
            productPrice.textContent = parseFloat((item.stock.price).toFixed(2));
            priceCol.appendChild(productPrice);
            row.appendChild(priceCol);

            const quantityCol = document.createElement('td');
            const quantityDiv = document.createElement('div');
            quantityDiv.className = 'input-group quantity mt-4';
            quantityDiv.style.width = '100px';

            const minusButtonDiv = document.createElement('div');
            minusButtonDiv.className = 'input-group-btn';

            const minusButton = document.createElement('button');
            minusButton.className = 'btn btn-sm btn-minus rounded-circle bg-light border btnMinusID' + item.id;
            minusButton.innerHTML = '<i class="fa fa-minus"></i>';
            minusButton.onclick = (e) => {
                this.cartQuantityChange(item.id, "minus", item.stock.price, item.stock.quantity);
            };
            minusButtonDiv.appendChild(minusButton);

            const quantityInput = document.createElement('input');
            quantityInput.type = 'text';
            quantityInput.className = 'form-control form-control-sm text-center border-0 inputID' + item.id;
            quantityInput.value = item.quantity;

            const plusButtonDiv = document.createElement('div');
            plusButtonDiv.className = 'input-group-btn';

            const plusButton = document.createElement('button');
            plusButton.className = 'btn btn-sm btn-plus rounded-circle bg-light border btnPlusID' + item.id;
            plusButton.innerHTML = '<i class="fa fa-plus"></i>';
            plusButton.onclick = (e) => {
                this.cartQuantityChange(item.id, "plus", item.stock.price, item.stock.quantity);
            };
            plusButtonDiv.appendChild(plusButton);

            quantityDiv.appendChild(minusButtonDiv);
            quantityDiv.appendChild(quantityInput);
            quantityDiv.appendChild(plusButtonDiv);
            quantityCol.appendChild(quantityDiv);
            row.appendChild(quantityCol);

            const totalCol = document.createElement('td');
            const itemTotal = document.createElement('p');
            itemTotal.className = 'mb-0 mt-4 totalID' + item.id;
            itemTotal.textContent = parseFloat((itemTotalValue).toFixed(2));
            totalCol.appendChild(itemTotal);
            row.appendChild(totalCol);

            const deleteCol = document.createElement('td');
            const deleteButton = document.createElement('button');
            deleteButton.className = 'btn btn-md rounded-circle bg-light border mt-4';
            deleteButton.innerHTML = '<i class="fa fa-times text-danger"></i>';
            deleteButton.onclick = (e) => {
                this.deleteCartItem(userCartData.id, item.stock.id);
            };
            deleteCol.appendChild(deleteButton);
            row.appendChild(deleteCol);

            cartTableBody.appendChild(row);

        });
    }

    loadPriceData() {
        document.getElementById("discount").innerHTML = parseFloat((this.cartData.prices.discount).toFixed(2));
        document.getElementById("subTotal").innerHTML = parseFloat((this.cartData.prices.subTotal).toFixed(2));
        document.getElementById("total").innerHTML = parseFloat((this.cartData.prices.total).toFixed(2));
    }

    cartQuantityChange(id, condition, unitPrice, maxQuantity) {
        var input = document.querySelector(".inputID" + id);
        var oldTotalValue = parseFloat(document.querySelector(".totalID" + id).innerHTML);
        var oldValue = parseFloat(input.value);
        if (condition == "plus") {
            if (oldValue < maxQuantity) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                newVal = maxQuantity;
            }
        } else if (condition == "minus") {
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        input.value = newVal;
        
        let totalDif = parseFloat(((newVal * unitPrice) - (oldValue * unitPrice)).toFixed(2));
        document.querySelector(".totalID" + id).textContent = parseFloat((oldTotalValue + totalDif).toFixed(2));
        
        let subTotal = parseFloat(document.getElementById("subTotal").textContent);
        let subNewTotal = parseFloat(subTotal + totalDif);
        document.getElementById("subTotal").textContent = parseFloat((subNewTotal).toFixed(2));

        let discount = parseFloat(document.getElementById("discount").textContent);
        document.getElementById("total").textContent = parseFloat((subNewTotal - discount).toFixed(2));
    }

    async deleteCartItem(cartId = null, stockId) {
        const inputs = {
            cart_id: cartId,
            stock_id: stockId,
        };

        const response = await Core.RM.post("/cart/item-delete", inputs, {
            requestType: "json",
            responseType: "json",
            showToast: true,
        });

        this.loadCart();
    }
}