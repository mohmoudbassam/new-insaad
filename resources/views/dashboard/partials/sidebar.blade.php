<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row sidebarFix">
            <li class="nav-item">
                <a class="navbar-brand" href="{{route("dashboard.index", ["lang" => app()->getLocale()])}}">
                    <span class="brand-logo">
                        <img class="pl-3" src="{{ asset(config('settings.site_logo')) }}" alt="alt"/>
                    <h2 class="brand-text">{{config("settings.site_". app()->getLocale() . "_title")}}</h2>
                    </span>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                        data-feather="disc" data-ticon="disc">
                    </i>
                </a>
            </li>
        </ul>
    </div>
    {{--    <div class="shadow-bottom"></div>--}}
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="@if (Route::current()->getName() == 'dashboard.index') active @endif nav-item"><a
                    class="d-flex align-items-center"
                    href="{{route("dashboard.index", ["lang" => app()->getLocale()])}}"><i
                        data-feather="home"></i><span class="menu-title text-truncate"
                                                      data-i18n="Email">{{trans('dashboard.main.dashboard')}}</span></a>
            </li>
            {{--            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i--}}
            {{--                        data-feather="more-horizontal"></i>--}}
            {{--            </li>--}}

            @can('view application')
                <!--=============== settings Start ================-->
                <li class="@if (Route::current()->getName() == 'applications.show')  active @endif">
                    <a class="d-flex align-items-center"
                       href="{{ route("applications.index", ["lang" => app()->getLocale()])}}">
                        <i data-feather='file-plus'></i>
                        <span class="menu-item text-truncate"
                              data-i18n="Permission">{{trans('dashboard.main.applications')}}</span>
                    </a>
                </li>
                <li class="@if (Route::current()->getName() == 'applications.show')  active @endif">
                    <a class="d-flex align-items-center"
                       href="{{ route("articles.index", ["lang" => app()->getLocale()])}}">
                        <i data-feather='file-plus'></i>
                        <span class="menu-item text-truncate"
                              data-i18n="Permission">{{trans('dashboard.articles')}}</span>
                    </a>
                </li>
                <!--=============== End settings ================-->
            @endcan
            @can(['view user' , 'view role'])
                <li class="@if (Route::current()->getName() == 'users.index' || Route::current()->getName() == 'roles.index' )  open @endif nav-item has-sub">
                    <a
                        class="d-flex align-items-center" href="index.html">
                        <i
                            data-feather="user"></i>
                        <span class="menu-title text-truncate"
                              data-i18n="Dashboards">{{trans('dashboard.main.Users') }} & {{ trans('dashboard.main.roles')}}</span></a>
                    <ul class="menu-content">
                        <li class=" @if (Route::current()->getName() == 'users.index' )   active @endif nav-item"><a
                                class="d-flex align-items-center"
                                href="{{ route("users.index", ["lang" => app()->getLocale()])}}"><i
                                    data-feather="circle"></i><span class="menu-title text-truncate"
                                                                    data-i18n="Email">{{trans('dashboard.main.Users')}}</span></a>
                        </li>
                        <li class="@if (Route::current()->getName() == 'roles.index')  active @endif nav-item">
                            <a class="d-flex align-items-center"
                               href="{{ route("roles.index", ["lang" => app()->getLocale()])}}">
                                <i data-feather="shield"> </i>
                                <span class="menu-title text-truncate"
                                      data-i18n="Email">{{trans('dashboard.main.roles')}}</span></a>
                        </li>

                    </ul>
                </li>
                </li>
            @endcan

            @can('view partners')
                <li class="Ul_li--hover">
                    <a class="has-arrow" href="#">
                        <i data-feather="user-plus"></i>
                        <span class="item-name text-15 text-muted">
                             {{trans('dashboard.partner.Partners & Clients')}}</span>
                    </a>
                    <ul class="mm-collapse">
                        <li class="item-name">
                            <a href="{{ route("partners.index", ["lang" => app()->getLocale(),'type'=> \App\Models\Partner::TYPE_CLIENT])}}">
                                <i data-feather="user"></i><span
                                    class="item-name"> {{trans('dashboard.partner.Clients')}}</span></a>
                        </li>
                        <li class="item-name">
                            <a href="{{ route("partners.index", ["lang" => app()->getLocale(),'type'=> \App\Models\Partner::TYPE_PARTNER])}}">
                                <i data-feather="user"></i><span
                                    class="item-name"> {{trans('dashboard.partner.Partners')}}</span></a>
                        </li>
                    </ul>
                </li>
            @endcan


            @can('view setting')
                <!--=============== settings Start ================-->
                <li class="@if (Route::current()->getName() == 'settings.show')  active @endif">
                    <a class="d-flex align-items-center"
                       href="{{ route("settings.show", ["lang" => app()->getLocale()])}}">
                        <i data-feather='settings'></i>
                        <span class="menu-item text-truncate"
                              data-i18n="Permission">{{trans('dashboard.main.Settings')}}</span>
                    </a>
                </li>
                <!--=============== End settings ================-->
            @endcan


            <!--=============== Services Start ================-->
            @can('view services')
                <li class="@if (Route::current()->getName() == 'services.index' )  active @endif">
                    <a class="d-flex align-items-center"
                       href="{{ route("services.index", ["lang" => app()->getLocale()])}}"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                                                            data-i18n="Permission">{{trans('dashboard.content.Services')}}</span>
                    </a>
                </li>
            @endcan
            <!--=============== end Services ================-->
            {{--            @can('view policy')--}}
            {{--            <!--=============== policies Start ================-->--}}
            {{--                <li class="@if (Route::current()->getName() == 'policies')  active @endif">--}}
            {{--                    <a class="d-flex align-items-center"--}}
            {{--                       href="{{ route('policies', ["lang" => app()->getLocale()]) }}">--}}
            {{--                        <i data-feather='file-text'></i>--}}
            {{--                        <span class="menu-item text-truncate"--}}
            {{--                              data-i18n="Permission">{{trans('dashboard.policies.All Policies')}}</span>--}}
            {{--                    </a>--}}
            {{--                </li>--}}
            {{--                <!--=============== End policies ================-->--}}
            {{--            @endcan--}}
            @can('view faq')
                <!--=============== faqs Start ================-->
                <li class="@if (Route::current()->getName() == 'faqs.index')  active @endif">
                    <a class="d-flex align-items-center"
                       href="{{ route('faqs.index', ["lang" => app()->getLocale()]) }}">
                        <i data-feather='info'></i>
                        <span class="menu-item text-truncate"
                              data-i18n="Permission">{{trans('dashboard.faq.All faq')}}</span>
                    </a>
                </li>
                <!--=============== End faqs ================-->
            @endcan

            @can('view inbox')
                <!--=============== client_comment Start ================-->
                <li class="@if (Route::current()->getName() == 'messages.index')  active @endif">
                    <a class="d-flex align-items-center"
                       href="{{ route('messages.index', ["lang" => app()->getLocale()]) }}">
                        <i data-feather='inbox'></i>
                        <span class="menu-item text-truncate"
                              data-i18n="Permission">{{trans('dashboard.main.Inbox')}}</span>
                    </a>
                </li>
                <!--=============== End client_comment ================-->
            @endcan



            @can('view aboutUs')
                <!--=============== aboutUs Start ================-->
                <li class="@if (Route::current()->getName() == 'aboutUs')  active @endif">
                    <a class="d-flex align-items-center"
                       href="{{ route('aboutUs', ["lang" => app()->getLocale()]) }}">
                        <i data-feather='file-text'></i>
                        <span class="menu-item text-truncate"
                              data-i18n="Permission">{{trans('dashboard.main.aboutUs')}}</span>
                    </a>
                </li>
                <!--=============== End aboutUs ================-->
            @endcan



            @can('view count')
                <!--=============== footer Start ================-->
                <li class="@if (Route::current()->getName() == 'counts')  active @endif">
                    <a class="d-flex align-items-center"
                       href="{{ route('counts.index', ["lang" => app()->getLocale()]) }}">
                        <i data-feather='pie-chart'></i>
                        <span class="menu-item text-truncate"
                              data-i18n="Permission">{{trans('dashboard.main.count')}}</span>
                    </a>
                </li>
                <!--=============== End footer ================-->
            @endcan

            @can('view translation')
                <!--=============== Translation Start ================-->
                <li class="@if (Route::current()->getName() == 'languages.translations.index')  active @endif">
                    <a class="d-flex align-items-center"
                       href="{{ route('languages.translations.index', config('app.locale')) }}" target="_blank">
                        <i data-feather='globe'></i>
                        <span class="menu-item text-truncate"
                              data-i18n="Permission">{{ __('translation::translation.translations') }}</span>
                    </a>
                </li>
                <!--=============== End Translation ================-->
            @endcan
        </ul>
    </div>
</div>
