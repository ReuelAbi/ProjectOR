<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\SurveyBusinessService;

class SurveyController extends Controller
{
    public function onPullSurvey(Request $request)
    {
        // Call the Business Service and assign the returned ArrayList to a method variable
        $service = new SurveyBusinessService();
        $questions = $service->gather();
        
        // Return the ArrayList variable to the View
        return view('processPlan.survey')->with('surveys', $questions);
    }
    
}
