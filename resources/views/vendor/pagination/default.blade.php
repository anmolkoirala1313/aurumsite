
@if ($paginator->hasPages())

   <div class="pagination blog-pagination">
        <div class="column one pager_wrapper">
            <ul class='page-numbers'>

                @if ($paginator->onFirstPage())
                    <li class="disabled"><a class="prev page-numbers" disabled ><i class="fa fa-angle-double-left"></i>Prev</a></li>

                    @else
                    
                    <li class="disabled"><a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}" ><i class="fa fa-angle-double-left"></i>Prev</a></li>

                    @endif

                    @if($paginator->currentPage() > 3)
                    <li><a class="page-numbers" href="{{ $paginator->url(1) }}">1</a>

                    @endif

                    @if($paginator->currentPage() > 4)
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link seperate-pagination-link">...</span></li>

                    @endif

                    @foreach(range(1, $paginator->lastPage()) as $i)
                        @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                            @if ($i == $paginator->currentPage())
                                <li><span aria-current="page" class="page-numbers current">{{ $i }}</span></li>

                            @else
                                <li><a class="page-numbers" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                                @endif
                        @endif
                    @endforeach

                    @if($paginator->currentPage() < $paginator->lastPage() - 3)
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link seperate-pagination-link">...</span></li>

                    @endif
                    @if($paginator->currentPage() < $paginator->lastPage() - 2)
                        <li class="page-item"><a class="page-numbers" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
                    @endif

                    @if ($paginator->hasMorePages())
                      <li><a class="next page-numbers"
                      href="{{ $paginator->nextPageUrl() }}">Next<i
                        class="fa fa-angle-double-right"></i></a></li>
                    @else
                    <li class="disabled"><a class="next page-numbers" disabled>Next<i
                                class="fa fa-angle-double-right"></i></a></li>
                    @endif
                  
            </ul>
        </div>
    </div>
@endif



       

            