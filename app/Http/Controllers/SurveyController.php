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
    
    public function onViewPhases(Request $request)
    {
        // Receive the post data into method member variables
        
        // Call the Survey Business Service
        
        
        // Return the array of phases to a View
    }
    
    public function onViewResources(Request $request)
    {
        // Call the Business Service
        $service = new SurveyBusinessService();
        $resourceList = $service->gatherResources();
        
        // Return the view with the resource list data passed to it
        return view('processPlan.resources')->with('resources', $resourceList);
    }
}
