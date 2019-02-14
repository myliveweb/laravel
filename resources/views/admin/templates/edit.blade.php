@extends('admin.layouts.app_admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
		@component('admin.components.breadcrumb')
			@slot('title') Редактирование шаблона @endslot
			@slot('parent') Главная @endslot
			@slot('active') Шаблоны @endslot
		@endcomponent
    </div>
  </div>
  <div class="row">
    <div class="col-md-12" style="margin-bottom: 15px;">
		<form class="form-horizontal" action="{{route('admin.template.update', $template)}}" method="post">
			<input type="hidden" name="_method" value="put">
			{{csrf_field()}}

			{{-- Form include --}}
			@include('admin.templates.partials.form')
		</form>
    </div>
  </div>
</div>

@endsection