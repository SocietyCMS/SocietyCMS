@extends('layouts.master')

@section('content-header')
<h1>
    {{ trans('modules::modules.title.modules') }}
</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('user::users.breadcrumb.home') }}</a></li>
    <li class="active">{{ trans('modules::modules.breadcrumb.modules') }}</li>
</ol>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="data-table table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>{{ trans('modules::modules.table.name') }}</th>
                            <th width="15%">{{ trans('modules::modules.table.version') }}</th>
                            <th width="15%">{{ trans('modules::modules.table.enabled') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if (isset($modules))
                            @foreach ($modules as $module)
                            <tr>
                                <td>
                                    <a href="{{ route('backend::modules.modules.show', [$module->getLowerName()]) }}">
                                        {{ $module->name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('backend::modules.modules.show', [$module->getLowerName()]) }}">
                                        {{ str_replace('v', '', $module->version) }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('backend::modules.modules.show', [$module->getLowerName()]) }}">
                                        <span class="label label-{{$module->enabled() ? 'success' : 'danger'}}">
                                            {{ $module->enabled() ? trans('modules::modules.enabled') : trans('modules::modules.disabled') }}
                                        </span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
@stop
