<x-layout>

    <x-slot name="title">Dettagli fumetto</x-slot>

    <h2>Ecco i dettagli del fumetto {{$comic->title}}</h2>

    <div class="container">
        <div class="row">
            <div class="card col-12 col-sm-6 col-md-4 col-lg-3 mx-2">
                <img src="{{Storage::url($comic->img)}}" alt="Immagine fumetto {{$comic->title}}">
                <h5>Titolo: {{$comic->title}}</h5>
                <h5>Autore: {{$comic->author}}</h5>
                <h5>Pagine: {{$comic->pages}}</h5>
                <h5>Editore: {{$comic->publisher}}</h5>
            </div>
        </div>
    </div>
    
</x-layout>