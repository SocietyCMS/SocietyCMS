@extends('layouts.master')

@section('title')
    Blog
@stop

@section('content')

    <div class="row">
        <div class="col-lg-3 pull-right">

            <form class="form-group">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </form>

            <ul class="list-group">
                <a class="list-group-item active" href="#">
                    All Articles
                </a>
                <a class="list-group-item " href="#">
                    New Features
                </a>
                <a class="list-group-item " href="#">
                    Meetups
                </a>
                <a class="list-group-item " href="#">
                    Contact
                </a>

            </ul>
        </div>

        <div class="col-lg-8">

            <h1>All Articles</h1>

            <hr>

            <div class="row">
                @foreach ($articles as $article)
                    <div class="panel panel-default">

                        @if($article->getFirstMedia('images'))
                            <a href="{{route('blog.show', $article->slug)}}"><img src="{{$article->getFirstMediaUrl('images', 'cover')}}" class="article-cover-image" data-holder-rendered="true"></a>
                        @endif

                        <div class="panel-body">
                            <span class="text-muted small"><i class="fa fa-clock-o"></i> {{$article->present()->updatedAt}} by <b>{{$article->user->present()->fullname}}</b> </span>

                            <div class="pull-right">
                                @foreach($article->tags as $tag)
                                    <span class="label label-primary label-o">{{$tag->name}}</span>
                                @endforeach
                            </div>


                            <h2><a href="{{route('blog.show', $article->slug)}}">{{$article->title}}</a></h2>
                            <p>{!!$article->present()->summary!!}</p>
                            <a href="{{route('blog.show', $article->slug)}}">read more...</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>


@stop
