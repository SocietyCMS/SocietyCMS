<div class='box collapsed-box'>
    <div class='box-header'>
        <h3 class='box-title'>{{ trans('blog::blog.images.title') }}</h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <dropzone-image
                url="{{app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.blog.article.image.store',$article->slug)}}?token={{$jwtoken}}"
                init="{{app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.blog.article.image.index',$article->slug)}}?token={{$jwtoken}}"
                destroy="{{app('Dingo\Api\Routing\UrlGenerator')->version('v1')->route('api.blog.article.image.destroy',['article' => $article->slug, 'image' => '[$1]'])}}/?token={{$jwtoken}}"
                ></dropzone-image>
    </div>
</div>