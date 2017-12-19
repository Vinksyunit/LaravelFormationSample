@extends('../layout');

@section('title')
    Ma liste de films.
@endsection

@section('content')
    <a href="{{route('admininsert')}}">Ajouter un film</a>

    @each('movies.moviecard', $movies, 'movie', 'movies.nomovie')
@endsection

