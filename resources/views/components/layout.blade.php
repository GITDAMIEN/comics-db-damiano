<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Fontawesome cdns --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{$title ?? ''}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <x-navbar/>

    <div class="min-vh-100">
        {{$slot}}
    </div>

    <x-footer/>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>