<?php


namespace App\Models;


use Illuminate\Support\Facades\DB;

class News
{
    private array $newsArray = [
        1 => [
            'id' => '1',
            'title' => 'News 1',
            'description' => 'Some quick example text to build on the card title and make up the
                                    bulk of the card content.',
            'category_id' => '1',
            'time_to_read' => '1'
        ],
        2 => [
            'id' => '2',
            'title' => 'News 2',
            'description' => 'Some quick example text to build on the card title and make up the
                                    bulk of the card content.',
            'category_id' => '2',
            'time_to_read' => '2'
        ],
        3 => [
            'id' => '3',
            'title' => 'News 3',
            'description' => 'Some quick example text to build on the card title and make up the
                                    bulk of the card content.',
            'category_id' => '3',
            'time_to_read' => '3'
        ]
    ];

    private array $category = [
        1 => 'Категория 1',
        2 => 'Категория 2',
        3 => 'Категория 3'
    ];

    public function getAll()
    {
        return $this->newsArray;
    }

    public function getById(int $id)
    {
        return $this->newsArray[$id];
    }

    public function getByCategoryId(int $categoryId)
    {
        $news = [];
        foreach ($this->newsArray as $key => $value) {
            if ($value['category_id'] == $categoryId) {
                $news[$key] = $value;
            }
        }
        return $news;
    }

    public function getCategory()
    {
        $data = DB::table('category')
            ->select('id', 'title')
            ->get()
            ->toArray();
//        dd($data);
        return $data;
    }
}
