@extends('layouts.create')

 @section('create')
 <form action="{{ route('store', ['post' => $post->id]) }}" method="POST">
     @csrf

     <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Coment" name="comment" />
     <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 @endsection
