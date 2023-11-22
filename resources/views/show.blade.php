@extends('layouts.app')

@section ('content')
<a href="/index" class="text-gray-500">Retour a la liste</a>
    <div class="flex">
        <div class="w-1/2">
            <img class="w-full" src="{{ $list->cover }}" alt="{{ $list->title }}">
        </div>
        <div class="<-1/2">
            <div class="border p-4 shadow-lg">
                <h1 class="text-4xl">{{ $list->title }}</h1>
                <p class="my-3">{{ $list->synopsis }}</p>
                <p class="text-sm">Durée: 
                    @if ($list->released_at)
                </p>
            <p>Sortie: {{ $list->released_at }}</p>
            @endif
            @if ($list->category_id)
            <p>Catégorie: {{ $list->category_id }}</p>
            @endif
            </div>
            @if ($list->youtube)
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/{{ $list ->youtube}} "title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            @endif
        </div>
    </div>
@endsection
