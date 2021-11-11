@extends('layout.base')

@section('mainContent')
    <div class="row">
            <h2>Titolo: {{$comic['title']}}</h2>
            <h2>ISBN: {{$comic['isbn']}}</>
            <h2>Fumetto numero: {{$comic['number']}} €</h2>
            <h2>Pubblicato il: {{$comic['publishing']}}</h4>
            <h2>Prezzo: {{$comic['price']}}</h2>
    </div>
@endsection