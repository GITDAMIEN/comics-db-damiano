<x-layout>

    <x-slot name="title">Dettagli fumetto</x-slot>

    <h2>Ecco i dettagli del fumetto {{$comic->title}}</h2>

    <div class="container">
        <div class="row">
            <div class="card col-12 col-sm-6 col-md-4 col-lg-3 mx-2">
                @if(!$comic->img)
                    <img src="https://i.pinimg.com/originals/fd/50/ae/fd50ae8387afe723db1f232b02565c26.jpg" alt="Immagine fumetto {{$comic->title}}">
                @else
                    <img src="{{Storage::url($comic->img)}}" alt="Immagine fumetto {{$comic->title}}">
                @endif
                <h5>Titolo: {{$comic->title}}</h5>
                <h5>Autore: {{$comic->author}}</h5>
                <h5>Pagine: {{$comic->pages}}</h5>
                <h5>Editore: {{$comic->publisher}}</h5>
                {{-- @if(Auth::user()->id == $comic->user->id) --}}
                    <a type="button" class="btn btn-warning" href="{{route('editComic', compact('comic'))}}">Modifica</a>
                    <a type="button" class="btn btn-danger">Elimina</a>
                {{-- @endif --}}
            </div>
        </div>
    </div>
    
</x-layout>