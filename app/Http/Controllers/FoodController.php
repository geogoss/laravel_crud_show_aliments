<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{

    public function index () {
        $foods = Food::all();
        return view('welcome', compact('foods'));
    }

    public function create () {
        return view('pages.putFood');
    }

    public function store (Request $request) {
        $store = new Food();
        $store->name = $request->name;
        $store->amount = $request->amount;
        $store->url = $request->url;
        $store->save();
        return redirect()->back();
    }

    public function destroy ($id) {
        $delete = Food::find($id);
        $delete->delete();
        return redirect('/');
    }

    public function show ($id) {
        $show = Food::find($id);
        // dd($show);
        return view('pages.show', compact('show'));
    }


}
