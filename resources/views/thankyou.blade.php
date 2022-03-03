@extends('layout')

@section('title', 'Thank You')

@section('extra-css')

@endsection

@section('body-class', 'sticky-footer')

@section('content')

   <div class="thank-you-section">
       <h1>ຂອບໃຈສຳລັບ <br>ການສັ່ງຊື້!</h1>
       <p>ສົ່ງອີເມວຢືນຢັນແລ້ວ</p>
       <div class="spacer"></div>
       <div>
           <a href="{{ route('home') }}" class="button button-white">ໜ້າຫຼັກ</a>
       </div>
   </div>

@endsection
