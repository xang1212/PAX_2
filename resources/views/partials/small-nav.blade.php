<div class="container small-devices-navbar">
    <div class="top-nav">
        @if (request()->is('checkout') || request()->is('checkout/complete'))
            <div class="logo logo-checkout"><a href="/">PAX shop</a></div>
        @else
            <div class="logo"><a href="/">PAX shop</a></div>
        @endif      

        <span class="navbar-toggler-container">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </div>

    <div class="small-devices-navbar-items">
        {{ menu('main', 'partials.menus.main') }}
    </div>
</div>