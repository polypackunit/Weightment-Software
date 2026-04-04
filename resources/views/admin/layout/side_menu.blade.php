<nav id="mainnav-container">
    <div id="mainnav">


        <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
        <!--It will only appear on small screen devices.-->
        <!--================================-->
        <div class="mainnav-brand">
            <a href="index.html" class="brand">
                <img src="{{ asset('backend/img/logo.png') }}" alt="Nifty Logo" class="brand-icon">
                <span class="brand-text">Nifty</span>
            </a>
            <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
        </div>
        
        


        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano">
                <div class="nano-content">

                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap text-center">
                            <div class="pad-btm">
                                <img class="img-circle img-md" src="{{ !empty(Auth::user()->photo) ? asset('uploads/user_images/'.Auth::user()->photo) : asset('uploads/no_image.jpg') }}" alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name">{{ Auth::user()->name }}</p>
                                <span class="mnp-desc">{{ Auth::user()->email }}</span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="{{ route('user_profile', Auth::user()->id) }}" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            
                            <a href="#" class="list-group-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                            </a>
                        </div>
                    </div>


                    <!--Shortcut buttons-->
                    <!--================================-->
                    <div id="mainnav-shortcut" class="hidden">
                        <ul class="list-unstyled shortcut-wrap">
                            <li class="col-xs-3" data-content="My Profile">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                    <i class="demo-pli-male"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Messages">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                    <i class="demo-pli-speech-bubble-3"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Activity">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                    <i class="demo-pli-thunder"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Lock Screen">
                                <a class="shortcut-grid" href="#">
                                    <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                    <i class="demo-pli-lock-2"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End shortcut buttons-->


                    <ul id="mainnav-menu" class="list-group">
            
                        <!--Category name-->
                        <li class="list-header">Navigation</li>


                        {{-- <li>
                            <a href="#">
                                <i class="fa-duotone fa-user-graduate icon16px"></i>
                                <span class="menu-title">Students</span>
                                <i class="arrow"></i>
                            </a>
                             
                            <ul class="collapse">

                                <li><a href="">Current Students</a></li>
                                <li><a href="">All Students</a></li>
                                <li><a href="">Promote & Discharge Students</a></li>

                            </ul>
                        </li> --}}

                        <li>
                            <a href="{{ route('dashboard') }}">
                                <i class="fa-duotone fa-user-tie icon16px"></i>
                                <span class="menu-title">
                                    Dashboard
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('all_weight') }}">
                                <i class="fa-duotone fa-user-tie icon16px"></i>
                                <span class="menu-title">
                                    All Weights
                                </span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('ist_weight') }}">
                                <i class="fa-duotone fa-user-tie icon16px"></i>
                                <span class="menu-title">
                                    1st Weight
                                </span>
                            </a>
                        </li>


                        {{-- <li>
                            <a href="#">
                                <i class="fa-duotone fa-gears icon16px"></i>
                                <span class="menu-title">Settings</span>
                                <i class="arrow"></i>
                            </a>
                             
                            <ul class="collapse">
                                <li><a href="{{ route('settings') }}">General Setting</a></li>


                            </ul>
                        </li> --}}


                        {{-- <li>
                            <a href="#">
                                <i class="fa-duotone fa-solid fa-list-check icon16px"></i>
                                <span class="menu-title">Roles & Permissions</span>
                                <i class="arrow"></i>
                            </a>
                             
                            <ul class="collapse">

                                <li><a href="{{ route('users') }}">Users</a></li>
                                <li><a href="{{ route('roles_and_permissions') }}">Roles & Permission</a></li>


                            </ul>
                        </li> --}}
            
                    </ul>


 

                </div>
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>