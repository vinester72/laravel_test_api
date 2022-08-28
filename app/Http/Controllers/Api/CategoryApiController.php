<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api\Category;
use App\Models\Api\Article;
use App\Http\Resources\Category\CategoryResource;
use App\Http\Resources\Article\ArticleResource;

class CategoryApiController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return CategoryResource::collection($categories);
    }

    public function articles($id)
    {
        $articles = Article::where('category_id', $id)->orderBy('id', 'desc')->paginate();

        return ArticleResource::collection($articles);
    }
}
