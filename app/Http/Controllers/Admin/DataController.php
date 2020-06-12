<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function articles()
    {
    	$articles = Article::orderBy('title', 'ASC');

		return datatables()->of($articles)
	        ->addColumn('action', 'admin.article.action')
			->addIndexColumn()
	        ->rawColumns(['action'])
			->toJson();
    }

}
