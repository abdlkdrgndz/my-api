<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    private $bearerToken = 'Bearer';

    public function login(Request $request){

        $validator = Validator::make($request->all(),[
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        $user = User::where('email',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $api_token = Str::random(60);
                $newToken =  Str::random(120);
                $user->update(['api_token' => $api_token]);

                return response()->json([
                    'name' => $user->name,
                    'email' => $user->email,
                    'api_token' => $api_token,
                    'access_token' => $newToken,
                    'token_type' => $this->bearerToken
                ],200);
            } else {
                return response()->json([
                    'error' => 'Parola geçersiz.'
                ],401);
            }
        } else {
            return response()->json([
                'error' => 'Geçersiz e-posta adresi.'
            ],401);
        }
    }

    public function register(Request $request) {

        $valid = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
        ]);

        if($valid->fails()) {
            return response()->json(['status' => $valid->errors()]);
        }

        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'api_token' => Str::random(60)
        ]);

        return response()->json(
            [
                'api_token' => $user->api_token,
                'user_id' => $user->id,
                'token_type' => $this->bearerToken,
                'message' => 'Kullanıcı kaydı başarılı.'
            ]
        );
    }
}
