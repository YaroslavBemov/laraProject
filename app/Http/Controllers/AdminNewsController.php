<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminStoreNewsRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('updated_at', 'desc')->paginate(9);

        return view('news.newsAll', [
            'data' => $news,
            'isAdmin' => true
        ]);
    }

    public function createNews() {
        $news = new News();

        return view('news.createNews', [
            'news' => $news,
            'isAdmin' => true
        ]);
    }

    public function storeNews(AdminStoreNewsRequest $request) {
        $id = $request->post('id');

        $news = $id ? News::find($id) : new News();
        $news->fill($request->all())->save();

        return redirect()->route('admin::news::update', [
            'id' => $news->id,
            'isAdmin' => true
        ])->withInput();
    }

    public function updateNews($id) {
        $news = News::find($id);

        return view('news.createNews', [
            'news' => $news,
            'isAdmin' => true,
        ]);
    }

    public function deleteNews($id) {
        News::destroy([$id]);

        return redirect()->route("admin::news::index", [
            'isAdmin' => true
        ]);
    }
}
