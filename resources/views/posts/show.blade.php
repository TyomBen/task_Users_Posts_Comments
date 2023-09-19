@extends('layouts.show')

@section('read-more')
   <td> {{ $post->id }} </td>
   <td> {{ $post->title }} </td>
   <td> {{ $post->content }} </td>
   <td> {{ $post->created_at }} </td>
@endsection
