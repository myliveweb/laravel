@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
		@component('admin.components.breadcrumb')
			@slot('title') Создание категории @endslot
			@slot('parent') Главная @endslot
			@slot('active') Категории @endslot
		@endcomponent
    </div>
  </div>
  <div class="row">
    <div class="col-md-12" style="margin-bottom: 15px;">
		<form class="form-horizontal" action="{{route('admin.category.store')}}" method="post">
			{{ csrf_field() }}

			{{-- Form include --}}
			@include('admin.categories.partials.form')
		</form>
    </div>
  </div>
</div>

@endsection