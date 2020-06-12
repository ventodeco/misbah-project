<?php

namespace App\Http\Controllers\Frontend;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
    	$articles = Article::paginate(6);
    	return view('frontend.product.index', [
            'articles' => $articles,
        ]);
    }

    public function show(Article $article)
    {
        // dd($article);
        $articles = Article::paginate(6);
    	return view('frontend.product.show', [
    		'article' => $article, 'articles' => $articles
    	]);
    }

    public function collection()
    {
        $articles = Article::paginate(6);
        return view('frontend.product.collections', [
            'articles' => $articles,
        ]);
    }

    public function contact()
    {
        return view('frontend.product.contact');
    }

}
