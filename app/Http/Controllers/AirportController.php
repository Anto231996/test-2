<?php

namespace App\Http\Controllers;
use App\Airport;
use App\Flight;

use Illuminate\Http\Request;

class AirportController extends Controller
{
    public function homepage()
    {
        return View('welcome')
        ->with('airports', Airport::all())
        ->with('flights', Flight::orderBy('price', 'ASC')->get());
    }
}
