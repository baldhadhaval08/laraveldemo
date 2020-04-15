<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
        <div class="user-profile"></div>
        <ul class="nav" id="side-menu">
            @if(App\Role::checkPermission('admin.index'))
                <li><a href="{{ url('/admin')  }}" class="waves-effect"><i class="fa fa-users"></i> <span class="hide-menu">Users</span></a></li> 
           @endif
       </ul>
    </div>
</div>