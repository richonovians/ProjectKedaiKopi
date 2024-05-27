@extends('tema6.main')

@section('keranjang')
<!-- Keranjang Start -->
<section id="keranjang" class="keranjang">
        <h2 class="kr">Keranjang</h2>
        <div class="cart">
            <div class="item">
                <img src="gambar/americano.jpg" alt="Product 1">
                <div class="item-details">
                    <h3>Americano</h3>
                    <p>Rp. 15.000</p>
                    <i data-feather="trash-2" class="delete-btn"></i>
                </div>
            </div>
            <!-- <div class="item">
                <img src="gambar/latte.jpg" alt="Product 2">
                <div class="item-details">
                    <h3>Espresso</h3>
                    <p>Rp. 15.000</p>
                    <i data-feather="trash-2" class="delete-btn"></i>
                </div>
            </div>
            <div class="item">
                <img src="gambar/latte.jpg" alt="Product 2">
                <div class="item-details">
                    <h3>Espresso</h3>
                    <p>Rp. 15.000</p>
                    <i data-feather="trash-2" class="delete-btn"></i>
                </div>
            </div>
            <div class="item">
                <img src="gambar/latte.jpg" alt="Product 2">
                <div class="item-details">
                    <h3>Espresso</h3>
                    <p>Rp. 15.000</p>
                    <i data-feather="trash-2" class="delete-btn"></i>
                </div>
            </div> -->
        </div>
        <div class="total-price">
            <h3>Total : Rp. 45.000</h3>
            <button class="checkout-btn">Checkout</button>
        </div>
    </section>
    <!-- Keranjang End -->

@endsection