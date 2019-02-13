@extends('layout')
@section('content')
<main role="main">
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
		  <div class="alert alert-success" role="alert">
			<h1>{{ $host->REMOTE_ADDR }}</h1>
			<p>{{ $host->HTTP_USER_AGENT }}</p>
		  </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection