<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{

    public function index()
    {
    	return view('admin.article.index', ([
    		'title' => 'Data Produk'
    	]));
    }

	public function create()
    {
    	return view('admin.article.create',([
    		'title' => 'Tambah Produk'
    	]));
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
    		'content' => 'required|min:20',
            'cover' => 'required',
    		'price' => 'required',
    	]);

    	$cover = $request->cover;

    	Article::create([
    		'title' => $request->title,
    		'content' => $request->content,
    		'cover' => $cover,
            'user_id' => Auth::id(),
    		'price' => $request->price,
    	]);

    	return redirect()->route('admin.article.index')->with('success', 'Artikel Berhasil di Post');
    }

    public function edit(Article $article)
    {
    	return view('admin.article.edit', ([
    		'title' => 'Edit Artikel',
            'article' => $article
    	]));
    }

    public function update(Request $request, Article $article){
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required|min:20',
            'cover' => 'required',
            'price' => 'required',
        ]);

        $cover = $article->cover;

        $article->update([
            'title' => $request->title,
            'content' => $request->content,
            'cover' => $cover,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.article.index')->with('success', 'Artikel Berhasil Diupdate');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('admin.article.index')->with('danger', 'Artikel Berhasil Dihapus');
    
    }


}
