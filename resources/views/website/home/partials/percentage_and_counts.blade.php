<section class="achievement">
    <div class="container">
        <div class="sec_title" data-aos="fade-up">
            <h3 class="title"><span>
                {{trans('home.achievements')}}</span>
            </h3>
        </div>
        <div class="row">
            @foreach($numbers as $number)
                <div class="col-lg-4">
                    <div class="achievement-card" data-aos="fade-up">
                        <img src="{{asset($number->image)}}" class="img-fluid" alt="users">
                        <p class="states"> <span class="count-number" data-count="{{$number->count}}">0</span> <span>+</span> {{$number->item}}</p>
                        <h3 class="title">{{$number->name}}</h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
