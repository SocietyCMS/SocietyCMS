<div class='box collapsed-box'>
    <div class='box-header'>
        <h3 class='box-title'>{{ trans('blog::blog.info.title') }}</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <form role="form" method="POST" action="{{route('backend::blog.article.update')}}" >
        <input type="hidden" name="_method" value="PUT">
        {!! csrf_field() !!}
        <div class="box-body">

            <div class="form-group">
                <label class="control-label" for="slug">{{ trans('blog::blog.info.created at') }}:</label>
                <p class="text-default">@if(isset($article)){{$article->present()->createdAt}}@endif</p>
            </div>
            <div class="form-group">
                <label class="control-label" for="slug">{{ trans('blog::blog.info.updated at') }}:</label>
                <p class="text-primary">@if(isset($article)){{$article->present()->updatedAt}}@endif</p>
            </div>
        </div>
    </form>
</div>