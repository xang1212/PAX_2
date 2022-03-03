<div class="sidebar">
    <div class="inner-sidebar">
        <ul>
            @if (request()->url() == route('profile.edit'))
                <li class="active">ໂປຟາຍຂອງຂ້ອຍ</li>
            @else
                <li><a href="{{ route('profile.edit') }}">ໂປຟາຍຂອງຂ້ອຍ</a></li>
            @endif

            @if (request()->url() == route('orders.index'))
                <li class="active">ລາຍການສັ່ງຊື້</li>
            @else
                <li><a href="{{ route('orders.index') }}">ລາຍການສັ່ງຊື້</a></li>
            @endif
        </ul>
    </div>
</div>