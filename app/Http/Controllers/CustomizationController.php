<?php

namespace App\Http\Controllers;

use App\Models\Customization;
use App\Http\Requests\StoreCustomizationRequest;
use App\Http\Requests\UpdateCustomizationRequest;
use Illuminate\Http\Request;

class CustomizationController extends Controller
{public function index()
    {
        $customization = Customization:: 
         included()
        ->filter()
          ->sort()
        ->getOrPaginate();
      
        return response()->json($customization);
        
    }

   
}
