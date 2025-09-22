<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Http\Requests\StorePlanRequest;
use App\Http\Requests\UpdatePlanRequest;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plan = Plan:: 
         included()
        ->filter()
          ->sort()
        ->getOrPaginate();
     
        return response()->json($plan);
        
    }

}
