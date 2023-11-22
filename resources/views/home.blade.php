@extends('layouts.app')

{{-- On prend le contenu de layouts/app.blade.php --}}
{{-- Le contenu de la section content va prendre
    la place du yield content --}}
@section('content')
    <h1 class="text-3xl text-center mb-3">Hello Toi</h1>
@endsection
