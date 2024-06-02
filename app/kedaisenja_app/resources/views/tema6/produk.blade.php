@extends('tema6.main')

@section('produk')
<!-- Product Section Start -->
<section id="menu" class="menu">
        <h2>Produk <span>Kami</span></h2>

        <div class="row">
            @foreach ($p as $data)
            <div class="menu-card">
                <img src="data:image/jpeg;base64,{{ base64_encode($data->foto_produk) }}" alt="{{$data->nama_produk}}" class="menu-card-img">
                <h3 class="menu-card-title"><a href="#" class="link-product">{{$data->nama_produk}}</a></h3>
                <p class="menu-card-price">Rp. {{ number_format($data->harga_produk, 0, ',', '.') }}</p>
                <!-- <a href="#" class="cta">Add to cart</a> -->

                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$data->id_produk}}" name="id_produk">
                    <input type="hidden" value="{{ base64_encode($data->foto_produk) }}" name="foto_produk">
                    <input type="hidden" value="{{$data->nama_produk}}" name="nama_produk">
                    <input type="hidden" value="{{$data->harga_produk}}" name="harga_produk">
                    <div class="quantity-controls">
                        <button type="button" class="minus-btn" onclick="changeQuantity('minus', 'quantity{{$data->id_produk}}')">-</button>
                        <input type="text" id="quantity{{$data->id_produk}}" value="1" min="1" class="qty" name="quantity">
                        <button type="button" class="plus-btn" onclick="changeQuantity('plus', 'quantity{{$data->id_produk}}')">+</button>
                    </div>
                    <input class="cta" type="submit" value="Add to Cart">
                </form>

            </div>
            @endforeach
        </div>
    </section>
    <!-- Product Section End -->
@endsection


<script>
function changeQuantity(type, id) {
    var input = document.getElementById(id);
    var currentValue = parseInt(input.value);
    if (type === 'plus') {
        input.value = currentValue + 1;
    } else if (type === 'minus') {
        if (currentValue > 1) {
            input.value = currentValue - 1;
        }
    }
}
</script>