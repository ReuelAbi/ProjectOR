<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Services\Business\ResourceBusinessService;
use App\Models\Organization;

class ResourceController extends Controller
{

    /**
     * 
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
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
    
    /**
     * 
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function onViewChurches(Request $request)
    {
        try
        {
            // Call the Business Service to gather all Churches
            $service = new ResourceBusinessService();
            $churchList = $service->gatherAllChurches();
            
            // If there is no data in the database
            if (!$churchList)
            {
                return view('error.commonError')->with('message', $churchList);
            }
            else
                return view('help_lists.churches')->with('churches', $churchList);
            
        }
        catch(Exception $e)
        {
            throw $e->getMessage();
        }
    }
    
    public function onViewProfile(Request $request)
    {
        try
        {
            // Store data posted from the Resource-List view
            $id = $request->input('orgId');
            $name = $request->input('orgName');
            $desc = $request->input('orgDesc');
            $type = $request->input('orgType');
            
            // Store values in an Object
            $org = new Organization($id, $name, $desc, $type);
            
            return view('help_lists.orgProfile')->with('org', $org);
        }
        catch (Exception $e)
        {
            throw $e->getMessage();
        }
    }
}
