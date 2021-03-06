<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class RegisterController extends Controller
{
    public function register(StoreUserRequest $request){

      $user = new User;
      $user->name = $request->name; 
      $user->email = $request->email; 
      $user->number = $request->number;
      $user->licence = $request->licence;
      $user->password = bcrypt($request->password);

      $user->save();
    }
}
