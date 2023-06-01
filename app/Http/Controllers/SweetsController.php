<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sweets;

class SweetsController extends Controller
{
    public function index(){
        return view('shop.index');
    }

    public function shop($category)
    {
        return view('shop.shop', [
            't' => Sweets::where('category', $category)->firstOrFail()
        ]);
    }

    public function news(){
        return view('shop.news');
    }
}
