function addToCart(element) {
    var productId = element.getAttribute('data-id');
    var csrfToken = '{{ csrf_token() }}';

    fetch('/add-to-cart', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
            product_id: productId
        })
    })
    .then(response => response.json())
    .then(data => {
        // update cart items and total price
        var cartItems = document.querySelector('.cart');
        var totalPriceElement = document.querySelector('#total-price');

        cartItems.innerHTML += `
            <div class="item">
                <img src="gambar/${data.product.foto_produk}" alt="${data.product.nama_produk}">
                <div class="item-details">
                    <h3>${data.product.nama_produk}</h3>
                    <p>Rp. ${data.product.harga_produk}</p>
                    <i data-feather="trash-2" class="delete-btn"></i>
                </div>
            </div>
        `;

        totalPriceElement.textContent = `Total : Rp. ${data.total_price}`;
    })
    .catch(error => console.error(error));
}