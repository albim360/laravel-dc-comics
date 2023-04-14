@foreach ($comics as $comic)
    <h2>{{ $comic->title }}</h2>
    <p>{{ $comic->author }}</p>
@endforeach
