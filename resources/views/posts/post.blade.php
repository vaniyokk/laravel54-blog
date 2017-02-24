<div class="box is-two-thirds">

  <h2 class="title">
    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
  </h2>

  <p class="subtitle">
    {{ $post->user->name }} on 
    {{ $post->created_at->toFormattedDateString() }}
  </p>

  <p>
    {{ $post->body }}
  </p>
  <br>
  <p>
    Tags: 
    @foreach ($post->tags as $tag)
      <span class="tag is-light is-medium">{{ $tag->name }}</span>
    @endforeach
  </p>
  
</div>