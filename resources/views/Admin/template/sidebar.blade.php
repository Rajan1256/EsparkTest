<style>
    .metismenu li span.fa:last-child {
        float: right;
        line-height: 1.42857;
    }

    .nav.metismenu>li.active span.fa:last-child {
        transform: rotate(90deg);
    }
</style>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">

                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">{{env('PROJECT_NAME')}}</span>

                    <span class="text-muted text-xs block">{{ Session::get('UserId')==1?'Admin':'User' }} <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{url('maindash/logout')}}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    US
                </div>
            </li>
            <li class="{{ Request::segment(2) == 'dashboard'? 'active':'' }}">
                <a href="{{ url('maindash/dashboard')}}"><i class="fa fa-tachometer"></i> <span class="nav-label">Dashboard</span></a>
            </li>

        </ul>
    </div>
</nav>
