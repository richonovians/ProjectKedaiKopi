@extends('tema6.main')

@section('produk')
<!-- Menu Section Start -->
<section id="menu" class="menu">
        <h2>Produk <span>Kami</span></h2>

        <div class="row">
            @foreach ($p as $data)
            <div class="menu-card">
                <img src="data:image/jpeg;base64,{{ base64_encode($data->foto_produk) }}" alt="{{$data->nama_produk}}" class="menu-card-img">
                <h3 class="menu-card-title"><a href="#" class="link-product">{{$data->nama_produk}}</a></h3>
                <p class="menu-card-price">Rp. {{$data->harga_produk}}</p>
                <!-- <a href="#" class="cta">Add to cart</a> -->

                <form action="/keranjang/store" method="POST">
                    @csrf
                    <input type="hidden" value="{{$data->id}}" name="id_produk">
                    <input type="number" value="1" min="1" class="qty" name="quantity"> <br>
                    <input class="cta" type="submit" value="Add to Cart">
                </form>

            </div>
            @endforeach
        </div>
    </section>
    <!-- Menu Section End -->
@endsection