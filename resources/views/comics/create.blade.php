@extension('layouts.app')

@section('content')


    <h1>Create a new comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Thumbnail</label>
            <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Enter thumbnail">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
        </div>
        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" name="series" id="series" placeholder="Enter series">
        </div>
        <div class="form-group">
            <label for="sale_date">Sale date</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Enter sale date">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="type" id="type" placeholder="Enter type">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection