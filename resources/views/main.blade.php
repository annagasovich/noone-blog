@extends('layouts.app')

@section('title', 'Main')

@section('sidebar')
    @parent
@endsection

@section('content')


    <section>
        <div class="container">
            <div class="text-center mb-5">
                <h5 class="text-primary h6">Noone test blog</h5>
                <h2 class="display-20 display-md-18 display-lg-16">Тестовое задание</h2>
            </div>
            <div class="row">
                @foreach($articles as $article)
                <div class="col-lg-4 col-md-6 mb-2-6">
                    @include('partials.preview')
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
