<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"> ABC Bank</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="{{route('dashboard')}}" class="w3-bar-item w3-button">Home</a>
      <a href="{{route('deposit')}}" class="w3-bar-item w3-button">Deposite</a>
      <a href="{{route('withdraw')}}" class="w3-bar-item w3-button">Withdraw</a>
      <a href="{{route('transfer')}}" class="w3-bar-item w3-button">Transfer</a>
      <a href="{{route('statment')}}" class="w3-bar-item w3-button">Statment</a>
        <form method="POST" class="w3-bar-item w3-button" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="/w3images/architect.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>BR</b></span> <span class="w3-hide-small w3-text-light-grey">Architects</span></h1>
  </div>
</header>