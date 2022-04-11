@extends('layouts.app')

@section('title', 'Main')

@section('sidebar')
    @parent
@endsection

@section('content')


    <section>
        <div class="container">
            <h1>{{$article->title}}</h1>
            <div class="icons d-flex">
                <div class="icon views"><i class="bi bi-eye"><span class="count">{{$article->views}}</span></i></div>
                <div class="icon like"><i class="bi bi-heart"><span class="count">{{$article->likes}}</span></i></div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="tags d-flex">
                        @foreach($article->tags as $tag)
                            <a href="" class="tag"><span class="badge btn-secondary">{{$tag->title}}</span></a>
                        @endforeach
                    </div>
                </div>
            </div>
            <article>
                {{$article->content}}
            </article>
        </div>
    </section>

    <script>
        var articleId = "{{$article->id}}";
    </script>

    <script src="/js/viewer.js"></script>

    @include('partials.form')
@endsection
