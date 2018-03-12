@if ($paginator->hasPages())
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="pagination-previous" disabled>Página anterior</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous">Página anterior</a>
        @endif

        <ul class="pagination-list">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination-link active">{{ $page }}</li>
                    @else
                        <li><a href="{{ $url }}" class="pagination-link" aria-label="Goto page {{ $page }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        </ul>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a  class="pagination-next"href="{{ $paginator->nextPageUrl() }}" rel="next">Página siguiente</a>
        @else
            <a class="pagination-next" disabled>Página siguiente</a>
        @endif
    </nav>
@endif
