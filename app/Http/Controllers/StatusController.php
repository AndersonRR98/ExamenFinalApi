<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Http\Requests\StoreStatusRequest;
use App\Http\Requests\UpdateStatusRequest;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    
    public function index()
    {
        $status = Status:: 
         included()
        ->filter()
          ->sort()
        ->getOrPaginate();
        
        return response()->json($status);
        
    }

    
}
