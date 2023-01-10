<header id="topnav" class="defaultscroll sticky nav-sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="{{route('website.index',['lang' => app()->getLocale()])}}">
                <img src="{{asset(config("settings.site_logo"))}}" height="55"
                     alt="{{ config("settings.site_". app()->getLocale() . "_title") }}">

            </a>
        </div>
        <div class="buy-button">
            <a href="{{route('website.applications.index',['lang' => app()->getLocale()])}}" target="_blank">
                <div class="btn btn-primary login-btn-primary">{{trans('home.Request Offer')}}</div>
                <div class="btn btn-light login-btn-light">{{trans('home.Request Offer')}}</div>
            </a>
        </div><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light">
                <li><a href="{{route('website.index',['lang' => app()->getLocale()])}}">{{ __("home.home") }}</a></li>
                <li><a href="{{route("website.about", ["lang" => app()->getLocale()])}}">{{ __("home.about_us") }}</a>
                </li>
                <li>
                    <a href="{{route("website.universities.index", ["lang" => app()->getLocale()])}}">{{ __("home.portfolio") }}</a>
                </li>
                                <li><a href="{{route('website.blog.index',['lang' => app()->getLocale()])}}">{{ __("home.blog") }}</a>
                                </li>
                <li>
                    <a href="{{route('website.contact_us',['lang' => app()->getLocale()])}}">{{ __("home.contact_us") }}</a>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">{{trans('home.our products')}}</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <a href="{{route('clothing-app.index',['lang' => app()->getLocale()])}}">{{ __("home.E-commerce") }}</a>
                        </li>

                    </ul>
                </li>
            <li>
                <div class="language">
                    <a href="{{ route("language.switch", ["locale" => "en"]) }}" class=@if(app()->getLocale()=='en')"active"@endif>EN</a>
                    <a href="{{ route("language.switch", ["locale" => "ar"]) }}" class=@if(app()->getLocale()=='ar')"active"@endif> AR </a>
                </div>
            </li>

                <li>
                    <div class="lang dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('assets/website/img/'.app()->getLocale().'.png')}}"
                                 alt="{{app()->getLocale()}}">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route("language.switch", ["locale" => "en"]) }}"><img
                                        src="{{asset('assets/website/img/en.png')}}" alt="en"> <span>English</span></a>
                            <a class="dropdown-item" href="{{ route("language.switch", ["locale" => "ar"]) }}"><img
                                        src="{{asset('assets/website/img/ar.png')}}" alt="en"> <span>العربية</span></a>
                        </div>
                    </div>
                </li>
            </ul><!--end navigation menu-->
            <div class="buy-menu-btn d-none">
                <a href="{{route('applications.store',['lang' => app()->getLocale()])}}" target="_blank"
                   class="btn btn-primary">{{trans('home.Request Offer')}}</a>
            </div><!--end login button-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->