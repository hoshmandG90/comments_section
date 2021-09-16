<div class="d-flex justify-content-center">

    @if ($paginator->hasPages())


    <ul class="d-flex justify-content-between ">
        {{-- Previous Page Link --}}
        @if($paginator->onFirstPage())
        <li wire:click="previousPage" class="mx-8 ">Prev</li>
        @else

        <li wire:click="previousPage" class="mx-8 btn shadow--hover text-darker ">Prev</li>

        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="page-item disabled d-none d-md-block" aria-disabled="true"><span
                class="page-link">{{ $element }}</span></li>
        @endif

                            {{-- Array Of Links --}}
                            @if (is_array($element))
                            @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                            <li class="page-item active d-none d-md-block" aria-current="page"><span class="page-link">{{ $page }}</span>
                            </li>
                            @else
                            <li class="page-item d-none d-md-block"><button type="button" class="page-link"
                                    wire:click="gotoPage({{ $page }})">{{ $page }}</button></li>
                            @endif
                            @endforeach
                            @endif
                            @endforeach

                            {{-- end of The Array Of Links --}}

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li wire:click="nextPage" class="mx-8 btn shadow--hover text-darker ">Next</li>

        @else
        <li class="mx-8 ">Next</li>


        @endif
    </ul>


    @endif


</div>
