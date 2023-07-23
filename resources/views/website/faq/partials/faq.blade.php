@foreach($faqs as $faq)
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne-{{$faq->id}}"
                    aria-expanded="false" aria-controls="flush-collapseOne">
                {{$faq->question}}
            </button>
        </h2>
        <div id="flush-collapseOne-{{$faq->id}}" class="accordion-collapse collapse"
             aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                {!! $faq->answer !!}
            </div>
        </div>
    </div>
@endforeach