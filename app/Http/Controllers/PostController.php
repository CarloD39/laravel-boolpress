<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPosts = Post::all();
        
        return view('posts.index', compact('allPosts'));
    }

    /**
     * Show the form for creating a new resource.
     * Mostra un form vuoto pep popolare tutti idati del
     * nostro modello
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * Riceve tutti i dati dalla form (dopo il submit)
     * e salva il nostro oggetto (nel nostro database)
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $validated = $request->validate([
            'cover'=> 'url',
            'author' => 'max:50'
        ]);

        //recupero dati dalla request
        //creo un oggetto dal modello Post
        //setto tutti i parametri con i dati della request
        //$post->save()
        //dd($request);
        $data = $request->all();

        $post = new Post();
        $post->author = $data['author'];
        $post->abstract = $data['abstract'];
        $post->status = $data['status'];
        $post->cover = $data['cover'];
        $post->like = $data['like'];
        $post->comment_user = $data['comment_user'];
        $post->save();

        return redirect()->route('posts.show', $post->id);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
