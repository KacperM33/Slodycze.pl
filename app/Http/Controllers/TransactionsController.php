<?php

namespace App\Http\Controllers;

use App\Models\Transactions;
use App\Models\Sweets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransactionsController extends Controller
{
    public function addTrans(Request $request, $id){
        $validatedData = $request->validate([
            'weight' => 'required|numeric|min:10',
            'id_users' => 'required',
        ],[
            'id_users.required' => 'Musisz być zalogowanym aby złożyć zamówienie!',
        ]);

        $id_users = $request->input('id_users');
        $sweet = Sweets::where('id', $id)->firstOrFail();
        $id_sweets = $sweet->id;
        $weight = $request->input('weight');
        $date = date('Y-m-d');

        $sweet->quantity -= $weight/1000;
        $sweet->save();

        $transaction = new Transactions();
        $transaction->id_users = $id_users;
        $transaction->id_sweets = $id_sweets;
        $transaction->weight = $weight;
        $transaction->date = $date;

        $transaction->save();

        return redirect()->route('shop.index')->with('success', 'Dodano do koszyka.')->withErrors($validatedData);
    }
}
