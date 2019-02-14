@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
		@component('admin.components.breadcrumb')
			@slot('title') Категории @endslot
			@slot('parent') Главная @endslot
			@slot('active') Категории @endslot
		@endcomponent
    </div>
  </div>
  <div class="row">
    <div class="col-md-12" style="margin-bottom: 15px;">
	<a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> Создать категорию</a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
	  <div class="list-group">
		@forelse ($categories as $category)
		  <a href="{{route('admin.category.edit', ['id'=>$category->id])}}" class="list-group-item list-group-item-action"><i class="fa fa-edit"></i> {{ $category->name }}</a>
		@empty
		  <span class="list-group-item list-group-item-action">Список категорий пуст</span>
		@endforelse
	  </div>
    </div>
  </div>
  <div class="row">
  	<div class="col-md-12">
  	  <nav aria-label="Page navigation example">
		{{ $categories->links('layouts.paginate') }}
	  </nav>
	</div>
  </div>
</div>

@endsection