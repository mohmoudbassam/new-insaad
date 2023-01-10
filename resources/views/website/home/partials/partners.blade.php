<section class="clients platforms">
    <div class="container">
        <div class="sec_title text-center" data-aos="fade-up">
            <img src="/assets/website/images/logo-dark.png" class="mb-2" alt="img-fluid">
            <h4 class="title">
                <span>{{trans('home.isnaad connects with')}}</span>
            </h4>
        </div>
        <div class="swiper" data-aos="fade-up">
            <div class="swiper-wrapper">

                @foreach($partners as $partner)
                    <a target="_blank" href="{{$partner->link}}" class="swiper-slide">
                        <div class="client-card">
                            <div class="client-image">
                                <img src="{{asset($partner->image)}}" alt="DHL" class="img-fluid" />
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="swiper-buttons">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>
