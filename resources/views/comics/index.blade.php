@extends('layout.base')

@section('mainContent')
    <h1>Lista fumetti</h1>
    <table class="table table-striped">
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
                    <td>{{$comic['number']}}</td>
                    <td>{{$comic['publishing']}}</td>
                    <td>{{$comic['price']}}€</td>
                    <td><a href="{{route('comics.show', $comic['id'])}}">
                    <button type="button" class="btn btn-primary">Visualizza</button></a></td>
                    <td><a href="{{route("comics.edit", $comic['id'])}}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                    <td>
                        <form onsubmit="return confirm('Vuoi davvero cancellarla??');" action="{{route("comics.destroy", $comic['id'])}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="SUBMIT" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection