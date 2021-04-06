<?php

namespace App\Http\Controllers;

use App\Services\Business\SurveyBusinessService;
use Illuminate\Http\Request;
use Exception;
use App\Models\Response;

class SurveyController extends Controller
{
    /**
     * 
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function onPullSurvey(Request $request)
    {
        try
        {
            // Call the Business Service and assign the returned ArrayList to a method variable
            $service = new SurveyBusinessService();
            $questions = $service->gather();
            
            // Return the ArrayList variable to the View
            return view('processPlan.survey')->with('surveys', $questions);
        }
        catch(Exception $e) 
        {
            throw $e->getMessage();
        }
    }
    
    /**
     * 
     * @param Request $request
     */
    public function onViewPhases(Request $request)
    {
        try
        {            
            // Assign values in respective Responses
            for($i=0; $i < 6; $i++)
            {
                // Receive the post data into method member variables
                $firstOpt = $request->input('ques'.$i.'One');
                $secondOpt = $request->input('ques'.$i.'Two');
                $thirdOpt = $request->input('ques'.$i.'Three');
                $fourthOpt = $request->input('ques'.$i.'Four');
                
                $response[$i] = new Response($firstOpt, $secondOpt, $thirdOpt, $fourthOpt);
            }
            
            // Call the Survey Business Service
            $service = new SurveyBusinessService();
            
            
            // Return the array of phases to a View
        }
        catch(Exception $e)
        {
            
        }
    }
    
    /**
     * 
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function onViewResources(Request $request)
    {
        // Call the Business Service
        $service = new SurveyBusinessService();
        $resourceList = $service->gatherResources();
        
        // Return the view with the resource list data passed to it
        return view('processPlan.resources')->with('resources', $resourceList);
    }
}
