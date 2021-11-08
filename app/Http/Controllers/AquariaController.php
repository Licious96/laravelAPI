<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aquarium;

class AquariaController extends Controller
{
    //
    public function index(){
        return response()->json(Aquarium::all(), 200);
    }
}
