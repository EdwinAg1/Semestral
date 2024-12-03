// Inicializa el carrito
let cart = JSON.parse(localStorage.getItem("cart")) || [];

// Función para agregar productos al carrito
function addToCart(name, price, stock) {
    let item = cart.find(product => product.name === name);

    if (item) {
        if (item.quantity < stock) {
            item.quantity++;
        } else {
            alert("No hay más unidades disponibles");
        }
    } else {
        cart.push({ name, price: parseFloat(price), quantity: 1, stock });
    }

    // Actualiza el almacenamiento local
    localStorage.setItem("cart", JSON.stringify(cart));
    alert("Producto agregado al carrito");
}

// Detectar clics en botones "Comprar"
document.querySelectorAll(".add-to-cart").forEach(button => {
    button.addEventListener("click", () => {
        const name = button.getAttribute("data-name");
        const price = button.getAttribute("data-price");
        const stock = button.getAttribute("data-stock");
        addToCart(name, price, stock);
    });
});


// Función para mostrar los productos en el carrito
function renderCart() {
    const tableBody = document.querySelector("#cart-table tbody");
    const totalPriceElement = document.querySelector("#total-price");
    tableBody.innerHTML = "";
    let totalPrice = 0;

    cart.forEach((item, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${item.name}</td>
            <td>$${item.price.toFixed(2)}</td>
            <td>${item.quantity}</td>
            <td>$${(item.price * item.quantity).toFixed(2)}</td>
            <td><button class="remove-item" data-index="${index}">Eliminar</button></td>
        `;
        tableBody.appendChild(row);
        totalPrice += item.price * item.quantity;
    });

    totalPriceElement.textContent = totalPrice.toFixed(2);

    // Botones para eliminar productos
    document.querySelectorAll(".remove-item").forEach(button => {
        button.addEventListener("click", () => {
            const index = button.getAttribute("data-index");
            removeFromCart(index);
        });
    });
}

// Función para eliminar productos del carrito
function removeFromCart(index) {
    cart.splice(index, 1);
    localStorage.setItem("cart", JSON.stringify(cart));
    renderCart();
}

// Finalizar compra
document.getElementById("checkout-button").addEventListener("click", () => {
    if (cart.length === 0) {
        alert("Tu carrito está vacío");
    } else {
        alert("¡Gracias por tu compra!");
        cart = [];
        localStorage.setItem("cart", JSON.stringify(cart));
        renderCart();
    }
});

// Renderiza el carrito al cargar la página
renderCart();
