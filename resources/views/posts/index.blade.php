@extends('layouts.master')

@section('content')
  <div class="section">
   
       @foreach ($posts as $post)
        @include('posts.post')
      @endforeach

  </div>
@stop
