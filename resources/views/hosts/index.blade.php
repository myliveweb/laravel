@extends('layout')
@section('content')
<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
		  <div class="list-group">
			@foreach ($hosts as $host)
			  <a href="/hosts/{{ $host->id }}" class="list-group-item list-group-item-action">{{ $host->REMOTE_ADDR }}</a>
			@endforeach
		  </div>
        </div>
      </div>
	  <div class="row mt-4">
	  	<div class="col-md-12">
	  	  <nav aria-label="Page navigation example">
			{{ $hosts->links('layouts.paginate') }}
		  </nav>
		</div>
	  </div>
    </div>
  </div>
</main>
@endsection