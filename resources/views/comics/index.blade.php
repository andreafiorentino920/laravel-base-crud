@extends('layout.base')

@section('mainContent')
    <h1>Lista fumetti</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">ISBN</th>
                <th scope="col">Fumetto edizione numero</th>
                <th scope="col">Pubblicato il</th>
                <th scope="col">Prezzo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{$comic['title']}}</td>
                    <td>{{$comic['isbn']}}</td>
                    <td>{{$comic['number']}} €</td>
                    <td>{{$comic['publishing']}}</td>
                    <td>{{$comic['price']}}</td>
                    <td><a href="{{route('comics.show', $comic['id'])}}">
                    <button type="button" class="btn btn-info">Visualizza</button></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection