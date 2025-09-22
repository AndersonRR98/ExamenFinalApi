<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointment = Appointment:: 
         included()
        ->filter()
         ->sort()
        ->getOrPaginate();
       
        return response()->json($appointment);
        
    }

}
