<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    private array $newsArray = [];

    public function showAllNews() {
        return view('news', $this->newsArray);
    }
}


//return view('user.profile', [
//    'user' => User::findOrFail($id)
//]);
