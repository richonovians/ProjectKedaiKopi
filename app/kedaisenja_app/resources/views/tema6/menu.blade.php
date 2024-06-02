@extends('tema6.main')

@section('menu')
<!-- Menu Section Start -->
<section id="menu" class="menu">
        <h2>Menu <span>Kami</span></h2>

        <div class="row">
        @foreach ($m as $data)
            <div class="menu-card">
                <img src="data:image/jpeg;base64,{{ base64_encode($data->foto_menu) }}" alt="{{$data->nama_menu}}" class="menu-card-img">
                <h3 class="menu-card-title">{{$data->nama_menu}}</h3>
                <p class="menu-card-price">Rp. {{ number_format($data->harga_menu, 0, ',', '.') }}</p>
            </div>
        @endforeach
        </div>
    </section>
    <!-- Menu Section End -->
@endsection