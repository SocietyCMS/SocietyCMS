<div class='box collapsed-box'>
    <div class='box-header'>
        <h3 class='box-title'>{{ trans('blog::blog.category.title') }}</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <form role="form" method="POST" action="{{route('backend::blog.article.update')}}" >
        <input type="hidden" name="_method" value="PUT">
        {!! csrf_field() !!}
        <div class="box-body">
            <div class="form-group">
                <label class="control-label" for="slug">{{ trans('blog::blog.category.category') }}:</label>
                <p>
                    <select class="select2" style="width: 100%;">
                        <option value="KONZERT">Konzert</option>
                        <option value="JUNIORBRASS">Junior Brass</option>
                        <option value="BEGINNERS">Beginners Brass</option>
                    </select>
                </p>
            </div>
            <div class="form-group">
                <label class="control-label" for="slug">{{ trans('blog::blog.category.tags') }}:</label>
                <p>

                    <select class="select2-tags form-control" multiple="multiple" style="width: 100%;">
                        @foreach($article->tags as $tag)
                            <option selected="selected">{{$tag->name}}</option>
                        @endforeach
                    </select>
                </p>
            </div>
        </div>
    </form>
</div>