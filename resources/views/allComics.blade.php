<x-layout>

    <x-slot name="title">Tutti i fumetti</x-slot>

    <h2>Ecco tutti i fumetti su DB Comics:</h2>

    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
                <div class="card col-12 col-sm-6 col-md-4 col-lg-3 my-2">
                    <img src="{{Storage::url($comic->img)}}" alt="Immagine fumetto {{$comic->title}}">
                    <h5>Titolo: {{$comic->title}}</h5>
                    <a href="{{route('comicDetails', compact('comic'))}}" class="btn btn-secondary">Vedi dettagli</a>
                </div>
            @endforeach
        </div>
    </div>
    
</x-layout>