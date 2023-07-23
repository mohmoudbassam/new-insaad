<section class="clients">
    <div class="container">
        <div class="sec_title text-center" data-aos="fade-up">
            <h4 class="title"><span>{{trans('dashboard.main.Clients')}}</span></h4>
        </div>
        <div class="swiper" data-aos="fade-up">
            <div class="swiper-wrapper">
                @foreach($clients as $client)
                    <a target="_blank" href="{{$client->link}}" class="swiper-slide">
                        <div class="client-card">
                            <div class="client-image">
                                <img src="{{asset($client->image)}}" alt="DHL" class="img-fluid" />
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
