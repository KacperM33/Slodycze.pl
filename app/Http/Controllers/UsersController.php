<?php

namespace App\Http\Controllers;

use App\Models\Order_Transaction;
use App\Models\Users;
use App\Models\Transactions;
use App\Models\Sweets;
use App\Models\Orders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    public function add(){
        return view('shop.addUser');
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|alpha',
            'surname' => 'required|string|alpha',
            'email' => 'required',
            'password' => 'required|min:8',
            'phone' => 'required|numeric|digits:9',
            'address' => 'required|string',
        ],[
            'name.alpha' => 'Imie musi się składać tylko z liter.',
            'surname.alpha' => 'Nazwisko musi się składać tylko z liter.',
            'password' => 'Hasło musi zawierać conajmniej 8 liter.'
        ]);

        $user = new Users();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        $user->save();

        return redirect()->route('shop.index')->withErrors($validatedData)->with('success', 'Pomyślnie dodano użytkownika.');
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'name' => 'required|string|alpha',
            'surname' =>'required|string|alpha',
            'address' =>'required',
            'phone' => 'required|numeric|digits:9',
            'password' => 'required|min:8'
        ],[
            'name.alpha' => 'Imie musi się składać tylko z liter.',
            'surname.alpha' => 'Nazwisko musi się składać tylko z liter.',
            'password' => 'Hasło musi zawierać conajmniej 8 liter.'
        ]);

        $user = Users::where('id', $id)->firstOrFail();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('shop.index')->withErrors($validatedData)->with('success', 'Pomyślnie zmieniono dane.');
    }

    public function users(){
        $user = Users::get();

        return view('shop.users', [
            'user' => $user,
        ]);
    }

    public function delete(Request $request)
    {
        $user = Users::where('id', $request->input('userDel'))->firstOrFail();

        $user->delete();

        return redirect()->route('shop.index');
    }

    public function edit($id){
        $user = Users::where('id', $id)->firstOrFail();

        return view('shop.editUser', [
            'user'=>$user,
        ]);
    }
}
