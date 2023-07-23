@if ($paginator->hasPages())
        @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : $this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1)

        <ul class="pagination justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class=" disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a  aria-hidden="true"> <i class="fas fa-angle-left"></i></a>
                </li>
            @else
                <li >
                    <a type="button" class="page-link-scroll-to-top"
                            dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                             wire:click="previousPage('{{ $paginator->getPageName() }}')"
                       wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')"><i class="fas fa-angle-left"></i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class=" disabled" aria-disabled="true">
                        <a >{{ $element }}</a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li
                                wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page-{{ $page }}"
                                aria-current="page"><a class=" active" >{{ $page }}</a></li>
                        @else
                            <li
                                wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page-{{ $page }}">
                                <a type="button" class="page-link-scroll-to-top"
                                        wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li >
                    <a type="button" class="page-link-scroll-to-top"
                            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                             wire:click="nextPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">
                        <i class="fas fa-angle-right"></i>
                    </a>
                </li>
            @else
                <li class=" disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a  aria-hidden="true"> <i class="fas fa-angle-right"></i></a>
                </li>
            @endif
        </ul>

    @endif
