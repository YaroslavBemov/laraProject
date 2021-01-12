<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
    public function showAllNews()
    {
        $news = News::all();

        return view('news.newsAll', [
            'data' => $news,
        ]);
    }

    public function showOneNews($id)
    {
        $news = News::find($id);

        return view('news.newsOne', [
            'data' => $news,
            ]);
    }

    public function showByCategory($categoryId)
    {
        $news = Category::find($categoryId)->news;

        return view('news.newsAll', [
            'data' => $news,
            'id' => $categoryId
        ]);
    }
}
