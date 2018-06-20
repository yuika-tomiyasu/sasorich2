<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Event;
use DB;
use App\Food;

class FoodController extends Controller
{
    public function index()
    {
        $foods = new Food;
        $foodeat=[];
        $user_id=\Auth::user()->id;
        $food=[];
        $results=DB::select("select foods from foods where user_id = $user_id");
        for ($i=0; $i<count($results);$i++) {
            array_push($foodeat, $results[$i]->foods);
        }
        
        return view('food', [
            'foodeat' => $foodeat,
            'foods' => $foods,
            
        ]);
    }
    
    public function store(Request $request)
    {
        $foods = new Food;
        $user_id = \Auth::user()->id;
        $foods->foods = $request->foods;
        $foods->user_id = $user_id;
        $foods->save();
        
        $foodeat=[];
        $user_id=\Auth::user()->id;
        $food=[];
        $results=DB::select("select foods from foods where user_id = $user_id");
        for ($i=0; $i<count($results);$i++) {
            array_push($foodeat, $results[$i]->foods);
        }
        
        return view('food', [
            'foodeat' => $foodeat,
            'foods' => $foods,
            
        ]);
    }

}
