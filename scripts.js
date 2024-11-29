let Abrircarrito = document.querySelector('#Abrir_carrito');
let Cerrarcarrito = document.querySelector("#Cerrar_carrito");
let Ventana = document.querySelector(".carrito_compras");

Abrircarrito.addEventListener("click", ()=>{
    Ventana.showModal();
})
Cerrarcarrito.addEventListener("click", ()=>{
    Ventana.close();
})




let cart = [];

// Función para agregar productos al carrito
function addToCart(productName, price) {
    // Comprobar si el producto ya está en el carrito
    const existingProduct = cart.find(item => item.name === productName);
    
    if (existingProduct) {
        existingProduct.quantity += 1; // Si ya está, aumenta la cantidad
    } else {
        const newProduct = {
            name: productName,
            price: price,
            quantity: 1
        };
        cart.push(newProduct);
    }
    
    // Actualizar la lista del carrito y el total
    updateCart();
}

// Función para actualizar la vista del carrito
function updateCart() {
    const cartList = document.getElementById('cart');
    const totalPriceElement = document.getElementById('total-price');
    
    // Limpiar la lista de productos
    cartList.innerHTML = '';
    
    // Iterar sobre el carrito y crear los elementos
    let total = 0;
    cart.forEach(item => {
        const li = document.createElement('li');
        li.innerHTML = `
            <span class="item-name">${item.name}</span>
            <span class="item-price">$${item.price.toFixed(2)}</span>
            <span class="item-quantity">
                <button onclick="changeQuantity('${item.name}', -1)">-</button>
                ${item.quantity}
                <button onclick="changeQuantity('${item.name}', 1)">+</button>
            </span>
            <span class="item-total">$${(item.price * item.quantity).toFixed(2)}</span>
            <button class="remove-btn" onclick="removeItem('${item.name}')">Eliminar</button>
        `;
        cartList.appendChild(li);
        total += item.price * item.quantity;
    });
    
    // Actualizar el total
    totalPriceElement.textContent = total.toFixed(2);
}

// Función para cambiar la cantidad de un producto
function changeQuantity(productName, change) {
    const product = cart.find(item => item.name === productName);
    
    if (product) {
        product.quantity += change;
        if (product.quantity <= 0) {
            removeItem(productName); // Eliminar producto si la cantidad es 0 o negativa
        } else {
            updateCart();
        }
    }
}

// Función para eliminar un producto del carrito
function removeItem(productName) {
    cart = cart.filter(item => item.name !== productName);
    updateCart();
}

// Función para realizar la compra
function checkout() {
    if (cart.length === 0) {
        alert("Tu carrito está vacío. Agrega algunos productos.");
    } else {
        const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        alert(`Compra realizada. Total a pagar: $${total.toFixed(2)}`);
        cart = []; // Limpiar el carrito
        updateCart(); // Actualizar la vista del carrito
    }
}
