<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
    public function showAllNews()
    {
        $news = News::orderBy('updated_at', 'desc')->paginate(9);

        return view('news.newsAll', [
            'data' => $news,
        ]);
    }

    public function showOneNews($id)
    {
        $news = News::find($id);
        $categoryId = $news->category_id;

        return view('news.newsOne', [
            'data' => $news,
            'id' => $categoryId
        ]);
    }

    public function showByCategory($categoryId)
    {
//        $news = Category::find($categoryId)->news;
        $news = News::where('category_id', '=', $categoryId)
            ->orderBy('updated_at', 'desc')
            ->paginate(9);

        return view('news.newsAll', [
            'data' => $news,
            'id' => $categoryId
        ]);
    }
}
