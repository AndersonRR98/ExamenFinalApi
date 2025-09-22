<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Http\Requests\StoreAgendaRequest;
use App\Http\Requests\UpdateAgendaRequest;
use Illuminate\Http\Request;


class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::
        included()
        ->filter()
        ->sort()
        ->getOrPaginate();
       
        return response()->json($agenda);
        
    }

  
}
