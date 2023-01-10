<section class="main_slider" style="background-image: url({{asset(config("settings.home_image1") ?? 'assets/website/images/header.png')}})">
    <div class="container">
        <div class="body-content">
            <a href="{{route('website.index',['lang'=>app()->getLocale()])}}" class="logo-content">
                <img src="{{asset('assets/website/images/headerLogo.png')}}" alt="isnaad"/></a>
            <ul class="links-page">
                <li>
                    <a href="{{route('website.allUniversities.indexAll', ['lang' => app()->getLocale() , 'country_id' => 207])}}">

                        <img src="{{asset(config("settings.icon_home_image3")  ?? 'assets/website/images/icons/truky.png')}}" alt="image"/>

                        <span class="title">{{trans('home.study in turkey')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('website.services.index', ['lang' => app()->getLocale()])}}">

                        <img src="{{asset(config("settings.icon_home_image2") ?? 'assets/website/images/icons/services.png')}}" alt="image"/>

                        <span class="title">{{trans('home.our services')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('website.universities.index', ['lang' => app()->getLocale()])}}">

                        <img src="{{asset(config("settings.icon_home_image4") ?? 'assets/website/images/icons/school.png')}}" alt="image"/>

                        <span class="title">{{trans('home.international university')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('website.blog.index',['lang' => app()->getLocale()])}}">
                        <img src="{{asset(config("settings.icon_home_image7") ?? 'assets/website/images/icons/blogging.png')}}" alt="image"/>
                        <span class="title">{{trans('blog.blog')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('website.gallery',app()->getLocale())}}">

                        <img src="{{ asset(config("settings.icon_home_image5") ?? 'assets/website/images/icons/Image-Gallery.png')}}" alt="image"/>

                        <span class="title">{{trans('home.gallery')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('website.courses.index',['lang' => app()->getLocale()])}}">
                        <img
                                src="{{asset(config("settings.icon_home_image8") ?? 'assets/website/images/icons/educational-video.png')}}"
                                alt="image"
                        />
                        <span class="title">{{trans('home.courses')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('website.conferences.index',['lang' => app()->getLocale()])}}">
                        <img src="{{asset(config("settings.icon_home_image6") ?? 'assets/website/images/icons/Presentation.png')}}" alt="image"/>
                        <span class="title">{{trans('home.conferences')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('blog.indexByCategory', ['lang' => app()->getLocale(),'category' =>1])}}">
                        <img
                                src="{{asset(config("settings.icon_home_image9") ?? 'assets/website/images/icons/Take-Information.png')}}"
                                alt="image"
                        />
                        <span class="title">{{trans('home.Student information')}}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
