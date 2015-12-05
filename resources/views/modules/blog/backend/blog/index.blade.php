@extends('layouts.master')

@section('title')
	{{ trans('blog::blog.title.blog') }} | @parent
@endsection

@section('content-header')
	<h1>
		{{ trans('blog::blog.title.blog') }}
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ URL::route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
		<li class="active">{{ trans('blog::blog.title.articles') }}</li>
	</ol>
@stop

@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-body">
					<a href="{{route('backend::blog.article.create')}}" class="btn btn-block btn-lg btn-primary">{{trans('blog::blog.title.create article')}}</a>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">

			<div class="box">
				<div class="box-header">
					<h3 class="box-title">{{trans('blog::blog.title.all blog posts')}}</h3>
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
							<th>{{ trans('blog::blog.table.title') }}</th>
							<th>{{ trans('blog::blog.table.author') }}</th>
							<th>{{ trans('blog::blog.table.modified') }}</th>
							<th style="width: 8%">{{ trans('blog::blog.table.status') }}</th>
							<th style="width: 5%"></th>
						</tr>
						</thead>
						<tbody>
						
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