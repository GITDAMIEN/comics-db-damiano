<x-layout>

    <x-slot name="title">Inserisci il tuo fumetto!</x-slot>

    @if ($errors->any())        
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <h2 class="text-center my-5">Inserisci il tuo fumetto!</h2>

    <div class="container">
        <div class="row">
            <form class="col-12 col-md-6 offset-md-3" method="POST" enctype="multipart/form-data" action="{{route('sendComic')}}">
                @csrf
                <div class="form-floating mb-3">
                    <input name="title" type="text" class="form-control" id="titleInput" placeholder="Titolo:" value="{{old('title')}}">
                    <label for="titleInput">Titolo:</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="author" type="text" class="form-control" id="authorInput" placeholder="Autore:" value="{{old('author')}}">
                    <label for="authorInput">Autore:</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="pages" type="text" class="form-control" id="pagesInput" placeholder="Pagine:" value="{{old('pages')}}">
                    <label for="pagesInput">Pagine:</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="publisher" type="text" class="form-control" id="publisherInput" placeholder="Editore:" value="{{old('publisher')}}">
                    <label for="publisherInput">Editore:</label>
                </div>
                <div class="mb-3">
                    <input name="img" type="file" value="{{old('img')}}">
                </div>
                <div>
                    <button type="submit">Carica fumetto</button>
                </div>
            </form>
        </div>
    </div>

</x-layout>