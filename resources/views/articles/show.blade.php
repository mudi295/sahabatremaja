@extends('layouts.app')

@section('content')

<div class="container mx-auto px-6 py-24 max-w-4xl">

    @if($article->image)

        <img
            src="{{ Storage::url($article->image) }}"
            class="w-full rounded-2xl mb-8">

    @endif

    <h1 class="text-5xl font-bold mb-6">
        {{ $article->title }}
    </h1>

    <div class="text-gray-500 mb-8">
        {{ $article->created_at->format('d F Y') }}
    </div>

    <div class="prose max-w-none">

        {!! $article->content !!}

    </div>

</div>

@endsection