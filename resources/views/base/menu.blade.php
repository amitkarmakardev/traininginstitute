<!-- Navbar -->
<nav class="navbar" style="margin-bottom: 0; margin-top: 10px">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">WBPDCLEEA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="active" href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('committee') }}">Exe. Committee</a></li>
                {{--<li><a href="{{ url('achievement') }}">Achievements</a></li>--}}
                <li><a href="{{ url('issue') }}">Pending Issues</a></li>
                <li><a href="{{ url('announcement') }}">Announcements</a></li>
                <li><a href="{{ url('discussion') }}">Discussions</a></li>
                @can('create', 'poll')
                <li><a href="{{ url('poll') }}">Poll</a></li>
                @endcan
                @can('view', 'member')
                <li><a href="{{ url('member') }}">Member</a></li>
                @endcan`
                @if(auth()->check() == false)
                    <li><a href="{{ url('auth/login') }}">Login</a></li>
                @else
                    <li><a href="{{ url('auth/logout') }}">Logout</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>