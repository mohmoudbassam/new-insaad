{{--</header><!-- ============ Body content start ============= -->--}}
<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a>
                </li>
            </ul>
            {{--            <ul class="nav navbar-nav bookmark-icons">--}}
            {{--                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Email"><i class="ficon" data-feather="mail"></i></a></li>--}}
            {{--                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>--}}
            {{--                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>--}}
            {{--                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>--}}
            {{--            </ul>--}}
            {{--            <ul class="nav navbar-nav">--}}
            {{--                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>--}}
            {{--                    <div class="bookmark-input search-input">--}}
            {{--                        <div class="bookmark-input-icon"><i data-feather="search"></i></div>--}}
            {{--                        <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">--}}
            {{--                        <ul class="search-list search-list-bookmark"></ul>--}}
            {{--                    </div>--}}
            {{--                </li>--}}
            {{--            </ul>--}}
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">

            {{--            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style">--}}
{{--                    <i class="ficon" data-feather="moon"></i></a>--}}
{{--            </li>--}}
{{--            <li class="nav-item nav-search"><a class="nav-link nav-link-search">--}}
{{--                    <i class="ficon" data-feather="search"></i></a>--}}
{{--                <div class="search-input">--}}
{{--                    <div class="search-input-icon"><i data-feather="search"></i></div>--}}
{{--                    <input class="form-control input" type="text" placeholder="Explore..." tabindex="-1"--}}
{{--                           data-search="search">--}}
{{--                    <div class="search-input-close"><i data-feather="x"></i></div>--}}
{{--                    <ul class="search-list search-list-main"></ul>--}}
{{--                </div>--}}
{{--            </li>--}}
            {{--            <li class="nav-item dropdown dropdown-cart me-25"><a class="nav-link" href="#" data-bs-toggle="dropdown"><i class="ficon" data-feather="shopping-cart"></i><span class="badge rounded-pill bg-primary badge-up cart-item-count">6</span></a>--}}
            {{--                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">--}}
            {{--                    <li class="dropdown-menu-header">--}}
            {{--                        <div class="dropdown-header d-flex">--}}
            {{--                            <h4 class="notification-title mb-0 me-auto">My Cart</h4>--}}
            {{--                            <div class="badge rounded-pill badge-light-primary">4 Items</div>--}}
            {{--                        </div>--}}
            {{--                    </li>--}}
            {{--                    <li class="scrollable-container media-list">--}}
            {{--                        <div class="list-item align-items-center"><img class="d-block rounded me-1" src="{{asset('assets/dashboard/images/pages/eCommerce/1.png')}}" alt="donuts" width="62">--}}
            {{--                            <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove" data-feather="x"></i>--}}
            {{--                                <div class="media-heading">--}}
            {{--                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> Apple watch 5</a></h6><small class="cart-item-by">By Apple</small>--}}
            {{--                                </div>--}}
            {{--                                <div class="cart-item-qty">--}}
            {{--                                    <div class="input-group">--}}
            {{--                                        <input class="touchspin-cart" type="number" value="1">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <h5 class="cart-item-price">$374.90</h5>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="list-item align-items-center"><img class="d-block rounded me-1" src="../../../app-assets/images/pages/eCommerce/7.png" alt="donuts" width="62">--}}
            {{--                            <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove" data-feather="x"></i>--}}
            {{--                                <div class="media-heading">--}}
            {{--                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> Google Home Mini</a></h6><small class="cart-item-by">By Google</small>--}}
            {{--                                </div>--}}
            {{--                                <div class="cart-item-qty">--}}
            {{--                                    <div class="input-group">--}}
            {{--                                        <input class="touchspin-cart" type="number" value="3">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <h5 class="cart-item-price">$129.40</h5>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="list-item align-items-center"><img class="d-block rounded me-1" src="../../../app-assets/images/pages/eCommerce/2.png" alt="donuts" width="62">--}}
            {{--                            <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove" data-feather="x"></i>--}}
            {{--                                <div class="media-heading">--}}
            {{--                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> iPhone 11 Pro</a></h6><small class="cart-item-by">By Apple</small>--}}
            {{--                                </div>--}}
            {{--                                <div class="cart-item-qty">--}}
            {{--                                    <div class="input-group">--}}
            {{--                                        <input class="touchspin-cart" type="number" value="2">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <h5 class="cart-item-price">$699.00</h5>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="list-item align-items-center"><img class="d-block rounded me-1" src="../../../app-assets/images/pages/eCommerce/3.png" alt="donuts" width="62">--}}
            {{--                            <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove" data-feather="x"></i>--}}
            {{--                                <div class="media-heading">--}}
            {{--                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> iMac Pro</a></h6><small class="cart-item-by">By Apple</small>--}}
            {{--                                </div>--}}
            {{--                                <div class="cart-item-qty">--}}
            {{--                                    <div class="input-group">--}}
            {{--                                        <input class="touchspin-cart" type="number" value="1">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <h5 class="cart-item-price">$4,999.00</h5>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                        <div class="list-item align-items-center"><img class="d-block rounded me-1" src="../../../app-assets/images/pages/eCommerce/5.png" alt="donuts" width="62">--}}
            {{--                            <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove" data-feather="x"></i>--}}
            {{--                                <div class="media-heading">--}}
            {{--                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html"> MacBook Pro</a></h6><small class="cart-item-by">By Apple</small>--}}
            {{--                                </div>--}}
            {{--                                <div class="cart-item-qty">--}}
            {{--                                    <div class="input-group">--}}
            {{--                                        <input class="touchspin-cart" type="number" value="1">--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                                <h5 class="cart-item-price">$2,999.00</h5>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </li>--}}
            {{--                    <li class="dropdown-menu-footer">--}}
            {{--                        <div class="d-flex justify-content-between mb-1">--}}
            {{--                            <h6 class="fw-bolder mb-0">Total:</h6>--}}
            {{--                            <h6 class="text-primary fw-bolder mb-0">$10,999.00</h6>--}}
            {{--                        </div><a class="btn btn-primary w-100" href="app-ecommerce-checkout.html">Checkout</a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
{{--            <li class="nav-item dropdown dropdown-notification me-25">--}}
{{--                <a class="nav-link" href="#" data-bs-toggle="dropdown"><i class="ficon" data-feather="bell"></i><span--}}
{{--                            class="badge rounded-pill bg-danger badge-up">--}}
{{--                       {{ count(auth()->user()->unreadNotifications) > 0 ? count(auth()->user()->unreadNotifications) : 0 }}</span></a>--}}

{{--                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">--}}
{{--                    <li class="dropdown-menu-header">--}}
{{--                        <div class="dropdown-header d-flex">--}}
{{--                            <h4 class="notification-title mb-0 me-auto">{{__('dashboard.notification.Notifications')}}</h4>--}}
{{--                            @if(count(auth()->user()->unreadNotifications) > 0)--}}
{{--                                <div class="badge rounded-pill badge-light-primary">{{ count(auth()->user()->unreadNotifications) }} {{__('dashboard.notification.New')}}</div>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="scrollable-container media-list">--}}
{{--                        @foreach(auth()->user()->unReadNotifications as $notification )--}}
{{--                            <a class="d-flex" href="{{ $notification->data['url'] }}">--}}
{{--                                <div class="list-item d-flex align-items-start">--}}
{{--                                    <div class="me-1">--}}
{{--                                        <div class="avatar"><img--}}
{{--                                                    src="{{asset('assets/dashboard/images/portrait/small/avatar-s-15.jpg')}}"--}}
{{--                                                    alt="avatar" width="32" height="32"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="list-item-body flex-grow-1">--}}
{{--                                        <p class="media-heading"><span--}}
{{--                                                    class="fw-bolder">--}}
{{--                                                        @if(isset($notification->data['message'] ) && isset($notification->data['id']))--}}
{{--                                                            {{trans('dashboard.notification.'.$notification->data['message'],['id' => $notification->data['id']])}}--}}
{{--                                                        @elseif(isset($notification->data['message'] ))--}}
{{--                                                            {{trans('application.'.$notification->data['message'])}}--}}
{{--                                                        @else--}}
{{--                                                        {{trans('dashboard.notification.New Application old') }}--}}
{{--                                                        @endif--}}
{{--                                                    </span>--}}
{{--                                --}}{{--                                        </p><small class="notification-text"> Won the monthly best seller badge.</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        @endforeach--}}
{{--                    </li>--}}
{{--                    <li class="dropdown-menu-footer">--}}
{{--                        <a class="btn btn-primary w-100"--}}
{{--                                                        href="#">{{ trans('dashboard.notification.Read all notifications') }}</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link"
                   id="dropdown-user" href="#" data-bs-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span
                                class="user-name fw-bolder">{{auth()->user()->first_name}}</span><span
                                class="user-status">{{auth()->user()->role}}</span></div>
                    <span class="avatar"><img class="round"
                                              src="{{asset(auth()->user()->image ?? 'assets/dashboard/images/avatars/8.png')}}"
                                              alt="avatar" height="40" width="40"><span
                                class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" target="_blank" href="{{ route("website.index", ["lang" => app()->getLocale()]) }}">
                        <i class="me-50" data-feather="check-square"></i>
                        {{trans('dashboard.main.Visit Website')}}</a>
                    <a class="dropdown-item"
                       href="{{ route("users.edit", ["user" => auth()->id() , "lang" => app()->getLocale()]) }}">
                        <i class="me-50" data-feather="user"></i>
                       {{trans('dashboard.main.Account settings')}}</a>

                    {{--                    <div class="dropdown-divider"></div>--}}
                    <a  onclick="event.preventDefault(); document.getElementById('logout-form').submit()"
                            class="dropdown-item" href="auth-login-cover.html">
                        <i class="me-50" data-feather="power">
                        </i> {{trans('dashboard.main.Sign out')}}</a>
                    <form method="post" action="{{ route("logout" ,['lang' => app()->getLocale()]) }}" id="logout-form">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
<ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('assets/dashboard/images/icons/xls.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('assets/dashboard/images/icons/jpg.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('assets/dashboard/images/icons/pdf.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
                                   href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('assets/dashboard/images/icons/doc.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
            <small class="search-data-size me-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('assets/dashboard/images/portrait/small/avatar-s-8.jpg')}}" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('assets/dashboard/images/portrait/small/avatar-s-8.jpg')}}" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('assets/dashboard/images/portrait/small/avatar-s-14.jpg')}}" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
                                   href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('assets/dashboard/images/portrait/small/avatar-s-6.jpg')}}" alt="png"
                                               height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a
                class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span>
            </div>
        </a></li>
</ul>
<!-- END: Header-->

