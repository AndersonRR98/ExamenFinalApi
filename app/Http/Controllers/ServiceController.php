<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
   public function index()
    {
        $service = Service:: 
         included()
        ->filter()
          ->sort()
        ->getOrPaginate();
     
        return response()->json($service);
        
    }

    
}
