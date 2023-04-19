@extension('layouts.app')

@section('content')


    <h1>Create a new comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" @error ('title') is-invalid @enderror name="title" id="title" placeholder="Enter title">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" @error ('description') is-invalid @enderror name="description" id="description" rows="3"></textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        </div>
        <div class="form-group">
            <label for="thumb">Thumbnail</label>
            <input type="text" class="form-control" @error ('thumb') is-invalid @enderror name="thumb" id="thumb" placeholder="Enter thumbnail">
            @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" @error ('price') is-invalid @enderror name="price" id="price" placeholder="Enter price">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        </div>
        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" @error ('series') is-invalid @enderror name="series" id="series" placeholder="Enter series">
            @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
        </div>
        <div class="form-group">
            <label for="sale_date">Sale date</label>
            <input type="text" class="form-control" @error ('sale_date') is-invalid @enderror name="sale_date" id="sale_date" placeholder="Enter sale date">
            @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" @error ('type') is-invalid @enderror name="type" id="type" placeholder="Enter type" value="">
            @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endsection