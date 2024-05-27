<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Senja</title>
    <link rel="icon" type="img/png" href="gambar/icons.png" sizes="16x16">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>

    <!-- Navbar start -->
    @include('tema6._nav')
    <!-- Navbar end -->

    <!-- Keranjang start -->
    @yield('keranjang')
    <!-- Keranjang end -->

    <!-- Home start -->
    @yield('home')
    <!-- Home start -->

    <!-- About start -->
    @yield('about')
    <!-- About end -->

    <!-- Produk start -->
    @yield('produk')
    <!-- Produk end -->

    <!-- Footer Start -->
    @include('tema6._footer')
    <!-- Footer End -->
    

    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>

</body>
</html>