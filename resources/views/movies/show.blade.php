@extends ('layouts.master')

@section ('content')

  <div class="col-lg-9">

          <div class="card mt-4">
            {{-- <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt=""> --}}
            <iframe width="825" height="400"
				src="{{ $movie->trailers->first()->url }}">
			</iframe>
            <div class="card-body">
              <h3 class="card-title">{{ $movie->title }}</h3>
              <p class="card-text">{{ $movie->description }}</p>
             <ul class="list-group">
			    <li class="list-group-item"><strong>Director: </strong> {{$movie->getDirector($movie->id)->name }} </li>
			    <li class="list-group-item"><strong>Starring: </strong>
			    	@foreach ($movie->getActors($movie->id) as $actor)
			    		
			    		@if($loop->last)
			    			{{ $actor['name']}}
			    		@else
			    			{{ $actor['name'] }},
			    		@endif
			    	@endforeach
			    </li>
			    {{-- <li class="list-group-item">Third item</li> --}}
			  </ul>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div>
          </div>
          <!-- /.card -->
         @foreach ($movie->reviews as $review)
         	@include ('movies.reviews')
         @endforeach

         {{-- <a href="#" class="btn btn-success">Leave a Review</a> --}}

         @if (Auth::check())
			<div class="card">
				<div class="card-block">
					<form method="POST" action="/movies/{{ $movie->id }}/reviews">

						{{ csrf_field() }}
						<div class="form-group">
							<textarea name="body" placeholder="Post a review" class="form-control"></textarea>
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-primary">Leave a Review</button>
						</div>
					</form>
				</div>
			</div>
			@else
				<p>Please <a href="/login">Login</a> to leave a review!</p>
	          <!-- /.card -->
	         @endif

        </div>
        <!-- /.col-lg-9 -->

@endsection