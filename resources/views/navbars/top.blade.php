<nav class="navbar navbar-default">
    <div class="container">
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="{{ url('flyer/create') }}">Create</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            @if($signedIn)
                <ul>
                    <a href="{{ url('auth/logout') }}" class="navbar-text navbar-right">Sign Out</a>
                </ul>
            @else
                <ul>
                    <a href="{{  url('auth/login') }}" class="navbar-text navbar-right">Sign In</a>
                </ul>
            @endif
        </div><!--/.nav-collapse -->
    </div>
</nav>