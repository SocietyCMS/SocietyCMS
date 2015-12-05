@extends('layouts.master')

@section('title')
	{{ trans('blog::blog.title.blog') }} | @parent
@endsection

@section('content-header')
	<h1>
		{{ trans('menu::menu.title.menu') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ URL::route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
		<li class="active">{{ trans('menu::menu.title.menu') }}</li>
	</ol>
@stop

@section('content')

	<div class="row">
		<div class="col-md-4">

			<div class="box">

				<div class="box-body no-padding">
					<table class="table table-hover">
						<thead>
						<tr>
							<th style="width: 5%"></th>
							<th>{{ trans('blog::blog.table.title') }}</th>
						</tr>
						</thead>
						<tbody id="sortable">
						@foreach($items as $item)
							<tr id="{{md5(json_encode($item->route))}}">
								<td><i class="fa fa-grip"></i></td>
								<td><b>{{$item->title}}</b></td>
							</tr>
						@endforeach
						</tbody></table>
				</div>
				<div class="box-footer clearfix">
				</div>

			</div>

		</div>
	</div>

@stop

@section('javascript')
	<script>
		$(function() {

			var updateUrl = "/api/menu/menu?token={{ $jwtoken }}";

			$('#sortable').sortable({
				update: function(event, ui) {
					var order = $(this).sortable('toArray');
					$.post(
							updateUrl,
							{
								order:order
							}
					);
				}
			}).disableSelection();

		});
	</script>
@stop