<div class="col-lg-4 col-md-6 mb-4">
  <div class="card h-100">

    <div class="card-body">
      <h4 class="card-title">
        <a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a>
      </h4>
      <p class="card-text">{{ $movie->description }}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
    </div>
  </div>
</div>