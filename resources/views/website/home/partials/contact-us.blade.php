
<section class="about-us contact-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text" data-aos="fade-up">
                    <h3 class="title">{{trans('home.contact_us')}}</h3>
                    <p class="desc">
                        {{trans('home.we work to make it easier')}}
                    </p>
                    <div class="contact-list">
                        <div class="item">
                            <div class="img">
                                <img src="/assets/website/images/phone.png" alt="phone">
                            </div>
                            <p>{{trans('phone')}} <a href="tel:{{config('settings.site_phone_number')}}"> {{config('settings.site_phone_number')}} </a></p>
                            <p>{{trans('dashboard.main.email')}} <a href="mailto:{{config('settings.site_email')}}">{{config('settings.site_email')}}</a></p>
                        </div>
                        <div class="item">
                            <div class="img">
                                <img src="/assets/website/images/map.png" alt="location">
                            </div>
                            <p class="location">{{config('settings.company_location')}} </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="complaints" data-aos="fade-up">
                    <p class="message">{{trans('contact-us.complaint')}}</p>
                    <a href="#" class="shared primaryBtn">{{trans('home.contact_us')}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
