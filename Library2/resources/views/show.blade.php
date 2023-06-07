<x-main>
    <section>
    <div class="col-md-6">
        <img class="card-img-top mb-5 mb-md-0 rounded" src="{{empty($book->image) ? Storage::url('/images/default.png') : Storage::url($book->image)}}">
        </div>
        <div>
            <p>Nome: {{ $book->title }}</p>
            <p>Autore: {{ $book->author }}</p>
            <p>Pagine: {{ $book->pages }}</p>
            <p>Anno: {{ $book->year }}</p>
        </div>   
    </section> 
</x-main>