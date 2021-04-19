<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function getCountryStates($id){
        $data = State::where("country_id", $id)->orderby("name")->get();
        return response()->json($data);
    }
}
