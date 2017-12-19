@extends('../layout');

@section('title')
    @isset($movie)
    {{$movie['title']}}
    @endisset
    @empty($movie)
    Film introuvable
    @endempty

@endsection

@section('content')
    <a href="{{route('movieslisting')}}">Retour à la liste</a>
    @isset($movie)
        @include('movies.moviecard', [
            'movie' => $movie,
            'withDetail' => true,
        ])
    @endisset
    @empty($movie)
        <br>
        @component('alert', [
            'status' => 'danger',
        ])
        Aucun film correspondant à votre demande.
        @endcomponent
    @endempty
@endsection

