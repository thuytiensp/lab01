<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index(){
    	$foods = \App\Food::all();
     	return view('food.index', ['foods' => $foods]);
    }
}
