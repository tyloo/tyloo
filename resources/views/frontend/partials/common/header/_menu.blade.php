<nav class="navbar-collapse collapse navHeaderCollapse" role="navigation">
    <ul class="nav navbar-nav navbar-right">
        <li{{ Request::is('/') ? ' class=active' : '' }}><a href="{{ URL::route('home') }}">Home</a></li>
        <li{{ Request::is('resume') ? ' class=active' : '' }}><a href="{{ URL::route('resume') }}">Resume</a></li>
        <li{{ Request::segment(1) == 'works' ? ' class=active' : '' }}><a href="{{ URL::route('works.index') }}">Works</a></li>
        <li{{ Request::segment(1) == 'blog/' ? ' class=active' : '' }}><a href="{{ URL::route('blog.index') }}">Blog</a></li>
        <li{{ Request::is('contact') ? ' class=active' : '' }}><a href="{{ URL::route('contact') }}">Contact</a></li>

        {{-- Search --}}
        <li class="dropdown visible-lg-block">
            <a href="#" class="dropdown-toggle dropdown-form-toggle" data-toggle="dropdown"><i class="fa fa-search"></i></a>
            <ul class="dropdown-menu dropdown-menu-user">
                <li id="dropdownForm">
                    <div class="dropdown-form">
                        <form class="form-default form-inline p15">
                            <div class="input-group">
                                <input type="text" class="form-control search-input" placeholder="Search...">
                                <span class="input-group-btn"><button class="btn btn-rw btn-primary search-btn" type="button">Go!</button></span>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </li>
        {{-- /Search --}}

        <li class="navbar-social visible-lg-block"><a href="#" class="btn btn-social-icon btn-rw btn-primary btn-xs"><i class="fa fa-github-alt"></i></a></li>
        <li class="navbar-social visible-lg-block"><a href="#" class="btn btn-social-icon btn-rw btn-primary btn-xs"><i class="fa fa-linkedin"></i></a></li>
        <li class="navbar-social visible-lg-block"><a href="#" class="btn btn-social-icon btn-rw btn-primary btn-xs"><i class="fa fa-twitter"></i></a></li>
    </ul>
</nav>
