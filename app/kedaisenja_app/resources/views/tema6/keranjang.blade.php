@extends('tema6.main')

@section('keranjang')
<!-- Keranjang Start -->
<section id="keranjang" class="keranjang">
    <h2 class="kr">Keranjang</h2>
    @foreach ($carts as $item)
    <div class="cart">
        <div class="item">
        <img src="data:image/jpeg;base64,{{ base64_encode($item->foto_produk) }}" alt="{{ $item->nama_produk }}">
        <div class="item-details">
            <h3>{{ $item->nama_produk }}</h3>
            <p>Rp. {{ number_format($item->harga_produk, 0, ',', '.') }} <br>
                <button class="minus-Btn" data-id="{{ $item->id }}">-</button>
                <span>X {{$item->quantity}}</span>
                <button class="plus-Btn" data-id="{{ $item->id }}">+</button>
            </p>
            <button class="delete-btn" data-id="{{ $item->id }}">Hapus</button>
            <p>_______________________________</p>
        </div>
        </div>
    </div>
    @endforeach
    <div class="total-price sticky-footer">
        <h3>Total : Rp. {{ number_format($totalPrice, 0, ',', '.') }}</h3>
        <button class="checkout-btn">Checkout</button>
    </div>
</section>
<!-- Keranjang End -->

@endsection

<script>
document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const productId = this.getAttribute('data-id');
            fetch(`/hapus-produk/${productId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // alert('Produk berhasil dihapus');
                    location.reload(); // Reload halaman untuk memperbarui tampilan
                } else {
                    alert('Gagal menghapus produk');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const plusButtons = document.querySelectorAll('.plus-btn');
    const minusButtons = document.querySelectorAll('.minus-btn');

    plusButtons.forEach(button => {
        button.addEventListener('click', function () {
            updateQuantity(this.getAttribute('data-id'), 1);
        });
    });

    minusButtons.forEach(button => {
        button.addEventListener('click', function () {
            updateQuantity(this.getAttribute('data-id'), -1);
        });
    });

    function updateQuantity(productId, change) {
        fetch(`/update-quantity/${productId}/${change}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // alert('Quantity updated'); // Hapus atau komentari baris ini
                location.reload(); // Reload halaman untuk memperbarui tampilan
            } else {
                alert('Failed to update quantity: ' + data.error);
            }
        })
        .catch(error => console.error('Error:', error));
    }
});
</script>