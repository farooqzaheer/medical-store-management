<body class="animsition">
      
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="/admin-assets/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>


            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="mydashboard">
                                <i class="fas fa-tachometer-alt"></i>{{__('profile.Dashboard')}}</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('drugs.index')}}">
                                <i class="fas fa-book"></i>{{__('profile.Drugs')}}</a>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="{{route('purchases.index')}}">
                                <i class="fas fa-list"></i>{{__('profile.Pharmicy')}}</a>
                        </li>

                        <li>
                            <a href="{{route('categories.index')}}">
                                <i class="fas fa-chart-bar"></i>{{__('profile.Categories')}}</a>
                        </li>
                        <li>
                            <a href="{{route('patients.index')}}">
                                <i class="fas fa-user"></i>{{__('profile.Patients')}}</a>
                        </li>
                        <li>
                            <a href="{{route('doctors.index')}}">
                                <i class="fas fa-user"></i>{{__('profile.Doctors')}}</a>
                        </li>
                        <li>
                            <a href="{{route('sells.index')}}">
                                <i class="fas fa-chart-bar"></i>{{__('profile.Sales')}}</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
