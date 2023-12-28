<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{

    public function register(Request $request): JsonResponse
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
 
        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);
 
        $token = $user->createToken('Auth')->accessToken;
 
        return response()->json(['token' => $token], 200);
    }
 
    public function login(Request $request)
    {

        $credentials=$request->only('email','password');

        if(Auth::attempt($credentials)){
            $user = User::where('email',$request['email'])->first();
            $token = $user->createToken('LaravelAuthApp')->accessToken;
 
            return response()->json(['token' => $token], 200);
        }
        return response()->json(['error'=>"Unauthorized"],401);


        
    }   
 
}
