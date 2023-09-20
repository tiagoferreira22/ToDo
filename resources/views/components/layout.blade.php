@props(['urlNavbar', 'nameBtnNavbar'])
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- css --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    {{-- fonts do Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">

    <title>
        {{$pageTitle ?? 'Todo'}}
    </title>
</head>
<body>
    <div class="container">
        <x-sidebar></x-sidebar>

        <div class="content">
            @if (!empty($urlNavbar) && !empty($nameBtnNavbar))
                <x-navbar url="{{$urlNavbar}}" nameContent="{{$nameBtnNavbar}}"></x-navbar>
            @endif
            <main>
                {{$slot}}
            </main>
        </div>

    </div>
</body>
</html>
