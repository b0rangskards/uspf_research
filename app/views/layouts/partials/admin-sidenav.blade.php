<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{ URL::route('dashboard') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Management</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ action('UsersController@index') }}">Users</a></li>
                        <li><a href="horizontal_menu.html">Campuses</a></li>
                        <li><a href="language_switch.html">Departments</a></li>
                        <li><a href="language_switch.html">Categories</a></li>
                        <li><a href="language_switch.html">Articles</a></li>
                        <li><a href="language_switch.html">Events</a></li>
                        <li><a href="language_switch.html">Galleries</a></li>
                    </ul>
                </li>

                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-th"></i>
                        <span>Logs</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-bullhorn"></i>
                        <span>Reports</span>
                    </a>
                    <ul class="sub">
                        <li><a href="basic_table.html">Basic Table</a></li>
                        <li><a href="responsive_table.html">Responsive Table</a></li>
                        <li><a href="dynamic_table.html">Dynamic Table</a></li>
                        <li><a href="editable_table.html">Editable Table</a></li>
                    </ul>
                </li>





            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->