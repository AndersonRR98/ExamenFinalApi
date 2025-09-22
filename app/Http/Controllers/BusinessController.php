<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Http\Requests\StoreBusinessRequest;
use App\Http\Requests\UpdateBusinessRequest;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $business = Business:: 
         included()
        ->filter()
        ->sort()
        ->getOrPaginate();
       
        return response()->json($business);
        
    }

   
}
