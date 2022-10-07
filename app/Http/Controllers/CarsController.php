<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarsController extends Controller
{
    public function index(){
        $cars=Car::get();
        return view('cars.index', compact('cars'));
    }
}