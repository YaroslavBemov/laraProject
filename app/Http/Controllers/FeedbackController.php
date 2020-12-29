<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function getFeedback(Request $request)
    {
        return view('static.about');
    }
}
