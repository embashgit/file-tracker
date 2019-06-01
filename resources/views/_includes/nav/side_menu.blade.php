<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">

        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a href="{{route('manage.dashboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a><i class="fa fa-edit"></i> Administration <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{route('users.index')}}">Manage Users</a></li>
                  <li><a href="{{route('organizations.index')}}">Manage Organizations</a></li>
                  <li><a href="{{route('locations.index')}}">Manage Locations</a></li>
                  <li><a href="{{route('items.index')}}">Manage Items</a></li>
                  <li><a href="{{route('histories.index')}}">Manage Histories</a></li>
                  <li><a href="#">Roles &amp; Permission</a></li>
                </ul>
            </li>

        </ul>
    </div>

</div>
