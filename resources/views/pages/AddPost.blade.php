@extends('composant/partiel/header')

@section('content')
<div class="pt-10 flex items-center justify-center">
    <h1 class="p-3 mt-1 text-md leading-tight font-medium text-white rounded-lg bg-gray-900">Remplissez le formulaire pour ajouter un article</h1>
</div>
<br>
<div class="max-w-3xl p-10 mx-auto rounded-xl shadow-lg bg-white">
    <form class="w-full flex flex-col items-center" method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <div class="w-full">
            <input name="title" class="formfields" type="text" placeholder="Titre de l'article">
            @error("title")
                {{ $message }}
            @enderror
        </div>
        <div class="w-full">
            <input name="img" class="formfields" type="file">
            @error("img")
                {{ $message }}
            @enderror
        </div>
        <div class="w-full">
            <textarea name="postcontent" class="formfields" name="" id="" cols="30" rows="10" placeholder="Contenu de l'article"></textarea>
            @error("postcontent")
            {{ $message }}
            @enderror
        </div>
        <div class="flex items-center w-full justify-between">
            <button type="submit" class="p-3 items-center mt-1 text-md leading-tight font-medium text-white rounded-lg bg-blue-500">
                Ajouter un article
            </button>
            <a href="{{ route('home') }}" class="p-3 items-center mt-1 text-md leading-tight font-medium text-white rounded-lg bg-red-500">
                Annuler
            </a>
        </div>

    </form>
</div>

@endsection