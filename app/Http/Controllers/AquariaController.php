<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aquarium;
use App\Models\Fish;

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

    public function add_fish(Request $request, $id){

        $request->validate([
            'species' => 'required|string',
            'color' => 'required|string',
            'fins' => 'required|integer'
        ]);

        $aqua = Aquarium::find($id);
        if(!$aqua){
            return response()->json('This aquarium does not exist', 404);
        }else{

            $fishes = $aqua->fishes;

            if(strtolower($request->species) == 'guppy'){
                foreach ($fishes as $key => $fish) {
                    if (strtolower($fish->species) == 'goldfish') {
                        return response()->json('You cannot add Guppy and Goldfish in the same aquarium', 401);
                    }
                }
            }elseif (strtolower($request->species) == 'goldfish') {
                foreach ($fishes as $key => $fish) {
                    if (strtolower($fish->species) == 'guppy') {
                        return response()->json('You cannot add Guppy and Goldfish in the same aquarium', 400);
                    }
                }
            }

            if($aqua->size <= 75){
                if ($request->fins >= 3) {
                    return response()->json(['Size'=>'Fish with three fins or more don\'t go in aquariums of 75 litres or less.'], 400);
                }
            }

            return response()->json($aqua->fishes()->create($request->all()));
        }

    }

    public function all_fish(Request $request, $id){

        $aqua = Aquarium::find($id);
        if(!$aqua){
            return response()->json('This aquarium does not exist', 404);
        }else{
            $fish = $aqua->fishes;
            if (!$fish) {
                return response()->json(200);
            }
            return response()->json($fish);
        }

    }

    public function update_fish(Request $request, $id){

        $request->validate([
            'species' => 'required|string|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'color' => 'required|string|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'fins' => 'required|integer'
        ]);

        $fish = Fish::find($id);
        return response()->json($fish->update($request->all()));
    }

}
