<x-layout>

    <x-slot name="title">Register</x-slot>

    <h1 class="text-center">Registrati</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{route('register')}}">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 my-2 text-center">
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="col-12 col-md-6 my-2 text-center">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="col-12 col-md-6 my-2 text-center">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="col-12 col-md-6 my-2 text-center">
                    <input type="password" name="password_confirmation" placeholder="Repeat password">
                </div>
                <button type="submit" class="col-12 col-md-4 col-lg-3">Registrati</button>
            </div>
        </div>
    </form>

</x-layout>