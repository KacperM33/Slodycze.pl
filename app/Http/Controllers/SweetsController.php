<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sweets;

class SweetsController extends Controller
{
    public function index(){
        $cukierek = Sweets::where('category', 'cukierki')->inRandomOrder()->first();
        $czekolada = Sweets::where('category', 'czekolada')->inRandomOrder()->first();
        $zelek = Sweets::where('category', 'żelki')->inRandomOrder()->first();

        $pol_cukierek = Sweets::where('id', '36')->firstOrFail();
        $pol_czekolada = Sweets::where('id', '48')->firstOrFail();
        $pol_zelek = Sweets::where('id', '34')->firstOrFail();

        return view('shop.index', [
            'cukierek' => $cukierek,
            'czekolada' => $czekolada,
            'zelek' => $zelek,
            'pol_cukierek' => $pol_cukierek,
            'pol_czekolada' => $pol_czekolada,
            'pol_zelek' => $pol_zelek

        ]);
    }

    public function shop($category){
        $sweets = Sweets::where('category', $category)->get();
        $id = $sweets->pluck('id')->toArray();

        return view('shop.shop', [
            'sweets' => $sweets,
            'sw_category' => $category,
            'id' => $id
        ]);
    }

    public function item($id){
        $candy = Sweets::where('id', $id)->firstOrFail();
        $category = $candy->category;
        return view('shop.item', [
            'id' => $candy,
            'sw_category' => $category
        ]);
    }
}
