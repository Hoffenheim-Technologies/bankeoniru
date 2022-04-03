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
                    <li class="nav-label">Users</li>
                   
                    @endif

                    <li class="nav-label">Messaging</li>
                    <li>
                        <a href="/chat" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">Chat</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
