<div class="box is-shadowless">
  <div class="content">
    <h3>Tags</h3>
    <div>
      @foreach ($tags as $tag)
        <a href="/posts/tags/{{ $tag }}"><span class="tag is-primary">{{ $tag }}</span></a>
      @endforeach
    </div>
  </div>
</div>

<div class="box is-shadowless">
  <div class="content">
    <h3>Archives</h3>
    <ul>
      <li><a href="#">March 2014</a></li>
      <li><a href="#">February 2014</a></li>
      <li><a href="#">January 2014</a></li>
      <li><a href="#">December 2013</a></li>
      <li><a href="#">November 2013</a></li>
      <li><a href="#">October 2013</a></li>
      <li><a href="#">September 2013</a></li>
      <li><a href="#">August 2013</a></li>
      <li><a href="#">July 2013</a></li>
      <li><a href="#">June 2013</a></li>
      <li><a href="#">May 2013</a></li>
      <li><a href="#">April 2013</a></li>
    </ul>
  </div>
</div>
