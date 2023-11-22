@extends('layouts.app')

@section('content')

<div class="flex items-center gap-10 mb-6">
    <h1 class="text-3xl">Liste</h1>
    <a href="/films/creer" class="px-4 py-2 text-sm bg-blue-500 hover:bg-blue-300 duration-200 text-white rounded-full shadow-sm">Créer un truc</a>
</div>

    <div class="flex flex-wrap mx-3">
    @foreach ($liste as $list)
    <div class="w-1/2 md:w-1/3 lg:w-1/5 mb-3">
        <div class="flex flex-col justify-between h-full">
            <a href="/index/{{$list->id}}" class="mx-3 block group">
            <img class="w-full h-[300px] mb-3" src="{{$list->cover}}" alt="">

            <h3 class="text-sm text-gray-600 underline group-hover:no-underline">{{ $list->title }}</h3>
                        <p>
                            {{-- @if ($list->released_at)
                            {{$list-> released_at-> diffForHumans()}}|
                            {{$list-> released_at-> translatedformat ('d F Y')}}|
                            @endif --}}
                            {{-- @if ($list->category_id)
                            {{$list-> category->name}}|
                            @endif --}}
                            {{-- {{$list->duration()}} --}}
                        </p>
                    </a>
            
            <div class="mx-3 mb-3 flex justify-around">
                <a class="text-sm bg-gray-500 px-2 py-1 text-gray-200" href="/list/{{ $list->id}}/modifier">Modifier</a>
                <a class="text-sm bg-red-500 px-2 py-1 text-gray-200" href="/list/{{ $list->id }}/supprimer" onclick="return confirm('Etes-vous sûr de vouloir supprimer le film {{$list->title}} ? ')" >Supprimer</a>
            </div>
            
        </div>
    </div>
    @endforeach
</div>
@endsection