@extends('layout')

@section('title', 'My Orders')

@section('extra-css')
@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <div>
                <a href="/">ໜ້າຫຼັກ</a>
                <i class="fa fa-chevron-right breadcrumb-separator"></i>
                <a href="{{ route('orders.index') }}">ລາຍການ</a>
                <i class="fa fa-chevron-right breadcrumb-separator"></i>
                <span class="visited">ລາຍລະອຽດ</span>
            </div>

            @include('partials.search-form')
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="products-section container profile-section">
        @include('partials.profile-sidebar')

        <div class="products-section-all">
            <h1 class="stylish-heading">ລາຍລະອຽດ</h1>

            <div class="order-box">
                <div class="shipping-address-box">
                    <h3>ສະຖານທີ່ຈັດສົ່ງ</h3>

                    <div>
                        {{ $order->shipping_address }} <br>
                        {{ $order->shipping_city }}, 
                        {{ $order->shipping_state }}, 
                        {{ $order->shipping_country }}
                    </div>
                </div>

                <div>
                    <h3>ການຊຳລະ</h3>

                    <div class="payment-method">
                        @if ($order->card_brand == 'Visa')
                            <img src="/images/visa.png" alt="Visa"> <span>****{{ $order->card_last_four_digits }}</span>
                        @elseif ($order->card_brand == 'Mastercard')
                            <img src="/images/mastercard.png" alt="Master Card"> <span>****{{ $order->card_last_four_digits }}</span>
                        @elseif ($order->payment_gateway == 'paypal')
                            <img src="/images/paypal.png" alt="PayPal">
                        @endif
                    </div>
                </div>

                <div class="order-summary-box">
                    <h3>ລວມລາຍການ</h3>

                    <div class="order-summary">
                        <div>
                            <div>ຈຳນວນສິນຄ້າ:</div>

                            <div>{{ presentPrice($order->subtotal) }}</div>
                        </div>

                        <div>
                            <div>ພາສີ:</div>
                            
                            <div>{{ presentPrice($order->tax) }}</div>
                        </div>

                        <div>
                            <div>ລວມ:</div>
                            
                            <div>{{ presentPrice($order->subtotal + $order->tax) }}</div>
                        </div>

                        @if ($order->discount)
                            <div>
                                <div>ສ່ວນຫຼຸດ</div>
                                
                                <div>{{ presentPrice($order->discount) }}</div>
                            </div>
                        @endif

                        <div class="grand-total">
                            <div><strong>ລວມທັງໝົດ:</strong></div>
                            
                            <div><strong>{{ presentPrice($order->total) }}</strong></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="products-box">
                <h3>ຈຳນວນລາຍການ</h3>

                <div class="order-products">
                    @foreach ($products as $product)
                        <div class="product-details">
                            <img src="{{ $product->imgPath() }}" alt="{{ $product->name }}">

                            <div>
                                <div><a class="product-name" href="{{ route('shop.show', $product) }}">{{ $product->name }}</a></div>
                                <div class="product-price">{{ $product->presentPrice() }}</div>
                                <div>ຈຳນວນ:  {{ $product->pivot->quantity }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div> <!-- end product-section -->

@endsection

@section('extra-js')
@endsection

