@extends('layouts.app')

@section('content')
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
            <tr>
                <td> {{ $post->id }} </td>
                <td> {{ $post->title }} </td>
                <td> {{ $post->content }} </td>
                <td> {{ $post->created_at }} </td>
            </tr>
        </tbody>
    </table>
@endsection
