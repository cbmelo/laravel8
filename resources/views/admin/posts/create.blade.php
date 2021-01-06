@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-header">
                        Insert New Post
                    </div>
                    <div class="card-body">

                        @if ($errors->any())

                            <div>
                                @foreach ($errors->all() as $error)
                                    <p class="alert alert-danger" role="alert">{{$error}}</p>
                                @endforeach
                            </div>

                        @endif

                        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Blog Title</label>
                                <input type="text" name="title" id="title" class="form-control"  value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="">Article Content</label>
                                <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ old('content')}}</textarea>
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
