@extends('layout')

@section('title', 'Login')

@section('content')

    <div class="container">
        <div class="auth-pages login-checkout">
            <div class="auth-left">
                @include('partials.errors')

                <h2>ລູກຄ້າເກົ່າ</h2>
                <div class="spacer"></div>

                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}

                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="ອີເມວ" required autofocus>
                    <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="ລະຫັດຜ່ານ" required>

                    <div class="login-container">
                        <button type="submit" class="button button-black">ເຂົ້າສູ່ລະບົບ</button>
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> ຈື່ຂ້ອຍ?
                        </label>
                    </div>

                    <div class="spacer"></div>

                    <a href="{{ route('password.request') }}">
                        ລືມລະຫັດຜ່ານ?
                    </a>

                </form>
            </div>

            <div class="auth-right">
                <h2>ລູກຄ້າໃໝ່</h2>
                <div class="spacer"></div>
                <p><strong>ຊື້ຕອນນີ້.</strong></p>
                <p>ເຈົ້າບໍ່ຈຳເປັນຈະສະໝັກສະມາຊິກເພື່ອຊື້.</p>
                <div class="spacer"></div>
                <a href="{{ route('checkout.detailsIndex') }}" class="button button-white">ດຳເນີນການຕໍ່</a>
                <div class="spacer"></div>
                &nbsp;
                <div class="spacer"></div>
                <p><strong>ສະໝັກສະມາຊິກ.</strong></p>
                <p>ສະໝັກບັນຊີເພື່ອສະດວກໃນການສັ່ງຊື້ ແລະ ງ່າຍຕໍ່ການເບິ່ງປະຫວັດໃນການສັ່ງຊື້.</p>
                <div class="spacer"></div>
                <a href="{{ route('register') }}" class="button button-white">ສະໝັກສະມາຊິກ</a>
            </div>
        </div>
    </div>

@endsection
