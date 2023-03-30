<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\View;
use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    

    public function home(){

        $studios = Unit::where('bedrooms', 0)->get();
        $one_bedrooms = Unit::where('bedrooms', 1)->get();
        $two_bedrooms = Unit::where('bedrooms', 2)->limit(6)->get();
        $three_bedrooms = Unit::where('bedrooms', 3)->get();

        return view('home', compact('studios', 'one_bedrooms', 'two_bedrooms', 'three_bedrooms'));
    }

    public function inventory(){
        $units = Unit::all();
        $views = View::all();

        return view('inventory', compact('units', 'views') );
    }

    public function unit($id){
        $unit = Unit::find($id);

        return view('unit', compact('unit'));
    }
}
