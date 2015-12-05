@extends('layouts.master')

@section('title')
    {{trans('blog::blog.title.edit article')}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class='box'>
                <div class='box-header'>
                    <h3 class='box-title'>{{trans('blog::blog.title.edit article')}}</h3>
                </div>
                <form role="form" method="POST" action="{{route('backend::blog.article.update', $article->slug)}}" >
                    <input type="hidden" name="_method" value="PUT">
                    {!! csrf_field() !!}
                    <div class='box-body pad'>
                        @include('blog::backend.forms.article')
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary pull-right">{{ trans('core::core.button.update') }}</button>
                    </div>
                </form>
            </div>
            @include('blog::backend.forms.images')
        </div>

        <div class="col-md-3">
            @include('blog::backend.forms.info')
            @include('blog::backend.forms.categoriey_tags')
        </div>

    </div>
@endsection

@section('javascript')
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
    <script>
        $(document).ready(function() {
            $(".select2").select2();
            $(".select2-tags").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            });
        });
    </script>
@endsection
