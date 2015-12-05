@extends('layouts.master')

@section('title')
	{{ trans('setting::setting.title.settings') }} | @parent
@endsection

@section('content-header')
	<h1 class="pull-left">
		{{ trans('setting::setting.title.settings') }}
	</h1>
    <div class="clearfix"></div>
@stop

@section('content')
	
	<div class="row">
        <div class="col-sm-2">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">{{ trans('setting::setting.title.module settings') }}</h3>
                </div>
                <ul class="nav nav-list">
                    @foreach ($modulesWithSettings as $module => $settings)
                    <li>
                        <a href="{{ URL::route('backend::setting.settings.edit', [$module]) }}"
                           class="{{ $module == $currentModule->getLowerName() ? 'active' : '' }}">
                            {{ ucfirst($module) }}
                            <small class="badge pull-right bg-blue">{{ count($settings) }}</small>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            {!! Form::open(['route' => ['backend::setting.settings.store'], 'method' => 'post']) !!}
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"> {{ ucfirst($currentModule) }}</h3>
                    </div>
                    <div class="box-body">
                        @include('setting::backend.partials.fields', ['settings' => $currentModuleSettings])
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-flat">{{ trans('core::core.button.update') }}</button>
                    <button class="btn btn-default btn-flat" name="button" type="reset">{{ trans('core::core.button.reset') }}</button>
                    <a class="btn btn-danger pull-right btn-flat" href="{{ URL::route('backend::setting.settings.index')}}"><i class="fa fa-times"></i> {{ trans('core::core.button.cancel') }}</a>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@stop