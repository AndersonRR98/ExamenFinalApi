<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category:: 
         included()
        ->filter()
          ->sort()
        ->getOrPaginate();
     
        return response()->json($category);
        
    }

    
}
