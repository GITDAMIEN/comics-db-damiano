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
                    @if(!$comic->img)
                        <img src="https://i.pinimg.com/originals/fd/50/ae/fd50ae8387afe723db1f232b02565c26.jpg" alt="Immagine fumetto {{$comic->title}}">
                    @else
                        <img src="{{Storage::url($comic->img)}}" alt="Immagine fumetto {{$comic->title}}">
                    @endif

                    <h5>Titolo: {{$comic->title}}</h5>
                    <a href="{{route('comicDetails', compact('comic'))}}" class="btn btn-secondary">Vedi dettagli</a>
                </div>
            @endforeach
        </div>
    </div>
    
</x-layout>