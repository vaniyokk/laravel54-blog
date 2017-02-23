@extends('layouts.master')

@section('content')
  <div class="col-sm-8 blog-main">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>


    <ul class="list-group">
      @foreach ($post->comments as $comment)
        <li class="list-group-item">
          <strong>{{ $comment->created_at->diffForHumans() }}: &nbsp;</strong>
          {{ $comment->body }}
        </li>
      @endforeach
    </ul>
    <hr>
    <div class="card">
      <div class="card-block">
        <form method="POST" action="/posts/{{ $post->id }}/comments">
          {{ csrf_field() }}

          <div class="form-group">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-sm btn-primary">Publish</button>
          </div>   
          
        </form>

        @include('partials.errors')
      </div>
    </div>

  </div>


@stop
