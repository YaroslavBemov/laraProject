<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function getFeedback(FeedbackRequest $request)
    {
        $feedback = new Feedback();
        $feedback->fill($request->all())->save();
        return redirect()->route('about')->with('success', 'Feedback done!')->withInput();
    }


}
