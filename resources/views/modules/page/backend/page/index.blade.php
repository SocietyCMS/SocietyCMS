@extends('layouts.master')

@section('title')
	{{ trans('page::page.title.pages') }} | @parent
@endsection

@section('content-header')
	<h1>
		{{ trans('page::page.title.pages') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ URL::route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
		<li class="active">{{ trans('page::page.title.pages') }}</li>
	</ol>
@stop

@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-body">
					<a href="{{route('backend::page.pages.create')}}" class="btn btn-block btn-lg btn-primary">{{trans('page::page.title.create page')}}</a>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">

			<div class="box">
				<div class="box-header">
					<h3 class="box-title">{{trans('page::page.title.all pages')}}</h3>
					<div class="box-tools">
						<div class="input-group" style="width: 150px;">
							<input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
							<div class="input-group-btn">
								<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
				<div class="box-body no-padding">
					<table class="table table-hover">
						<thead>
						<tr>
							<th>{{ trans('page::page.table.title') }}</th>
							<th>{{ trans('page::page.table.author') }}</th>
							<th>{{ trans('page::page.table.modified') }}</th>
							<th style="width: 8%">{{ trans('page::page.table.status') }}</th>
							<th style="width: 5%"></th>
						</tr>
						</thead>
						<tbody>
						@foreach ($pages as $page)
							<tr>
								<td><b><a href="{{route('backend::page.pages.edit',$page->slug)}}">{{$page->title}}</a></b></td>
								<td>{{ $page->user->present()->fullname }}</td>
								<td>{{$page->present()->updatedAt}}</td>
								<td>
									@if($page->published)
										<span class="label label-success">Published</span>
									@else
										<span class="label label-warning">Draft</span>
									@endif
								</td>
								<td>
									<div class="btn-group">
										<button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
										<ul class="dropdown-menu pull-right" role="menu">
											<li><a href="{{route('backend::page.pages.edit', $page->slug)}}">Edit</a></li>
											<li class="disabled"><a href="#">Delete</a></li>
										</ul>
									</div>
								</td>
							</tr>
						@endforeach
						</tbody></table>
				</div>
				<div class="box-footer clearfix">
					<ul class="pagination pagination-sm no-margin pull-right">
						<li><a href="#">&laquo;</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
				</div>

			</div>

		</div>
	</div>

@stop