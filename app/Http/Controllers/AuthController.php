<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Throwable;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'password' => 'required|string',
            ]);
        } catch (Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }

        $user = User::query()->first();

        if (!Hash::check($validatedData['password'], $user->password)) {
            return response()->json(['message' => 'Incorrect Password'], 400);
        }

        $token = $user->createToken(Str::random(10))->plainTextToken;

        return response()->json(['message' => $token], 200);
    }
}
