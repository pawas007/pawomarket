@if ($paginator->lastPage() > 1)
    <ul class="pagination">
        @if( $paginator->currentPage() !== 1 )
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url(1) }}" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
        @endif
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }} page-item">
                <a href="{{ $paginator->url($i) }}" class="page-link">{{ $i }}</a>
            </li>
        @endfor
            @if( $paginator->currentPage() !== $paginator->lastPage() )
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->url($paginator->currentPage()+1) }}">
                <span aria-hidden="true">»</span>
            </a>
        </li>
        @endif
    </ul>
@endif
