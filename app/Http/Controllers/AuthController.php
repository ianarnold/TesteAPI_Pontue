<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUserRequest;

class AuthController extends Controller
{

    public function register(CreateUserRequest $request) 
    {
        $fields = $request->all();

        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201); 
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Saiu com sucesso'
        ];
    }

    public function login(Request $request) 
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        //Email
        $user = User::where('email', $fields['email'])->first();
        //Senha
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => "Credenciais incorretas"
            ], 401);
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201); 
    }

}
