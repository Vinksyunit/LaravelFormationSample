@extends('../layout');

@section('title')
    Ma liste de films.
@endsection

@section('content')
    @each('movies.moviecard', $movies, 'movie', 'movies.nomovie')
@endsection

