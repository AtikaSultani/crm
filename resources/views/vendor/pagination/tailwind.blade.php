@if ($paginator->hasPages())
    <div class="pagination">

        <span class="text-gray-600 text-sm px-1">Go to</span>
        <select class="w-24 text-sm overflow-y-auto py-1 outline-none rounded-sm" onchange="selectPage(this)">
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <option value="{{ $page }}" @if ($page == $paginator->currentPage())
                        selected
                                @endif >
                            <a href="{{ $url }}">Page {{ $page }}</a>
                        </option>
                    @endforeach
                @endif
            @endforeach
        </select>


        {{-- Previous Page Link --}}
        @if ( $paginator->onFirstPage())
            <svg class="fill-current h-8 w-8 text-gray-500"
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M7.05 9.293L6.343 10 12 15.657l1.414-1.414L9.172 10l4.242-4.243L12 4.343z"/>
            </svg>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                <svg class="fill-current h-8 w-8 text-gray-800"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M7.05 9.293L6.343 10 12 15.657l1.414-1.414L9.172 10l4.242-4.243L12 4.343z"/>
                </svg>
            </a>
        @endif

        <p class="text-grey-darkest">
            {{($paginator->currentpage()-1)*$paginator->perpage()+1}}
            to {{$paginator->currentpage()*$paginator->perpage()}}
            of {{$paginator->total()}}
        </p>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                <svg class="fill-current h-8 w-8 text-gray-800" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
                    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
                </svg>
            </a>
        @else
            <svg class="fill-current h-8 w-8 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 20 20">
                <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
            </svg>
        @endif
    </div>
@endif
