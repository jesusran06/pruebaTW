<?php

namespace app\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $accessToken = Auth::user()->createToken('authToken')->accessToken;
            return response()->json(['user' => Auth::user(), 'access_token' => $accessToken]);
        } else {
            return response()->json(['error' => 'Unauthorized', 'code'=> 401], 401);
        }
    }
    public function ver(Request $request)
    {
        return response()->json(['message' => 'holaa'], 200);
    }
}
