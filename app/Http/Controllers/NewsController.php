<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function showAllNews()
    {
        $data = (new News())->getAll();
        $category = (new News())->getCategory();
        return view('news.newsAll', [
            'data' => $data,
            'category' => $category,
            'id' => ''
        ]);
    }

    public function showOneNews($id)
    {
        $data = (new News())->getById($id);
        return view('news.newsOne', ['data' => $data]);
    }

    public function showByCategory($categoryId)
    {
        $data = (new News())->getByCategoryId($categoryId);
        $category = (new News())->getCategory();
        return view('news.newsAll', [
            'data' => $data,
            'category' => $category,
            'id' => $categoryId
        ]);
    }
}
