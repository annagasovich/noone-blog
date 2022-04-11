@extends('layouts.app')

@section('title', 'Main')

@section('sidebar')
    @parent
@endsection

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="tags d-flex flex-wrap">
                    @foreach($tags as $tag)
                        <a href="" class="tag"><span class="badge btn-secondary">{{$tag->title}}</span></a>
                    @endforeach
                </div>
            </div>
            <div class="col-md-8">
            @foreach($articles as $article)
                @include('partials.preview')
            @endforeach
            </div>
        </div>
        <div class="pagination d-flex justify-content-center">
            {{ $articles->links() }}
        </div>
    </div>
</section>

@endsection
