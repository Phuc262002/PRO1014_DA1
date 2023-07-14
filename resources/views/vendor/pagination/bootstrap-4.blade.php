@if ($paginator->hasPages())
    <nav class="d-flex justify-content-between align-items-center">
        <div>
            <p>
                {!! __('Hiển thị') !!}
                @if ($paginator->firstItem())
                    <span><strong>{{ $paginator->firstItem() }}</strong></span>
                    {!! __('đến') !!}
                    <span><strong>{{ $paginator->lastItem() }}</strong></span>
                @else
                    {{ $paginator->count() }}
                @endif
                {!! __('của') !!}
                <span><strong>{{ $paginator->total() }}</strong></span>
                {!! __('kết quả') !!}
            </p>
        </div>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&laquo; Trước</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo; Trước</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Sau &raquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">Sau &raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif