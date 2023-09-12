@extends('composant/partiel/header')

@section('content')
<div class="card mx-auto p-20 mx-10 my-20">
    <h1 class="uppercase tracking-wide text-sm font-semi-bold">Détails de l'article</h1>
    <div class="space-x-2">
        <h2 class="py-2 uppercase font-bold text-2xl">{{ $article->title }}</h2>
        <p class="py-3">{{ $article->postcontent }}</p>
        <div class="flex items-center justify-center mt-3">
            <div class="w-8 h-8 rounded-md py-3 flex justify-center items-center bg-blue-700 text-white">
                <a href="{{ route('home') }}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 font-bold">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                  </svg>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection