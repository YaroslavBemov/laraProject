<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    private array $newsArray = [
        1 => [
            'id' => '1',
            'title' => 'news 1'
        ],
        2 => [
            'id' => '2',
            'title' => 'news 2'
        ],
    ];

    public function showAllNews()
    {
        $data = $this->newsArray;
        return view('pages.newsAll', compact('data'));
    }

    public function showOneNews($id)
    {
        $data = $this->newsArray[$id];
        return view('pages.newsOne', $data);
    }
}
