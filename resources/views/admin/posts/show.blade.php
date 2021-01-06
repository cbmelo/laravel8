@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-3 mb-3">{{ $post->title}}</h1>
                <img src="{{ url("storage/{$post->image}") }}" alt="{{ $post->title}}" style="max-width:800px;">
                <p>{{ $post->content}}</p>
            </div>
            <hr>

        </div>
        <div class="row">
            <a class="btn btn-outline-warning" href="{{ route('posts.index') }}">See All Posts</a> |

            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-outline-danger" type="submit">Delete This Post</button>
            </form>
        </div>
    </div>
@endsection
