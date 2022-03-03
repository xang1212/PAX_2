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
                <span class="visited">ລາຍການຂອງຂ້ອຍ</span>
            </div>
            
            @include('partials.search-form')
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="products-section container profile-section">
        @include('partials.profile-sidebar')

        <div class="products-section-all">
            <h1 class="stylish-heading">ລາຍການຂອງຂ້ອຍ</h1>

            @foreach ($orders as $order)
                <table class="orders-table">
                    <thead>
                        <tr class="head-tr">
                            <th class="first-th">
                                <div>
                                    <h4>ສັ່ງແລ້ວ</h4>
                                    <div>{{ $order->created_at->toFormattedDateString() }}</div>
                                </div>

                                <div>
                                    <h4>ລະຫັດລາຍການ</h4>
                                    <div>{{ $order->id }}</div>
                                </div>

                                <div>
                                    <h4>ລວມ</h4>
                                    <div>{{ presentPrice($order->total) }}</div>
                                </div>
                            </th>

                            <th class="last-th">
                                <a href="{{ route('orders.show', $order->id) }}">Order Details</a>
                                <a href="">ໃບແຈ້ງໜີ້</a>
                            </th>
                        </tr>
                    </thead>

                    <tbody class="products-box">
                        <tr class="order-products">
                            @foreach ($order->products as $product)
                                <td class="product-details">
                                    <img src="{{ $product->imgPath() }}" alt="{{ $product->name }}">

                                    <div>
                                        <div><a class="product-name" href="{{ route('shop.show', $product) }}">{{ $product->name }}</a></div>
                                        <div class="product-price">{{ $product->presentPrice() }}</div>
                                        <div>ຈຳນວນ:  {{ $product->pivot->quantity }}</div>
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table> <!-- end table -->
            @endforeach
        </div>
    </div> <!-- end product-section -->

@endsection

@section('extra-js')
@endsection

