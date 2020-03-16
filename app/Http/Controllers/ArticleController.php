<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Article $article )
    {

        return view('index', ['articles' => $article->where('is_published', 1)->get(),
            'lastArticle' => $article->where('is_published', 1)->orderBy('id', 'DESC')->first(),
            'articles' => $article->where('is_published', 1)->get(),
            'categories' => Category::All(),
            'users' => User::All()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user($id, Article $article)
    {
        $article = $article->where('is_published', 1)->where('user_id', $id)->get();
        if(!empty($article[0]))
        return view('User.article', ['articles' =>  $article]);

        else
            return view('404.404');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id,Article $article)
    {
        $article = $article->where('id', $id)->first();
        if(!empty($article) )
        return view('Article.article', ['article' => $article]);

        else
            return view('404.404');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function category($id ,Article $article)
    {
        $article = $article->where('is_published', 1)->where('category_id', $id)->get();
        if(!empty($article[0]) )
            return view('Category.article', ['articles' => $article]);

        else
            return view('404.404');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
