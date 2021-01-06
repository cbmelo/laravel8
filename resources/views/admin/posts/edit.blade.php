@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-header">
                        Edit Post <strong>{{ $post->title}}</strong>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Blog Title</label>
                                <input type="text" name="title" id="title" class="form-control"  value="{{ $post->title }}">
                            </div>
                            <div class="form-group">
                                <label for="">Article Content</label>
                                <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $post->content }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input type="file" name="image" id="image">
                            </div>

                            <input class="btn btn-primary" type="submit" value="Insert Article">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
