<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->

        <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header class="with-background">
            <div class="top-nav container large-devices-navbar">
                <div class="logo"><a href="/">PAX Shop</a></div>

                {{-- Main menu --}}
                {{ menu('main', 'partials.menus.main') }}
            </div> <!-- end top-nav -->

            @include('partials/small-nav')

            <div class="hero container">
                <div class="hero-copy">
                    <h1>ຍິນດີຕ້ອນຮັບເຂົ້າສູ່ PAX Shop</h1>
                    <p>ເວັບໄຊ Online Shoppig ອັນດັບໜຶ່ງຂອງລາວ ທີ່ຊ່ວຍໃຫ້ທ່ານໄດ້ສຳຜັດກັບປະສົບການໃໝ່ຂອງການຊື້ເຄື່ອງໃນຍຸກ ດີຈີຕອນ</p>
                    <div class="hero-buttons">
                        <a href="{{ route('shop.index') }}" class="button button-trans">ໄປທີ່ໜ້າສິນຄ້າ</a>
                    </div>
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    <img src="{{ asset('/images/PAX.png') }}" alt="hero image">
                </div> <!-- end hero-image -->
            </div> <!-- end hero -->
        </header>

        <div class="home-products-section">
            <div class="products-container">
                <div class="cards-container">
                    <h2>ສິ້ນຄ້າໃໝ່</h2>

                    <div class="cards text-center">
                        @foreach ($newProducts as $product)    
                            @include('partials/product-card')
                        @endforeach
                    </div> <!-- end products -->
                </div>

                <div class="cards-container">
                    <h2>ສິນຄ້າແນະນຳ</h2>
                    
                    <div class="cards text-center">
                        @foreach ($featuredProducts as $product)    
                            <div>
                                @include('partials/product-card')
                            </div>
                        @endforeach
                    </div> <!-- end products -->
                </div>

                <div class="text-center button-container">
                    <a href="{{ route('shop.index') }}" class="button button-white">ເບິ່ງສິນຄ້າອື່ນໆ</a>
                </div>
            </div>
        </div> <!-- end home-products-section -->

        @include('partials.session-messages')

        @include('partials.contact')

        @include('partials.footer')

        <script src="js/app.js"></script>

    </body>
</html>
