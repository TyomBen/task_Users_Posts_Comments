@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2 class="mt-5">Data</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Created_at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->created_at }}
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Read more</a>
                            @auth
                                <a href="{{ route('create', ['post' => $post->id]) }}" class="btn btn-primary">Create Comment</a>
                            @endauth
                        </td>
                    </tr>
                @endforeach
            <tbody>
                <thead>
                    <tr>
                        <th>Comments</th>
                        <th>Created_at</th>
                        <th>Creator</th>
                        <th>Posts-Title</th>
                    </tr>
                </thead>
                @foreach ($posts as $post)
                    @foreach ($post->comment as $comment)
                        <tr>
                            <td> {{ $comment->comments }}</td>
                            <td> {{ $comment->created_at }} </td>
                            <td> {{ $post->user->name }} </td>
                            <td> {{ $post->title }} </td>
                        </tr>
                    @endforeach
                @endforeach
                <div>{{ $posts->links('pagination::bootstrap-4') }}
                </div>
            </tbody>
        </table>
    </div>
@endsection
