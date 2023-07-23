
<section class="about-us" id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-6">
                <div class="about-text" data-aos="fade-up">
                    <h3 class="title"> {{trans('about.about us')}}</h3>
                    <p class="desc">
                        {!! $about->description_one !!}

                    </p>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="about-img" data-aos="fade-up">
                    <img src="/assets/website/images/About-us.png" class="img-fluid" alt="about us">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-vision">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text" data-aos="fade-up">
                            <img src="/assets/website/images/vision.svg" class="img-fluid" alt="vision">
                            <h3 class="title">{{trans('home.Our Vision')}}</h3>
                            <p class="desc">
                                {!! $about->vision !!}
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text" data-aos="fade-up">
                            <img src="/assets/website/images/rocket.svg" class="img-fluid" alt="vision">
                            <h3 class="title"> {{trans('home.mission')}}</h3>
                            <p class="desc">
                                {!! $about->mission !!}

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
