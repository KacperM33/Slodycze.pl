<?php

namespace App\Http\Controllers;

use App\Models\Order_Transaction;
use App\Models\Users;
use App\Models\Transactions;
use App\Models\Sweets;
use App\Models\Orders;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function cart($id){
        $sweets = DB::table('sweets')
            ->join('transactions', 'sweets.id', '=', 'transactions.id_sweets')
            ->select('sweets.name', 'sweets.price', 'transactions.weight', 'transactions.id')
            ->where('transactions.id_users', '=', $id)
            ->where('transactions.confirmed', '=', 0)
            ->get();

        return view('shop.cart',[
            'sweets'=>$sweets,
        ]);
    }

    public function cartDel(Request $request, $id){
        $req = $request->input('cartDel');

        Transactions::where('id', $req)->delete();

        return redirect()->route('shop.cart', ['id' => $id]);
    }

    public function buy($id){
        Transactions::where('id_users', $id)->where('confirmed', 0)->update(['confirmed' => 1]);

        return redirect()->route('shop.cart', ['id' => $id]);;
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

        $user = Users::where('id', $id)->firstOrFail();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->save();

        return redirect()->route('shop.index')->withErrors($validatedData)->with('success', 'Pomyślnie zmieniono dane.');
    }
}
