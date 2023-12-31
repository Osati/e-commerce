<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{route('dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('back-end-assets')}}/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Category <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('categories.create') }}">Add Category</a></li>
                            <li><a href="{{ route('categories.index') }}">Category Detail</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-windows"></i> Blog <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('blogs.create') }}">Add Blog</a></li>
                            <li><a href="{{ route('blogs.index') }}">Manage Blog</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-windows"></i> Newcar <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('newcars.create') }}">Add New-Car</a></li>
                            <li><a href="{{ route('newcars.index') }}">New-Cars-details</a></li>

                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->
    </div>
</div>

