
@foreach($services as $service_)

    <section class="about-us @if($loop->odd) operation @else clearance @endif  operation">
        <div class="container">
            <div class="row">
                @if($loop->odd)

                    <div class="col-lg-7">
                        <div class="about-text" data-aos="fade-up">
                            <img src="{{asset($service_->icon)}}" class="img-fluid icon" alt="wheel">
                            <h3 class="title">{{$service_->title}}</h3>
                            <p class="desc">{!! $service_->description !!}</p>
                            <a href="{{route('website.services.show',['lang'=>app()->getLocale(),'slug'=>$service_->slug])}}" class="link">{{__('home.See More')}}</a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-img" data-aos="fade-up">
                            <img src="{{asset($service_->image)}}" class="img-fluid" alt="operation">
                        </div>
                    </div>
                @else
                    <div class="col-lg-5">
                        <div class="about-img" data-aos="fade-up">
                            <img src="{{asset($service_->image)}}" class="img-fluid" alt="operation">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-text" data-aos="fade-up">
                            <img src="{{asset($service_->icon)}}" class="img-fluid icon" alt="wheel">
                            <h3 class="title">{{$service_->title}}</h3>
                            <p class="desc">{!! $service_->description !!}</p>
                            <a href="{{route('website.services.show',['lang'=>app()->getLocale(),'slug'=>$service_->slug])}}" class="link">{{__('home.See More')}}</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

@endforeach

{{--<section class="about-us clearance">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6 order-1 order-lg-0">--}}
{{--                <div class="about-img" data-aos="fade-up">--}}
{{--                    <img src="/assets/website/images/clearance.png" class="img-fluid" alt="clearance">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 order-0 order-lg-1">--}}
{{--                <div class="about-text" data-aos="fade-up">--}}
{{--                    <img src="/assets/website/images/cheked-list.svg" class="img-fluid icon" alt="cheked">--}}
{{--                    <h3 class="title">التخليص الجمركي</h3>--}}
{{--                    <p class="desc">--}}
{{--                        نعلم بأن التخليص الجمركي خدمة تعتبر خطوة مهمة في مجال النقل ، ونظراً للمشاكل والمعوقات التي تواجه--}}
{{--                        الشركات لتخليص البضائع عبر الحدود, فاننا في إسناد نقوم بمهمة التخليص الجمركي وتوثيق البيانات التي تخص--}}
{{--                        البضائع وفق إجراءات جمركية مسندة الى فريق مختص لتتمكن من نقل (ادخال) بضائعك بكل سهولة وسرعة--}}
{{--                    </p>--}}
{{--                    <a href="customs_clearance.html" class="link">المزيد</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<section class="about-us operation">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="about-text" data-aos="fade-up">--}}
{{--                    <img src="/assets/website/images/home.svg" class="img-fluid icon" alt="home">--}}
{{--                    <h3 class="title">ادارة و تشغيل المستودعات</h3>--}}
{{--                    <p class="desc">--}}
{{--                        سلسلة من الخدمات المتكاملة، تبدأ بالربط التقني مع متجرك الإلكتروني لاستقبال طلبات عملائك مباشرة واستلام--}}
{{--                        مخزونك ثم إدارة وتخزين وتغليف وتحضير الطلبات وتوصيلها إلى باب عميلك بسرعة واحترافية عالية وتنتهي بتزويدك--}}
{{--                        بتقارير لأهم أرقام متجرك الإلكتروني ومبيعاته وتحليل للبيانات وتفاصيلك مخزونك بشكل دوري--}}
{{--                    </p>--}}
{{--                    <a href="warehouse_management.html" class="link">المزيد</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="about-img" data-aos="fade-up">--}}
{{--                    <img src="/assets/website/images/operation2.png" class="img-fluid" alt="operation">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

