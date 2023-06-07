<x-main>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="w-50 m-auto" action="{{Route('books.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        

        <h1>Inserisci il libro</h1>
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Pagine</label>
            <input type="number" class="form-control" name="pages" value="{{ old('pages') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Autore</label>
            <input type="text" class="form-control" name="author" value="{{ old('author') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Anno</label>
            <input type="number" class="form-control" name="year" value="{{ old('year') }}">
        </div>
        <div class="mb-3">
            <label for="pages">Immagine del Libro</label>
            <input class="form-control" id="image" name="image" type="file">
        </div>
        <button type="submit" class="btn btn-primary">Invia</button>
    </form>
</x-main>