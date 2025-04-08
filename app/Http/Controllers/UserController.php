<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        return response()->json([
            'user' => $user,
        ]);
    }
}
