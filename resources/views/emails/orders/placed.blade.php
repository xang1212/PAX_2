<!DOCTYPE html>
<html>
<head>
	<title>ອີເມລສຳລັບທຸລະກຳ</title>

	<style>
		.btn {
	        background: #212121;
	        color: #e9e9e9 !important;
	        border-radius: 5px;
	        padding: 12px 50px;
	        text-decoration: none;
	    }

        .btn:hover {
            background: lighten(#212121, 10%);
        }
	</style>
</head>
<body>
	<h3>{{ $order->user ? $order->user->name : $order->cc_first_name.' '.$order->cc_last_name }}</h3>
	<h2>ຂອບໃຈສຳລັບການສັ່ງຊື້.</h2>
	
	<h3>ລາຄາທີ່ທ່ານດ້ອງຊຳລະດ້ານລຸ່ມ</h3>
	
	<p style="font-size: 17px">
		ລະຫັດບິນ: {{ $order->id }} <br>
		ພາສີ: {{ presentPrice($order->tax) }} <br>
		@if ($order->discount) 
			Order Discount: {{ presentPrice($order->discount) }} <br> 
		@endif
		ລວມ: {{ presentPrice($order->total) }} <br>
		ການຊຳລະ: {{ $order->payment_gateway == 'paytabs' ? 'Credit Card' : ucfirst($order->payment_gateway) }}
	</p>

	<hr style="color: #eee">

	<h3>ລາຍການສິນຄ້າ</h3>
	<p>
		@foreach ($order->products as $product)
			<p style="font-size: 16px">
				ຊື່: {{ $product->name }} <br>
				ລາຄາ: {{ presentPrice($product->price) }} <br>
				ຈຳນວນ: {{ $product->pivot->quantity }}
			</p>
			<hr style="margin: 0 200px 0 0;color: #ebebeb">
		@endforeach
	</p> <br>


	<p>ສາມາດຮັບລາຍລະອຽດເພີ່ມຕື່ມກ່ຽວກັບການສັ່ງຊື້ຂອງທ່ານໄດ້ຜ່ານເວັບໄຊຂອງພວກເຮົາ.</p>
	<a class="btn" href="{{ config('app.url') }}">ໄປທີ່ເວັບໄຊ</a> <br> <br>

	<p>ຂອບໃຈທີ່ໃຊ້ບໍລິການ</p>
	<p>ດ້ວຍຄວາມເຄົາລົບ,</p>
	<p>{{ config('app.name') }}</p>
</body>
</html>