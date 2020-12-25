<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::latest()->paginate(15);

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'titre'=>'required|min:5',
            'description'=>'required|min:10'

        ]);

        Article::create($request->all());

        return redirect()->route('articles.index')->with('success', 'Article publié avec Succès! Félicitations!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //

        return view('articles.show', compact('article'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        return view('articles.edit', compact('article'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
       $request->validate([

       ]);

       $article->update($request->all());

       return redirect()->route('articles.index')->with('success', 'Article Modifié avec Succès! Félicitations');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //

        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article supprimé avec Succès! Félicitations');
    }

    /**

    Ici la fonction pour ajouter les likes (j'aime)
    Elle a besoin de l'id en paramètre pour faciliter le ciblage et l'accès aux attributs
    de l'article en question 

    */

    public function add_like($id)
    {
        //
       $article = Article::find($id);

       $article->nbre_jaime++;

       $article->save();

       return back();
    }

    /**

     Ici la fonction pour ajouter les Dislikes (j'aime pas)
    Elle a besoin de l'id en paramètre pour faciliter le ciblage et l'accès aux attributs
    de l'article en question 


    */

    public function add_dislike($id)
    {
        //
        $article = Article::find($id);

        $article->nbre_jaime_pas++;

        $article->save();

        return back();


    }

/*
    public function search_by_titre($titre)
    {
        //
        $article = Article::find($titre);

        return view('articles.index', compact('article'));
    }  */





}
