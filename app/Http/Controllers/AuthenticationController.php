<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AuthenticationRequest;


class AuthenticationController extends Controller
{
    //
    public function authenticate(AuthenticationRequest $request){
        $user = User::where('email',$request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return $this->senderror('Check Email or Pasword',null,401);
        }

        $token=$user->createToken($user->id)->plainTextToken;

        return $this->sendResponse('Successfully authenticate',['token' => $token],200);
    }
}
