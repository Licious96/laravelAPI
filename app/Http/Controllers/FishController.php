<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fish;

class FishController extends Controller
{
    //
    public function index(){
        return response()->json(Fish::all(), 200);
    }

    public function store(Request $request){

        $request->validate([
            'aquarium_id' => 'required',
            'species' => 'required',
            'color' => 'required',
            'fins' => 'required'
        ]);

        return response()->json(Fish::create($request->all()));
    }
}
