@extends('composant/partiel/header')

@section('content')
<div class="pt-10 flex items-center justify-center">
    <h1 class="uppercase text-lg text-4xl">Derniers articles</h1>
</div>
<div class="pt-3 md:max-w-2xl mx-auto overflow-auto">
    <div class="flex justify-end my-4 items-center">
        <a href="{{ route('create') }}" class="flex space-x-1 p-3 items-center mt-1 text-md leading-tight font-medium text-white rounded-lg bg-indigo-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
           <span>Ajouter un article</span></a>
    </div>
    @if($mypost->isEmpty())
            <p>Aucun article trouvé.</p>
        @else
    
            <ul>
                @foreach($mypost as $article)
                    <li class="card">
                        <div class="flex items-center justify-between">
                            <div>
                                <img src="{{ $article->img }}" alt="imageblog">
                            </div>
                            <h2 class="flex items-center uppercase tracking-wide text-sm text-indigo-500 font-semibold"><a href="{{ route('postshow',$article->id) }}">
                               {{ $article->title }}</a></h2>
                            <div class="flex space-x-2 pb-2 items-center">
                                <a href="{{ route('editpost',$article->id) }}" class="px-2 py-1 block mt-1 text-sm leading-tight font-medium text-white rounded-lg bg-orange-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                  </svg>
                                  </a>    
                                <form method="POST" action="{{ route('suppression',$article->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-2 py-1 block mt-1 text-sm leading-tight font-medium text-white rounded-lg bg-red-500"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                      </svg>
                                      </button>
                                </form>
                            </div>
                        </div>
                        <p class="">{{ substr($article->postcontent, 0, 250).' ...' }}</p>
                    </li>
                @endforeach
                <div class="mb-5">
                    {{ $mypost->links("pagination::tailwind") }}
                </div>
            </ul>
    @endif
</div>

@endsection