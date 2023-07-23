<section class="about-us clearance clearance-p">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  ">
                <div class="about-text" data-aos="fade-up">
                    <img src="/assets/website/images/cheked-list.svg" class="img-fluid icon" alt="cheked">
                    <h3 class="title">{{trans('home.custom-clearness')}}</h3>
                    <p class="desc">{{trans('home.custom-clearness-desc')}}</p>
                    <a href="{{route('application.index',['lang'=>app()->getLocale()])}}" class="link">{{trans('home.request service')}}</a>
                </div>
            </div>
            <div class="col-lg-6  ">
                <div class="about-img" data-aos="fade-up">
                    <img src="/assets/website/images/clearance.png" class="img-fluid" alt="clearance">
                </div>
            </div>

        </div>
    </div>
</section>

<section class="clearance-sec">
    <div class="container">
        <div class="sec_title text-center" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <p class="desc">{{trans('home.custom-clearness-desc2')}}</p>
                </div>
            </div>
        </div>
        <div class="clearance-services">
            <div class="service g-box" data-aos="fade-up">
                <div class="s-image">
                    <img src="/assets/website/images/invoices.png" alt="invoices" class="img-fluid" />
                </div>
                <h3 class="title">{{trans('home.custom-clearness-1')}}</h3>
            </div>
            <div class="service g-box" data-aos="fade-up">
                <div class="s-image">
                    <img src="/assets/website/images/gmark.png" alt="invoices" class="img-fluid" />
                </div>
                <h3 class="title">{{trans('home.custom-clearness-2')}}</h3>
            </div>
            <div class="service g-box" data-aos="fade-up">
                <div class="s-image">
                    <img src="/assets/website/images/tax.png" alt="invoices" class="img-fluid" />
                </div>
                <h3 class="title">{{trans('home.custom-clearness-3')}}</h3>
            </div>
            <div class="service g-box" data-aos="fade-up">
                <div class="s-image">
                    <img src="/assets/website/images/heavy.png" alt="invoices" class="img-fluid" />
                </div>
                <h3 class="title">{{trans('home.custom-clearness-4')}}</h3>
            </div>
            <div class="service g-box" data-aos="fade-up">
                <div class="s-image">
                    <img src="/assets/website/images/docx.png" alt="invoices" class="img-fluid" />
                </div>
                <h3 class="title"> {{trans('home.custom-clearness-5')}}</h3>
            </div>
        </div>
    </div>
</section>
