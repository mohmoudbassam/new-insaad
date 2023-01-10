<section class="services">
    <div class="container">
        <div class="sec_title" data-aos="fade-up">
            <h3 class="title"> <span>
                {{trans('home.services.isnaad services')}}</span>
            </h3>
        </div>
        <div class="row">
            @foreach($services as $service)
                <div class="col-lg-4">
                    <div class="service-card g-box" data-aos="fade-up">
                        <img src="{{asset($service->icon)}}" class="img-fluid" alt="wheel">
                        <h3 class="title">{{$service->title}}</h3>
                        <a href="{{route('website.services.show',['lang'=>app()->getLocale(),'slug'=>$service->slug])}}" class="link">{{__('home.request service')}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
