<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;


class PostController extends Controller
{
    public function postslist()
    {
        $mypost = Post::latest()->paginate(3);
        //dd($mypost);

        return view('pages.home', ['mypost' => $mypost]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createpost()
    {
        return view('pages.AddPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storepost(StorePostRequest $request)
    {
        $article = Post::create($request->validated());
        if($request->hasFile('img'))
        {
            $article->addMediaFromRequest('img')->toMediaCollection('imageblog');
            $article->save();
        }
        //$article->title = $request->title;
        //$article->postcontent = $validated->postcontent;

        //return redirect()->route('pages.AddPost', $article->id)
        return redirect()->route('home')
            ->with('success', 'Article créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article = Post::find($id);

        if (!$article) {
            abort(404);
        }

        return view('pages.afficher', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //dd($post);
        $article = Post::findOrFail($id);
        return view('pages.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, string $id)
    {
        //dd($request->all());

        $article = Post::findOrFail($id)->update($request->validated());
        if($request->hasFile('img'))
        {
            $article->clearMediaCollection('imageblog');
            $article->addMediaFromRequest('img')->toMediaCollection('imageblog');
        }
        //$article->save();
        //dd($article);

        return redirect()->route('home')
            ->with('success', 'Article mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article = Post::findOrFail($id);

        $article->delete();

        return redirect()->route('home')
            ->with('success', 'Article supprimé avec succès.');
    }
}

