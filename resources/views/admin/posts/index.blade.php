@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">


                <form action="{{ route('posts.search') }}" method="post">
                    @csrf
                    <input type="text" name="search" placeholder="Search">
                    <button type="submit">Search</button>
                </form>

                {{-- <div class="row">
                    <div class="col">
                        @foreach ($posts as $post)
                        {{ $post->id}}
                        {{ $post->title}}
                        {{ $post->created_at}}
                        @endforeach
                    </div>
                </div> --}}
                <div class="card mt-3">
                    <div class="card-header">

                        <div class="row">
                            <div class="col">


                                @if (session('message'))

                                    <p class="alert alert-success">{{(session('message')) }}</p>

                                @endif


                                <H1>All Posts</H1>
                            </div>
                            <div class="col ">
                                <a class="btn btn-outline-success" href="{{ route('posts.create') }}">Insert New Article</a>

                            </div>
                        </div>


                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID#</th>
                                <th>Featured Image</th>
                                <th>Title</th>
                                <th>Date Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->id}}</td>
                                    <td><img src="{{ url("storage/{$post->image}") }}" alt="{{ $post->title}}" style="max-width:100px;"></td>
                                    <td>{{ $post->title}}</td>
                                    <td>{{ $post->created_at}}</td>
                                    <td>

                                        <a class="btn btn-outline-success" href="{{ route('posts.show', $post->id) }}">Read More</a> |

                                        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-outline-danger" type="submit">Delete This Post</button>
                                        </form>

                                        <a class="btn btn-outline-info" href="{{ route('posts.edit', $post->id) }}">Update Post</a>
                                </td>
                                </tr>
                            @endforeach


                            </div>
                        </tbody>
                      </table>



                </div>


            </div>
            <hr>
            <div class="row">
                <div class="col-4">

                    @if (isset($filters))
                        {{ $posts->appends($filters)->links() }}
                    @else
                    {{ $posts->links() }}
                    @endif
                </div>
            </div>
    </div>



@endsection
