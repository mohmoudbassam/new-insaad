

<section class="about-us operation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text" data-aos="fade-up">
                    <img src="/assets/website/images/cogwheel.svg" class="img-fluid icon" alt="wheel">
                    <h3 class="title">{{trans('home.operation-management')}}</h3>
                    <p class="desc">{!! $service->description !!}</p>
                    <a href="{{route('application.index',['lang'=>app()->getLocale()])}}" class="link">{{trans('home.request service')}}</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img" data-aos="fade-up">
                    <img src="/assets/website/images/operation.png" class="img-fluid" alt="operation">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="operation_steps">
    <div class="container">
        <div class="steps">
            <div class="step" data-aos="fade-up">
                <div class="text">
                    <h4 class="title">{{trans('home.operation-management-sec1-title-1')}}</h4>
                    <p class="desc">{{trans('home.operation-management-sec1-desc-1')}}</p>
                </div>
                <div class="img">
                    <img src="/assets/website/images/barcode.svg" class="img-fluid" alt="barcode">
                </div>
                <div class="number"> 1 </div>
            </div>
            <div class="step" data-aos="fade-up">
                <div class="text">
                    <h4 class="title">{{trans('home.operation-management-sec1-title-2')}}</h4>
                    <p class="desc">{{trans('home.operation-management-sec1-desc-2')}}</p>
                </div>
                <div class="img">
                    <img src="/assets/website/images/checklist.svg" class="img-fluid" alt="checklist">
                </div>
                <div class="number"> 2 </div>
            </div>
            <div class="step" data-aos="fade-up">
                <div class="text">
                    <h4 class="title">{{trans('home.operation-management-sec1-title-3')}}</h4>
                    <p class="desc">{{trans('home.operation-management-sec1-desc-3')}}</p>
                </div>
                <div class="img">
                    <img src="/assets/website/images/checklist.svg" class="img-fluid" alt="checklist">
                </div>
                <div class="number"> 3 </div>
            </div>
            <div class="step" data-aos="fade-up">
                <div class="text">
                    <h4 class="title">{{trans('home.operation-management-sec1-title-4')}}</h4>
                    <p class="desc">{{trans('home.operation-management-sec1-desc-4')}}</p>
                </div>
                <div class="img">
                    <img src="/assets/website/images/shield.svg" class="img-fluid" alt="shield">
                </div>
                <div class="number"> 4 </div>
            </div>
            <div class="step" data-aos="fade-up">
                <div class="text">
                    <h4 class="title">{{trans('home.operation-management-sec1-title-5')}}</h4>
                    <p class="desc">{{trans('home.operation-management-sec1-desc-5')}}</p>
                </div>
                <div class="img">
                    <img src="/assets/website/images/box.svg" class="img-fluid" alt="box">
                </div>
                <div class="number"> 5 </div>
            </div>
            <div class="step" data-aos="fade-up">
                <div class="text">
                    <h4 class="title">{{trans('home.operation-management-sec1-title-6')}}</h4>
                    <p class="desc">{{trans('home.operation-management-sec1-desc-6')}}</p>
                </div>
                <div class="img">
                    <img src="/assets/website/images/ordar.svg" class="img-fluid" alt="warehouse">
                </div>
                <div class="number"> 6 </div>
            </div>

        </div>
    </div>
</section>

<section class="our-vision promised">
    <div class="container">
        <div class="sec_title" data-aos="fade-up">
            <div class="title">{{trans('home.our promise')}}</div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="text" data-aos="fade-up">
                    <img src="/assets/website/images/medal.svg" class="img-fluid" alt="medal">
                    <h3 class="title">{{trans('home.operation-management-sec2-title-1')}}</h3>
                    <p class="desc">{{trans('home.operation-management-sec2-desc-1')}}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text" data-aos="fade-up">
                    <img src="/assets/website/images/like.svg" class="img-fluid" alt="like">
                    <h3 class="title">{{trans('home.operation-management-sec2-title-2')}}</h3>
                    <p class="desc">{{trans('home.operation-management-sec2-desc-2')}}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text" data-aos="fade-up">
                    <img src="/assets/website/images/trust.svg" class="img-fluid" alt="trust">
                    <h3 class="title">{{trans('home.operation-management-sec2-title-3')}}</h3>
                    <p class="desc">{{trans('home.operation-management-sec2-desc-3')}}</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="m-slider">
    <div class="container">
        <div class="sec_title text-center" data-aos="fade-up">
            <h4 class="title">{{trans('home.additional')}}</h4>
        </div>
        <div class="swiper" data-aos="fade-up">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="s-card g-box">
                        <div class="s-image">
                            <img src="/assets/website/images/Image 2.png" alt="DHL" class="img-fluid" />
                        </div>
                        <h3 class="title">{{trans('home.operation-management-sec3-title-1')}}</h3>
                        <p class="desc">{{trans('home.operation-management-sec3-desc-1')}}</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="s-card g-box">
                        <div class="s-image">
                            <img src="/assets/website/images/Image 3.png" alt="DHL" class="img-fluid" />
                        </div>
                        <h3 class="title">{{trans('home.operation-management-sec3-title-2')}}</h3>
                        <p class="desc">{{trans('home.operation-management-sec3-desc-2')}}</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="s-card g-box">
                        <div class="s-image">
                            <img src="/assets/website/images/report.png" alt="DHL" class="img-fluid" />
                        </div>
                        <h3 class="title">{{trans('home.operation-management-sec3-title-3')}}</h3>
                        <p class="desc">{{trans('home.operation-management-sec3-desc-3')}}</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="s-card g-box">
                        <div class="s-image">
                            <img src="/assets/website/images/Image 5.png" alt="DHL" class="img-fluid" />
                        </div>
                        <h3 class="title">{{trans('home.operation-management-sec3-title-4')}}</h3>
                        <p class="desc">{{trans('home.operation-management-sec3-desc-4')}}</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="s-card g-box">
                        <div class="s-image">
                            <img src="/assets/website/images/Image 6.png" alt="DHL" class="img-fluid" />
                        </div>
                        <h3 class="title">{{trans('home.operation-management-sec3-title-5')}}</h3>
                        <p class="desc">{{trans('home.operation-management-sec3-desc-5')}}</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="s-card g-box">
                        <div class="s-image">
                            <img src="/assets/website/images/Image 7.png" alt="DHL" class="img-fluid" />
                        </div>

                        <h3 class="title">{{trans('home.operation-management-sec3-title-6')}}</h3>
                        <p class="desc">{{trans('home.operation-management-sec3-desc-6')}}</p>
                    </div>
                </div>
            </div>
            <div class="swiper-buttons">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="swiper-pagination"></div>

        </div>
    </div>
</section>

<section class="cycle">
    <div class="container">
        <div class="sec_title" data-aos="fade-up">
            <img src="/assets/website/images/logo-dark.png" class="img-fluid" alt="logo">
        </div>
        <div class="cycles" data-aos="fade-up">
            <div class="item">
                <div class="item__img">
                    <img src="/assets/website/images/icon1.1.svg" class="img-fluid" alt="icon">
                    <span class="num">1</span>
                </div>
                <h3 class="title">{{trans('home.operation-management-sec4-1')}}</h3>
            </div>
            <div class="item">
                <div class="item__img">
                    <img src="/assets/website/images/icon2.2.svg" class="img-fluid" alt="icon">
                    <span class="num">2</span>
                </div>
                <h3 class="title">{{trans('home.operation-management-sec4-2')}}</h3>
            </div>
            <div class="item">
                <div class="item__img">
                    <img src="/assets/website/images/icon3.3.svg" class="img-fluid" alt="icon">
                    <span class="num">3</span>
                </div>
                <h3 class="title">{{trans('home.operation-management-sec4-3')}}</h3>
            </div>
            <div class="item">
                <div class="item__img">
                    <img src="/assets/website/images/icon4.4.svg" class="img-fluid" alt="icon">
                    <span class="num">4</span>
                </div>
                <h3 class="title">{{trans('home.operation-management-sec4-4')}}</h3>
            </div>
            <div class="item">
                <div class="item__img">
                    <img src="/assets/website/images/icon5.5.svg" class="img-fluid" alt="icon">
                    <span class="num">5</span>
                </div>
                <h3 class="title">{{trans('home.operation-management-sec4-5')}}</h3>
            </div>
        </div>
    </div>
</section>
