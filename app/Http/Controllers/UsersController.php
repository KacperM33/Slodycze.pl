<?php

namespace App\Http\Controllers;
use App\Models\Users;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function cart($id){
        $user = Users::where('id', $id)->firstOrFail();

        return view('shop.cart',[
            'user'=>$user
        ]);
    }

    public function profil($id){
        $user = Users::where('id', $id)->firstOrFail();

        return view('shop.profil',[
            'user'=>$user
        ]);
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required|string|alpha',
            'surname' =>'required|string|alpha',
            'address' =>'required',
            'phone' => 'required|numeric|digits:9',
        ],[
            'name.alpha' => 'Imie musi się składać tylko z liter.',
            'surname.alpha' => 'Nazwisko musi się składać tylko z liter.',
        ]);

        $name = $request->input('name');
        $surname = $request->input('surname');
        $address = $request->input('address');
        $phone = $request->input('phone');

        $user = Users::where('id', $id)->firstOrFail();
        $user->name = $name;
        $user->surname = $surname;
        $user->address = $address;
        $user->phone = $phone;
        $user->save();

        return redirect()->route('shop.index')->withErrors($validatedData)->with('success', 'Pomyślnie zmieniono dane.');
    }
}
