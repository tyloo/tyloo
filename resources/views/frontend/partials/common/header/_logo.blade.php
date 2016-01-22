@if(Request::is('/'))
    <span class="navbar-brand">
        <img src="/assets/img/logo.png" class="tyloo-logo" alt="Tyloo">
    </span>
@else
    <a href="{{ URL::route('home') }}" class="navbar-brand">
        <img src="/assets/img/logo.png" class="tyloo-logo" alt="Tyloo">
    </a>
@endif
