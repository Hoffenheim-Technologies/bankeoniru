 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li class="">
                        <a  href="{{route('admin_dashboard')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    @if (MS::isAdmin())
                    <li class="">
                        <a  href="{{route('users.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Users</span>
                        </a>
                    </li>
                    <li class="">
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-options menu-icon"></i><span class="nav-text">Gallery</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('gallery.index')}}">Gallery</a></li>
                            <li><a href="{{route('gallery.create')}}">Add Item</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="">
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-options menu-icon"></i><span class="nav-text">News</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('news.index')}}">News</a></li>
                            <li><a href="{{route('news.create')}}">Add Item</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="">
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-options menu-icon"></i><span class="nav-text">Blog</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('gallery.index')}}">Blog</a></li>
                            <li><a href="{{route('gallery.create')}}">Add Item</a></li>
                        </ul>
                    </li>
                    </li>
                    @endif

                    <!-- <li class="nav-label">Messaging</li>
                    <li>
                        <a href="/chat" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Chat</span>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
