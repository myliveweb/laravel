@if ($paginator->hasPages())
<ul class="pagination">
@if ($paginator->onFirstPage())
	<li class="page-item disabled"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">&laquo;</a></li>
@else
	<li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">&laquo;</a></li>
@endif
@foreach ($elements as $element)
    @if (is_string($element))
	<li class="page-item disabled"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">{{ $element }}</a></li>
	@endif
    @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
    	<li class="page-item active"><a class="page-link" href="#">{{ $page }} <span class="sr-only">(current)</span></a></li>
		@else
		<li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
		@endif
        @endforeach
    @endif
@endforeach
@if ($paginator->hasMorePages())
	<li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">&raquo;</a></li>
@else
	<li class="page-item disabled"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">&raquo;</a></li>
@endif
</ul>
@endif