<x-layout urlNavbar="{{route('home.index')}}" nameBtnNavbar="Voltar">
    id: {{$task->id}}<br>
    title: {{$task->title}}<br>
    description: {{$task->description}}<br>
</x-layout>
