
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('admin/images/img.png')}}" alt="">
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="#"> Profile</a></li>
                        <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                              <span class="icon">
                                <i class="fa fa-fw fa-sign-out"></i>
                              </span>
                              Logout
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
    </div>
</div>
