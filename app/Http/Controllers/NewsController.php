<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    private array $newsArray = [
        1 => [
            'id' => '1',
            'title' => 'News 1',
            'description' => 'Some quick example text to build on the card title and make up the
                                    bulk of the card content.'
        ],
        2 => [
            'id' => '2',
            'title' => 'News 2',
            'description' => 'Some quick example text to build on the card title and make up the
                                    bulk of the card content.'
        ],
        3 => [
            'id' => '3',
            'title' => 'News 3',
            'description' => 'Some quick example text to build on the card title and make up the
                                    bulk of the card content.'
        ]
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
