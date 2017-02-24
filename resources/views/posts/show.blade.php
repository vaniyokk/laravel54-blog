@extends('layouts.master')

@section('content')
  <div class="box is-shadowless">
    <h1 class="title">{{ $post->title }}</h1>
    <hr>
    <p>{{ $post->body }}</p>
    
    <hr>
    <h2 class="subtitle">
      Comments:
    </h2>

    <ul class="list-group">
      @foreach ($post->comments as $comment)
        <li class="list-group-item">
          <strong>{{ $comment->created_at->diffForHumans() }}: &nbsp;</strong>
          {{ $comment->body }}
        </li>
      @endforeach
    </ul>
    <hr>

    <div class="box">
      <form method="POST" action="/posts/{{ $post->id }}/comments">
        {{ csrf_field() }}

        <label class="label">Your comment</label>
        <p class="control">
          <textarea name="body" class="textarea" placeholder="Textarea"></textarea>
        </p>

        <div class="form-group">
          <button type="submit" class="button is-primary">Publish</button>
        </div>   
        
      </form>

      @include('partials.errors')
    </div>
   

  </div>


@stop
