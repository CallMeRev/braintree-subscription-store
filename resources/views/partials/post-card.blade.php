<article class="post-card card">
    <div class="card-content">
      <center><h1>{{ $product->name }}</h1></center>
      <hr>
      <br>
      <center><a href="{{ url('/subscribe', $product->slug) }}" class="btn btn-block btn-success" role="button">Subscibe</a></center>
    </div>
</article>
