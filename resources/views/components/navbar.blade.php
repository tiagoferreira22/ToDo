@props(['url','nameContent'])

@if (!empty($url) && !empty($nameContent))
    <nav>
        <a href="{{$url}}" class="btn btn-primary">
            {{$nameContent}}
        </a>
    </nav>
@endif
