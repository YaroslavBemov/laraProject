<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
    public function showAllNews()
    {
        $news = News::all();
        $category = Category::all();

        return view('news.newsAll', [
            'data' => $news,
            'category' => $category
        ]);
    }

    public function showOneNews($id)
    {
        return view('news.newsOne', ['data' => News::find($id)]);
    }

    public function showByCategory($categoryId)
    {
        $news = Category::find($categoryId)->news;
        $category = Category::all();

        return view('news.newsAll', [
            'data' => $news,
            'category' => $category,
            'id' => $categoryId
        ]);
    }
}
