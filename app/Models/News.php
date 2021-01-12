<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'category_id',
        'time_to_read',
        'content'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getAllNews()
    {
        $news = DB::table('news')
            ->select('id', 'title', 'description', 'time_to_read')
            ->get();

        return $news;
    }

    public function getNewsById(int $id)
    {
        $news = DB::table('news')
            ->where('id', '=', $id)
            ->get();

        return $news[0];
    }

    public function getByCategoryId(int $categoryId)
    {
        $news = DB::table('news')
            ->where('category_id', '=', $categoryId)
            ->get();

        return $news;
    }

    public function getCategory()
    {
        $data = DB::table('category')
            ->select('id', 'title')
            ->get();

        return $data;
    }
}
