<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sweets;
use Illuminate\Support\Facades\DB;

class SweetsController extends Controller
{
    public function index(){
        $cukierek = Sweets::where('category', 'cukierki')->inRandomOrder()->first();
        $czekolada = Sweets::where('category', 'czekolada')->inRandomOrder()->first();
        $zelek = Sweets::where('category', 'żelki')->inRandomOrder()->first();

        try {
            $pol_cukierek = Sweets::where('id', '36')->firstOrFail();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            $pol_cukierek = $cukierek;
        }

        try {
            $pol_czekolada = Sweets::where('id', '48')->firstOrFail();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            $pol_czekolada = $czekolada;
        }

        try {
            $pol_zelek = Sweets::where('id', '34')->firstOrFail();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            $pol_zelek = $zelek;
        }


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

    public function order($category){
        $sweets = Sweets::where('category', $category)->orderBy('price')->get();
        $id = $sweets->pluck('id')->toArray();

        return view('shop.shop', [
            'sweets' => $sweets,
            'sw_category' => $category,
            'id' => $id
        ]);
    }

    public function orderD($category){
        $sweets = Sweets::where('category', $category)->orderByDesc('price')->get();
        $id = $sweets->pluck('id')->toArray();

        return view('shop.shop', [
            'sweets' => $sweets,
            'sw_category' => $category,
            'id' => $id
        ]);
    }

    public function search(Request $request){
        $req = $request->input('search');
        $item = Sweets::where('name', 'like', '%' . $req . '%')->get();

        return view('shop.search', [
            'item' => $item,
            'request' => $req,
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
            'name.required' => 'Nazwa słodycza wymagana!',
            'category.required' => 'Kategoria słodycza wymagana!',
            'type.required' => 'Typ słodycza wymagany!',
            'price.required' => 'Cena słodycza wymagana!',
            'quantity.required' => 'Ilość słodycza wymagana!',
            'describe.required' => 'Opis słodycza wymagany!',
        ]);

        $item = new Sweets();
        $item->name = $request->input('name');
        $item->category = $request->input('category');
        $item->type = $request->input('type');
        $item->price = $request->input('price');
        $item->quantity = $request->input('quantity');
        $item->describe = $request->input('describe');

        $item->save();

        $name = $request->input('name');

        $image = $request->file('photo');

        $imageName = $name.'.jpg';

        $image->move(public_path('img/sweets'), $imageName);

        return redirect()->route('shop.index')->withErrors($validatedData)->with('success', 'Element został pomyślnie dodany.');
    }

    public function delete($id)
    {
        $item = Sweets::where('id', $id)->firstOrFail();

        $item->delete();

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
