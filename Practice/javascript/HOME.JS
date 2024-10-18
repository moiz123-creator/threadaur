const bar = document.getElementById('bar');
const nav = document.getElementById('navbar');

if (bar) {
 bar.addEventListener('click', () => {
            nav.classList.add('active');
        })
    }



// Initialize cart if empty
if (!localStorage.getItem('cartItems')) {
    localStorage.setItem('cartItems', JSON.stringify([]));
}

document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault();

        // Get product details from the closest '.pro' container
        const product = this.closest('.pro');
        const productId = product.getAttribute('data-id');
        const productName = product.getAttribute('data-name');
        const productPrice = product.getAttribute('data-price');
        const productImage = product.getAttribute('data-image');

        // Create product object
        const productObj = {
            id: productId,
            name: productName,
            price: productPrice,
            image: productImage
        };

        // Get existing cart items from localStorage
        let cartItems = JSON.parse(localStorage.getItem('cartItems'));

        // Add new item to the cart
        cartItems.push(productObj);
        localStorage.setItem('cartItems', JSON.stringify(cartItems));

        // Update cart count
        document.getElementById('cart-count').textContent = cartItems.length;

        alert(productName + " added to cart!");
    });
});

// On page load, update cart count from localStorage
window.onload = function() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    document.getElementById('cart-count').textContent = cartItems.length;
};
// Function to update the cart count
function updateCartCount() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const cartCountElement = document.getElementById('cart-count');

    // Update the cart count number
    cartCountElement.textContent = cartItems.length;

    // Trigger the shake effect
    const cartIcon = document.querySelector('#lg-bag a');
    cartIcon.classList.add('shake');

    // Remove the shake effect after it finishes
    setTimeout(() => {
        cartIcon.classList.remove('shake');
    }, 500);
}

// Call the updateCartCount function whenever an item is added to the cart

// Initialize cart if empty
if (!localStorage.getItem('cartItems')) {
    localStorage.setItem('cartItems', JSON.stringify([]));
}

document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault();

        // Get product details from the closest '.pro' container
        const product = this.closest('.pro');
        const productId = product.getAttribute('data-id');
        const productName = product.getAttribute('data-name');
        const productPrice = product.getAttribute('data-price');
        const productImage = product.getAttribute('data-image');

        // Create product object
        const productObj = {
            id: productId,
            name: productName,
            price: productPrice,
            image: productImage
        };

        // Get existing cart items from localStorage
        let cartItems = JSON.parse(localStorage.getItem('cartItems'));

        // Add new item to the cart
        cartItems.push(productObj);
        localStorage.setItem('cartItems', JSON.stringify(cartItems));

        // Update cart count
        document.getElementById('cart-count').textContent = cartItems.length;

        alert(productName + " added to cart!");
    });
});

// On page load, update cart count from localStorage
window.onload = function() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    document.getElementById('cart-count').textContent = cartItems.length;
};
// Function to update the cart count
function updateCartCount() {
    const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
    const cartCountElement = document.getElementById('cart-count');

    // Update the cart count number
    cartCountElement.textContent = cartItems.length;

    // Trigger the shake effect
    const cartIcon = document.querySelector('#lg-bag a');
    cartIcon.classList.add('shake');

    // Remove the shake effect after it finishes
    setTimeout(() => {
        cartIcon.classList.remove('shake');
    }, 500);
}

// Call the updateCartCount function whenever an item is added to the cart