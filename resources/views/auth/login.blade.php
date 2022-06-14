<x-layout>

    <x-slot name="title">Login</x-slot>

    <h1 class="text-center">Fai il login</h1>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 my-2 text-center">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="col-12 col-md-6 my-2 text-center">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="col-12 col-md-4 col-lg-3">Login</button>
            </div>
        </div>
    </form>

</x-layout>