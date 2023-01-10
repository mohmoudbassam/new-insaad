
<section class="start" id="start_with_us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="start-text" data-aos="fade-up">
                    <span class="sub-title"> {{trans('home.Get started with us')}} </span>
                    <h3 class="title">{{trans('home.save effort')}}</h3>
                    <p class="desc">
                        {{trans('home.focus')}}

                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                @livewire('website.application-form')
            </div>
        </div>
    </div>
</section>
