<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Api\Article;
use App\Http\Resources\Article\ArticleResource;


class ArticleApiController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        // dd($articles);
        return ArticleResource::collection($articles);
    }

    public function show(Article  $article)
    {
        return new ArticleResource($article);
    }
}
