@extends('../layout');

@section('title')
    Ajouter un film
@endsection

@section('content')
   {!! Form::open(['route' => 'adminvalid']) !!}
   {!! Form::token() !!}

   {!! Form::label('title', 'Entrer le titre ', ['class' => 'awesome']) !!}
   {!! Form::text('title', '') !!}
    <br>

   {!! Form::label('author', 'Auteur (Prénom Nom) ') !!}
   {!! Form::text('author', '') !!}
    <br>

   {!! Form::label('year', 'Année de parution ') !!}
   {!! Form::text('year', '') !!}
    <br>

   {!! Form::label('desc', 'Description ') !!}
   {!! Form::textarea('desc', '') !!}
    <br>

   {!! Form::submit('Envoyer') !!}
   {!! Form::close() !!}
@endsection

