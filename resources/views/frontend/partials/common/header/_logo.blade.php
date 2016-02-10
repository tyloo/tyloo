@if(Request::is('/'))
    <span class="navbar-brand">
        <div class="css-logo"></div> TYLOO<span class="logoDomain">.FR</span>
    </span>
@else
    <a href="{{ route('home') }}" class="navbar-brand">
        <div class="css-logo"></div> TYLOO<span class="logoDomain">.FR</span>
    </a>
@endif
