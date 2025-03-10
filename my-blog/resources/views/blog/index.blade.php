@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Notre Blog</h1>
                        <p>Bonne lecture</p>
                    </div>
                    <div class="col-4">
                        <p>Créer un nouveau message</p>
                        <a href="{{ route('blog.create')}}" class="btn btn-primary btn-sm">Ajouter un message</a>
                    </div>
                </div>
                <ul>
                    @forelse($posts as $post)
                        <li> <a href="{{ route('blog.show', $post->id)}}">{{ ucfirst($post->title)}}</a></li>
                    @empty
                        <li class="text-warning">Aucun article disponible</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection