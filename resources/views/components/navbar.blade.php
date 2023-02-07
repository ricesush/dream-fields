<div class="">
  @if (Route::has('login'))
      <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
          @auth
              <a href="{{ url('/home') }}" class="">Home</a>
          @else
              <a href="{{ route('login') }}" class="">Log in</a>

              @if (Route::has('register'))
                  <a href="{{ route('register') }}"
                      class="">Register</a>
              @endif
          @endauth
          <a href="{{route('buypage')}}">Buy</a>
          <a href="{{route('sellpage')}}">Sell</a>
          <a href="{{route('rentpage')}}">Rent</a>
      </div>
  @endif

</div>