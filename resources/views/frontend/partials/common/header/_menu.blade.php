<nav class="navbar-collapse collapse navHeaderCollapse" role="navigation">
    <ul class="nav navbar-nav navbar-right">
        <li{{ Request::is('/') ? ' class=active' : '' }}><a href="{{ URL::route('home') }}">Home</a></li>
        <li{{ Request::is('resume') ? ' class=active' : '' }}><a href="{{ URL::route('resume') }}">Resume</a></li>
        <li{{ Request::segment(1) == 'works' ? ' class=active' : '' }}><a href="{{ URL::route('works.index') }}">Works</a></li>
        <li{{ Request::segment(1) == 'blog' ? ' class=active' : '' }}><a href="{{ URL::route('blog.index') }}">Blog</a></li>
        <li{{ Request::is('contact') ? ' class=active' : '' }}><a href="{{ URL::route('contact') }}">Contact</a></li>

        <li class="navbar-social visible-lg-block"><a href="https://github.com/tyloo" class="btn btn-social-icon btn-rw btn-primary btn-xs"><i class="fa fa-github-alt"></i></a></li>
        <li class="navbar-social visible-lg-block"><a href="https://www.linkedin.com/pub/julien-bonvarlet/32/427/778" class="btn btn-social-icon btn-rw btn-primary btn-xs"><i class="fa fa-linkedin"></i></a></li>
        <li class="navbar-social visible-lg-block"><a href="https://twitter.com/TylooFR" class="btn btn-social-icon btn-rw btn-primary btn-xs"><i class="fa fa-twitter"></i></a></li>
    </ul>
</nav>
