<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function index()
    {
        $news = new News();
        $data = $news->getAllNews();
        $category = $news->getCategory();
        return view('news.newsAll', [
            'data' => $data,
            'category' => $category,
            'id' => '',
            'isAdmin' => true
        ]);
    }

    public function createNews() {
        $news = new News();
        $category = $news->getCategory();
        return view('news.createNews', [
            'news' => $news,
            'category' => $category,
            'isAdmin' => true,
        ]);
    }

    public function storeNews(Request $request) {
        $id = $request->post('id');

        $news = $id ? News::find($id) : new News();
        $news->fill($request->all())->save();

        return redirect()->route('admin::news::update', [
            'id' => $news->id
        ]);
    }

    public function updateNews($id) {
        $news = News::find($id);
        $category = Category::all();
        return view('news.createNews', [
            'news' => $news,
            'category' => $category,
            'isAdmin' => true,
        ]);
    }

    public function deleteNews($id) {
        News::destroy([$id]);
        return redirect()->route("admin::news::index");
    }
}
