@extends('layouts.master')

@section('content')
  <div class="col-sm-8 blog-main">
    <h1>Добавить статью</h1>
    <hr>
    <form action="/posts" method="POST" role="form">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="title">Заголовок:</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" >
      </div>

      <div class="form-group">
        <label for="body">Текст статьи:</label>
        <textarea name="body" id="body" class="form-control" value="{{ old('body') }}" ></textarea>
      </div>

      @include('partials.errors')

      <button type="submit" class="btn btn-primary">Опубликовать</button>
    </form>

  </div>

@stop
