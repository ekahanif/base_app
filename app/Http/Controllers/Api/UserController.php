<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getCurrentUser(Request $request){
        return User::with('userProfile')->where('id', $request->user()->id)->get();
    }
}
