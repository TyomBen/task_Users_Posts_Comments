@extends('layouts.index')

@section('content')
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

@endsection
@section('info')
    @foreach ($posts as $post)
        @foreach ($post->comment as $comment)
            <tr>
                <td> {{ $comment->comments }}</td>
                <td> {{ $comment->created_at }}
                <td> {{ $post->user->name }}
                <td> {{ $post->title }}
            </tr>
        @endforeach
    @endforeach
    <div>{{ $posts->links() }}
 </div>

@endsection
