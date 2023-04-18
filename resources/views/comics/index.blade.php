<div>
    <div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Comics</h1>
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Create new comic</a>
        </div>
    </div>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>Prezzo</th>
                    <th>Serie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->description }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>
                        <a href="{{ route('comics.show', ['id' => $comic->id]) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('comics.edit', ['id' => $comic->id]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('comics.destroy', ['id' => $comic->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

        </table>
</div>