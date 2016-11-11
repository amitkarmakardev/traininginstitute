<ul class="widget widget-menu unstyled">
    <li>
        <a class="collapsed" data-toggle="collapse" href="#toggleTrainings">
            <i class="fa fa-university"></i>
            <i class="fa fa-chevron-down pull-right"></i>
            Training
        </a>
        <ul id="toggleTrainings" class="collapse unstyled">
            <li><a href="{{ url('admin', ['training']) }}"><i class="fa fa-navicon"></i> List </a></li>
            <li><a href="{{ url('admin', ['training', 'create']) }}"><i class="fa fa-plus"></i> Create </a></li>
        </ul>
    </li>
    <li>
        <a class="collapsed" data-toggle="collapse" href="#toggleBooks">
            <i class="fa fa-book"></i>
            <i class="fa fa-chevron-down pull-right"></i>
            Book
        </a>
        <ul id="toggleBooks" class="collapse unstyled">
            <li><a href="{{ url('admin', ['book']) }}"><i class="fa fa-list"></i> List </a></li>
            <li><a href="{{ url('admin', ['book', 'create']) }}"><i class="fa fa-plus"></i> Create </a></li>
        </ul>
    </li>
    <li><a href="#"><i class="menu-icon fa fa-signout"></i>Logout </a></li>
</ul>

<ul class="widget widget-menu unstyled">
    <li><a href="{{ url('admin', ['training']) }}">Training</a></li>
    <li><a href="{{ url('admin', ['book']) }}">Book</a></li>
</ul>

<ul class="widget widget-menu unstyled">
    <li class="active"><a href="index.html"><i class="menu-icon fa fa-dashboard"></i>Training</a></li>
    <li><a href="activity.html"><i class="menu-icon fa fa-bullhorn"></i>News Feed </a>
    </li>
    <li><a href="message.html"><i class="menu-icon fa fa-inbox"></i>Inbox <b class="label green pull-right">
                11</b> </a></li>
    <li><a href="task.html"><i class="menu-icon fa fa-tasks"></i>Tasks <b class="label orange pull-right">
                19</b> </a></li>
</ul>
<!--/.widget-nav-->



<!--/.widget-nav-->
