@extends('layouts.master')

@section('title')
    Edit page
@endsection

@section('title_small')

@endsection

@section('breadcrumb')
    <li><a href="{{ route('backend::page.pages.index') }}">Page</a></li>
    <li class="active">Edit Page</li>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class='box'>
                <div class='box-header'>
                    <h3 class='box-title'>Page</h3>
                </div>
                <form role="form" method="POST" action="{{route('backend::page.pages.update', $page->slug)}}" >
                    <input type="hidden" name="_method" value="PUT">
                    {!! csrf_field() !!}
                    <div class='box-body pad'>
                            @include('page::backend.forms.page')
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">{{ trans('core::core.button.update') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3">
            @include('page::backend.forms.info')
        </div>
    </div>
@endsection

@section('javascript')
    {!! Theme::script('vendor/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.js') !!}
    <script type="text/javascript">
        $(function () {
            $(".textarea").wysihtml5({
                toolbar: {
                    "font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
                    "emphasis": true, //Italics, bold, etc. Default true
                    "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
                    "html": false, //Button which allows you to edit the generated HTML. Default false
                    "link": true, //Button to insert a link. Default true
                    "image": true, //Button to insert an image. Default true,
                    "color": false, //Button to change color of font
                    "blockquote": true, //Blockquote
                    "fa": true
                }
            });
        });
   </script>
@endsection
