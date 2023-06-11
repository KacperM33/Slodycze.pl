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

    public function create(){
        return view('shop.create');
    }

    public function add(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'type' => 'required',
            'price' => 'required|numeric|min:0.10',
            'quantity' => 'required|numeric|min:10',
            'describe' => 'required',
        ],[
            'name.required' => 'Nazwa słodycza wymagana!'
        ]);

        $name = $request->input('name');
        $category = $request->input('category');
        $type = $request->input('type');
        $price = $request->input('price');
        $quantity = $request->input('quantity');
        $describe = $request->input('describe');

        $item = new Sweets();
        $item->name = $name;
        $item->category = $category;
        $item->type = $type;
        $item->price = $price;
        $item->quantity = $quantity;
        $item->describe = $describe;

        $item->save();

        $image = $request->file('photo');

        $imageName = $name.'.jpg';

        $image->move(public_path('img/sweets'), $imageName);

        return redirect()->route('shop.index')->withErrors($validatedData)->with('success', 'Element został pomyślnie dodany.');
    }

    public function delete($id)
    {
        $item = Sweets::where('id', $id)->firstOrFail();

        $item->quantity = 0.00;

        $item->save();

        return redirect()->route('shop.index');
    }

    public function fill(Request $request, $id)
    {
        $validatedData = $request->validate([
            'quantity' => 'required|numeric|min:10',
        ]);

        $quantity = $request->input('quantity');

        $item = Sweets::where('id', $id)->firstOrFail();

        $item->quantity += $quantity/1000;

        $item->save();

        return redirect()->route('shop.index');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'price' => 'required|numeric|min:0.10',
        ]);

        $price = $request->input('price');

        $item = Sweets::where('id', $id)->firstOrFail();

        $item->price = $price;

        $item->save();

        return redirect()->route('shop.index');
    }
}
