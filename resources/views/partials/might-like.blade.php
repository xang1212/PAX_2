<div class="might-like-section">
    <div class="cards-container">
        <h2>ສິນຄ້າສຳລັບທ່ານ</h2>
        <div class="cards">
            @foreach ($mightAlsoLike as $product)
                @include('partials/product-card')
            @endforeach
        </div>
    </div>
</div>
