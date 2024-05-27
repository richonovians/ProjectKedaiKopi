@extends('tema6.main')

@section('checkout')
<!-- Checkout Section Start -->
<section id="checkout" class="checkout">
    <h2>Checkout</h2>
    <div class="checkout-details">
        <div class="cart">
            <!-- Items will be added here dynamically -->
        </div>
        <div class="total-price">
            <h3>Total : Rp. 45.000</h3>
        </div>
        <div class="checkout-form">
            <!-- Form for checkout details -->
            <form action="{{ route('checkout.process') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea id="address" name="address" required></textarea>
                </div>
                <button type="submit" class="checkout-btn">Place Order</button>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->
@endsection
