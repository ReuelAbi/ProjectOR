<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Services\Business\ResourceBusinessService;

class ResourceController extends Controller
{

    public function onViewResources(Request $request)
    {
        try
        {
            // Call the Business Service to gather all the resources
            $service = new ResourceBusinessService();
            $resourceList = $service->gatherAll();
            
            // If there is no data in the database. 
            if (!$resourceList)
            {
                return view('error.commonError')->with('message', $resourceList);
            }
            
            return view('help_lists.resources')->with('resources', $resourceList);
        }
        catch (Exception $e)
        {
            throw $e->getMessage();
        }        
    }
}
