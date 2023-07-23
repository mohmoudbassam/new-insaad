<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer_contact">
                        <h3 class="title">{{trans('home.contact_us')}}</h3>
                        <div>
                            <a href="mailto:{{config('settings.site_email')}}" class="link">{{config('settings.site_email')}}</a>
                        </div>
                        <a href="tel:+{{config('settings.site_phone_number')}}" class="link">{{config('settings.site_phone_number')}}</a>
{{--                        <div class="social">--}}
{{--                            <ul class="list-unstyled justify-content-start">--}}
{{--                                <li>--}}
{{--                                    <a href="https://wa.me/{{ config("settings.social_whatsapp")}}" class="whats"><i class="fab fa-whatsapp"></i></a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social">
                        <ul class="list-unstyled">

                            <li>
                                <a target="_blank" href="{{config('settings.social_instagram')}}" class="instagram"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="{{config('settings.social_twitter')}}" class="twitter"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="{{config('settings.social_linkedIn')}}" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer_logo">
                        <a href="{{route('website.index',['lang'=>app()->getLocale()])}}">
                            <img src="{{asset(config('settings.site_logo'))}}" class="img-fluid" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyRights">
        <div class="container">
            <p>{{trans('dashboard.main.All rights reserved')}}{{ now()->year}}</p>
        </div>
    </div>
</footer>
