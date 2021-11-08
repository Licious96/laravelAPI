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

    public function show($id){
        return Aquarium::find($id);
    }

    public function store(Request $request){

        $request->validate([
            'glass_type' => 'required',
            'size' => 'required',
            'shape' => 'required'
        ]);

        return Aquarium::create($request->all());
    }

    public function update(Request $request, $id){
        $aquaruim = Aquarium::find($id);
        $aquaruim->update($request->all());
        return $aquaruim;
    }

    public function destroy($id) {
        return Aquarium::destroy($id);
    }
}
