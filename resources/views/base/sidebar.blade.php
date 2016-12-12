<ul class="widget widget-menu unstyled">
    @if(auth()->guest())
        <li><a href="{{ url('home') }}"><i class="fa fa-home"></i> &nbsp;Home </a></li>
        <li><a href="{{ url('training') }}"><i class="fa fa-calendar"></i> &nbsp;Training Calendar </a></li>
        <li><a href="{{ url('facility') }}"><i class="fa fa-building"></i> &nbsp;Facilities </a></li>
        <li><a href="{{ url('how-to-reach') }}"><i class="fa fa-automobile"></i> &nbsp;How to reach </a></li>
    @endif
    @can('create', 'training')
    <li>
        <a class="collapsed" data-toggle="collapse" href="#toggleTrainings">
            <i class="fa fa-university"></i>&nbsp;
            <i class="fa fa-chevron-down pull-right"></i>
            Training
        </a>
        <ul id="toggleTrainings" class="collapse unstyled">
            <li><a href="{{ url('admin', ['training']) }}"><i class="fa fa-navicon"></i> &nbsp;List </a></li>
            <li><a href="{{ url('admin', ['training', 'create']) }}"><i class="fa fa-plus"></i> &nbsp;Create </a></li>
        </ul>
    </li>
    @endcan
    @can('view', 'book')
    <li>
        <a class="collapsed" data-toggle="collapse" href="#toggleBooks">
            <i class="fa fa-book"></i>&nbsp;
            <i class="fa fa-chevron-down pull-right"></i>
            Book
        </a>
        <ul id="toggleBooks" class="collapse unstyled">
            <li><a href="{{ url('admin', ['book']) }}"><i class="fa fa-navicon"></i> &nbsp;List </a></li>
            @can('create', 'book')
            <li><a href="{{ url('admin', ['book', 'create']) }}"><i class="fa fa-plus"></i> &nbsp;Create </a></li>
            @endcan
            @can('issue', 'book')
            <li><a href="{{ url('admin', ['library', 'issue']) }}"><i class="fa fa-barcode"></i> &nbsp;Issue
                    Books </a></li>
            <li><a href="{{ url('admin', ['library', 'retrieve']) }}"><i class="fa fa-refresh"></i> &nbsp;Retrieve Books
                </a></li>
            @endcan
        </ul>
    </li>
    @endcan

    @can('create', 'lib-user')
    <li>
        <a class="collapsed" data-toggle="collapse" href="#toggleLibUsers">
            <i class="fa fa-user"></i>&nbsp;
            <i class="fa fa-chevron-down pull-right"></i>
            Library User
        </a>
        <ul id="toggleLibUsers" class="collapse unstyled">
            <li><a href="{{ url('admin', ['lib-user']) }}"><i class="fa fa-navicon"></i> &nbsp;List </a></li>
            <li><a href="{{ url('admin', ['lib-user', 'create']) }}"><i class="fa fa-plus"></i> &nbsp;Create </a></li>
        </ul>
    </li>
    @endcan
    @if(auth()->check())
        <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> &nbsp;Logout </a></li>
    @endif
    @if(auth()->guest())
        <li><a href="{{ url('login') }}"><i class="fa fa-sign-in"></i> &nbsp;Login </a></li>
    @endif

</ul>