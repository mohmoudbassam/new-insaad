@if ($paginator->hasPages())
    <ul class="pagination justify-content-center">
        @if ($paginator->onFirstPage())
            <li>
                <a class=" disabled">
                    <i class="fas fa-angle-left"></i>
                </a>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.next')">
                    <i class="fas fa-angle-left"></i>
                </a>
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_string($element))
                <li>{{ $element }}</li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a class=" active" href="{{ $url }}">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                    <i class="fas fa-angle-right"></i>
                </a>
            </li>
        @else
            <li aria-disabled="true" aria-label="@lang('pagination.next')">
                <a class=" disabled">
                    <i class="fas fa-angle-right"></i>

                </a>
            </li>
        @endif
    </ul>
@endif
