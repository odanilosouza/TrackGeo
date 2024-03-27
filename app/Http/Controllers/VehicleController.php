<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicle = Vehicle::all();
        return view('vehicle', ['vehicles'=> $vehicle]);
    }

    public function store(Request $request)
    {
        Vehicle::create($request->all());
        return redirect()->route('vehicle');
    }

    // Falta criar outras funções como show, update, delete, etc.
}
