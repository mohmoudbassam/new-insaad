
<header class="main_header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-6 order-lg-0 order-1">
                <a href="{{route('website.index',app()->getLocale())}}" class="logo">
                    <img src="{{asset(config('settings.site_logo'))}}" class="img-fluid" alt="logo">
                </a>
            </div>
            <div class="col-lg-6 col-6 order-lg-1 order-0">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="hamburger" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                         aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link
                                @if(url()->current() == route('website.index',['lang'=>app()->getLocale()])) active @endif
                                " aria-current="page" href="{{route('website.index',['lang'=>app()->getLocale()])}}"> {{trans('home.home')}} </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link
                                   @if(url()->current() == route('website.about',['lang'=>app()->getLocale()])) active @endif "
                                   href="{{route('website.about',['lang'=>app()->getLocale()])}}">{{__('about.about us')}} </a>
                            </li>


                            <li class="nav-item dropdown">
                                <a  class="dropdown-toggle nav-link" data-toggle="dropdown" role="button"
                                    aria-expanded="false">
                                    {{trans('home.our_services')}}
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    @foreach($nav_services as $nav_service)
                                        <li>
                                            <a href="{{route('website.services.show',['lang'=>app()->getLocale(),'slug'=>$nav_service->slug])}}" class="drop-link">
                                                {{$nav_service->title}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link @if(url()->current() == route('website.faqs',['lang'=>app()->getLocale()])) active @endif"
                                   href="{{route('website.faqs',['lang'=>app()->getLocale()])}}"> {{trans('home.faq')}} </a>
                            </li>

                            <li class="nav-item">
                                @if(app()->getLocale() == 'ar')
                                    <a class="nav-link" href="{{ route('language.switch', ['locale' => 'en']) }}"> English <i class="fa fa-globe"></i>  </a>
                                @else
                                    <a class="nav-link" href="{{ route('language.switch', ['locale' => 'ar']) }}">العربية <i class="fa fa-globe"></i>  </a>
                                @endif

                            </li>
                            <li class="nav-item d-block d-lg-none">
                                <div class="header_btns">
                                    <a href="http://portal.isnaad.sa/login" class="primaryBtn shared">{{trans('auth.login')}}</a>
                                    <a href="{{route('application.index',['lang'=>app()->getLocale()])}}" class="primaryBtn shared">{{trans('home.start_with_us')}}</a>
                                    <a href="#contact" class="secondaryBtn shared"> <i class="fas fa-phone"></i> </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-lg-4 col-md-4 order-2 d-none d-lg-flex">
                <div class="header_btns">
                    <a href="http://portal.isnaad.sa/login" class="primaryBtn shared">{{trans('auth.login')}}</a>

                    <a href="{{route('application.index',['lang'=>app()->getLocale()])}}"  class="primaryBtn shared startNow">{{trans('home.start_with_us')}}</a>
                    <a href="#contact" class="secondaryBtn shared"> <i class="fas fa-phone"></i> </a>
                </div>
            </div>

        </div>
    </div>
</header>
