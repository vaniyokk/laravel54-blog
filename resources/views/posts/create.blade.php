@extends('layouts.master')

@section('content')
  <div class="section">
    <h1 class="title">New Article</h1>
    <hr>
    <form action="/posts" method="POST" role="form">
      {{ csrf_field() }}

      <label class="label">Title</label>
      <p class="control">
        <input type="text" name="title" id="title" class="input" value="{{ old('title') }}" >
      </p>

      <label class="label">Body</label>
      <p class="control">
        <textarea name="body" id="body" class="textarea" value="{{ old('body') }}" ></textarea>
      </p>

      <p class="control">
        <label class="checkbox">
          <input type="checkbox">
          Опубликовать
        </label>
      </p>

      @include('partials.errors')

      <p class="control">
        <button type="submit" class="button is-primary">Submit</button>
      </p>
        
    </form>

  </div>

@stop
