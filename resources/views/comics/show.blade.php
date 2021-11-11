@extends('layout.base')

@section('mainContent')
    <h1>Fumetto:</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">ISBN</th>
                <th scope="col">Fumetto edizione numero</th>
                <th scope="col">Pubblicato il</th>
                <th scope="col">Prezzo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$comics['id']}}</td>
                <td>{{$comics['title']}}</td>
                <td>{{$comics['isbn']}}</td>
                <td>{{$comics['number']}}</td>
                <td>{{$comics['publishing']}}</td>
                <td>{{$comics['price']}}€</td>
            </tr>
        </tbody>
    </table>
    </div>
@endsection