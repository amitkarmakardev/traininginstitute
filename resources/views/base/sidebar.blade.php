<ul class="widget widget-menu unstyled">
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
    <li>
        <a class="collapsed" data-toggle="collapse" href="#toggleBooks">
            <i class="fa fa-book"></i>&nbsp;
            <i class="fa fa-chevron-down pull-right"></i>
            Book
        </a>
        <ul id="toggleBooks" class="collapse unstyled">
            <li><a href="{{ url('admin', ['book']) }}"><i class="fa fa-navicon"></i> &nbsp;List </a></li>
            <li><a href="{{ url('admin', ['book', 'create']) }}"><i class="fa fa-plus"></i> &nbsp;Create </a></li>
        </ul>
    </li>
    <li><a href="#"><i class="menu-icon fa fa-signout"></i>Logout </a></li>
</ul>