@extends('composant/partiel/header')

@section('content')
<div class="pt-10 flex items-center justify-center">
    <h1 class="p-3 mt-1 text-md leading-tight font-medium text-white rounded-lg bg-gray-900">Remplissez le formulaire pour editer votre article</h1>
</div>
<br>
<div class="max-w-3xl p-10 mb-10 mx-auto rounded-xl shadow-lg bg-white">
    <form class="w-full flex flex-col items-center" method="POST" action="{{ route('updatepost', $article->id) }}">
        @csrf
        @method('PUT')
        <div class="w-full">
            <input name="title" class="formfields" type="text" value="{{ $article->title }}">
            @error("title")
                {{ $message }}
            @enderror
        </div>
        <div class="w-full">
            <textarea name="postcontent" class="formfields" id="" rows="10">{{ $article->postcontent }}</textarea>
            @error("postcontent")
            {{ $message }}
            @enderror
        </div>
        <div class="flex items-center w-full justify-between">
            <button type="submit" class="p-3 items-center mt-1 text-md leading-tight font-medium text-white rounded-lg bg-blue-500">
                Mettre à jour l'article
            </button>
            <a href="{{ route('home') }}" class="p-3 items-center mt-1 text-md leading-tight font-medium text-white rounded-lg bg-red-500">
                Annuler
            </a>
        </div>

    </form>
</div>

@endsection