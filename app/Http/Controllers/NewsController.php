<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function showAllNews()
    {
        $news = new News();
        $data = $news->getAllNews();
        $category = $news->getCategory();

        return view('news.newsAll', [
            'data' => $data,
            'category' => $category,
            'id' => ''
        ]);
    }

    public function showOneNews($id)
    {
        $news = new News();
        $data = $news->getNewsById($id);
        return view('news.newsOne', ['data' => $data]);
    }

    public function showByCategory($categoryId)
    {
        $news = new News();
        $data = $news->getByCategoryId($categoryId);
        $category = $news->getCategory();
        return view('news.newsAll', [
            'data' => $data,
            'category' => $category,
            'id' => $categoryId
        ]);
    }
}
