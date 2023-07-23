<div class="sec_title head" data-aos="fade-up">
    <h4 class="main_title">{{ trans('home.share.'.$type) }}</h4>
</div>

<div class="social" data-aos="fade-up">
    <ul class="list-unstyled">
        <li>
            <a href="https://www.linkedin.com/shareArticle?url={{Request::url()}}" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
        </li>
        <li>
            <a href="https://t.me/share/url?url={{Request::url()}}" class="telegram"><i class="fab fa-telegram-plane"></i></a>
        </li>
        {{--                            <li>--}}
        {{--                                <a href="https://www.instagram.com/sharer.php?u={{url()->current()}}" class="instagram"><i class="fab fa-instagram"></i></a>--}}
        {{--                            </li>--}}

        <li>
            <a href="https://www.snapchat.com/scan?attachmentUrl={{Request::url()}}" class="snap"><i class="fab fa-snapchat-ghost"></i></a>
        </li>
        <li>
            <a href="https://wa.me/send?text={{Request::url()}}" class="whats"><i class="fab fa-whatsapp"></i></a>
        </li>
    </ul>
</div>
