<header>
    <div class="top-nav">
      <div class="top-nav-left">
          <div class="logo"><a href="http://localhost/ecommerce-example/public/">Starlight</a></div>
          <div >
          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          @include('partials.search')
          @endif
          <div class="main-menu-right">
          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          {{ menu('main', 'partials.menus.main') }}
          </div>
</div>
          @endif
      </div>
      <div class="top-nav-right">
          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          @include('partials.menus.main-right')
          @endif
      </div>
    </div> <!-- end top-nav -->
</header>
