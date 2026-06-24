@extends('layouts.app')

@section('content')

<div class="container mx-auto px-6 py-24">

    <h1 class="text-4xl font-bold mb-10">
        Artikel Terbaru
    </h1>

    <div class="grid md:grid-cols-3 gap-8">

        @foreach($articles as $article)

            <a href="{{ route('articles.show', $article) }}">

                <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

                    @if($article->image)
                        <img
                            src="{{ Storage::url($article->image) }}"
                            class="w-full h-56 object-cover">
                    @endif

                    <div class="p-6">

                        <h3 class="font-bold text-xl">
                            {{ $article->title }}
                        </h3>

                    </div>

                </div>

            </a>

        @endforeach

    </div>

    <div class="mt-10">
        {{ $articles->links() }}
    </div>

</div>

@endsection