<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Http\Request;

class RoleController extends Controller
{
   public function index()
    {
        $role = Role:: 
         included()
        ->filter()
          ->sort()
        ->getOrPaginate();
    
        return response()->json($role);
        
    }

   
}
