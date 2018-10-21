<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    public function index(Request $request){

        $items = Item::all();

        //for getting the current user ID
        $id = Auth::user()->id;

        return view('item', compact('items'));
    }
}
