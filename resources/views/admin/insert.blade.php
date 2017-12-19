@extends('../layout');

@section('title')
    @isset($movie)
    Modifier un film
    @endisset
    @empty($movie)
    Ajouter un film
    @endempty
@endsection

@section('content')
    <a href="{{route('movieslisting')}}">Retour à la liste des films</a>

    <br>

   {!! Form::open(['route' => 'adminvalid']) !!}
   {!! Form::token() !!}

   @isset($movie)
   {!! Form::hidden('id', $movie->id) !!}
   @endisset

   {!! Form::label('title', 'Entrer le titre ', ['class' => 'awesome']) !!}
   {!! Form::text('title', isset($movie) ? $movie->title : '') !!}
    <br>

   {!! Form::label('author', 'Auteur (Prénom Nom) ') !!}
   {!! Form::text('author', isset($movie) ? $movie->author['firstname'] . ' ' . $movie->author['lastname'] : '') !!}
    <br>

   {!! Form::label('year', 'Année de parution ') !!}
   {!! Form::text('year', isset($movie) ? $movie->year : '') !!}
    <br>

   {!! Form::label('desc', 'Description ') !!}
   {!! Form::textarea('desc',  isset($movie) ? $movie->desc : '') !!}
    <br>

   {!! Form::submit('Envoyer') !!}
   {!! Form::close() !!}
@endsection

