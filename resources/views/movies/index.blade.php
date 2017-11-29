@extends ('layouts.master')

@section ('content')

    <!-- Page Content -->

        <div class="col-lg-9">

          <div class="row">

          	@foreach ($movies as $movie)
          		@include ('movies.movie')
          	@endforeach

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      <!-- /.row -->

    <!-- /.container -->

@endsection