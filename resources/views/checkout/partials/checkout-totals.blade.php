<div class="checkout-totals">
    <div class="checkout-totals-left">
        ລາຄາລວມ <br>
        ພາສີ({{ config('cart.tax') }}%) <br>
        <div class="hr"></div>
        ລວມພາສີ <br>
        @if ($discount)
            ສ່ວນຫຼຸດ ({{ $discountPercent ? $discountPercent.'%' : presentPrice($discount) }}) 
            <form class="remove-coupon-form" action="{{ route('coupon.destroy') }}" method="post">
                @csrf
                @method('DELETE')

                <button type="submit" class="button-icon">ລົບອອກ</button>
            </form>
            <br>
        @endif
        <span class="checkout-totals-total">ລວມ</span>
    </div>

    <div class="checkout-totals-right">
        {{ presentPrice($subtotal) }} <br>
        {{ presentPrice($tax) }} <br>
        <div class="hr"></div>
        {{ presentPrice($newSubtotal) }} <br>
        @if ($discount)
            -{{ presentPrice($discount) }} <br>
        @endif
        <span class="checkout-totals-total">{{ presentPrice($total) }}</span>
    </div>
</div> <!-- end checkout-totals -->