<div class="col-lg-3">

          <h1 class="my-4">Categories</h1>
          <div class="list-group">
          	@foreach ($categories as $category)
          		<a href="/movies/categories/{{ $category->name }}" class="list-group-item">{{ $category->name }}</a>
          	@endforeach
            
          </div>

        </div>
        <!-- /.col-lg-3 -->