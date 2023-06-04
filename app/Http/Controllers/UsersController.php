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
}
