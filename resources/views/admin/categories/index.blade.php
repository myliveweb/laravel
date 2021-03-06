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
		<a href="{{route('admin.category.edit', $category)}}" class="list-group-item list-group-item-action">
			<div class="row">
			  <div class="col-md-11">
			  	{{ $category->name }}
			  </div>
			  <div class="col-md-1">
			  	<i class="fa fa-edit"></i>
			    <form style="display: inline-block;" onsubmit="if(confirm('Удалить?')) { return true } else { return false }" action="{{route('admin.category.destroy', $category)}}" method="post">
				  	<input type="hidden" name="_method" value="delete">
					{{csrf_field()}}
					<button type="submit" class="btn" style="padding: 0px 12px; font-size: 12px; background-color: transparent;"><i class="fa fa-trash"></i></button>
			  	</form>
			  </div>
			</div>
		</a>
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