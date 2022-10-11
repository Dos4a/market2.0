<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(UserStoreRequest $request)
    {
        $data = $request->validated();

        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        return response([
            'user' => 'User created',
            'user_info' => $user,
            'token' => $user->createToken('API Token')->plainTextToken
        ], 200);
    }

    public function show()
    {
        return response([
            'user_profile' => auth('sanctum')->user(),
        ], 200);
    }

    public function login(UserLoginRequest $request)
    {
        $data = $request->validated();

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return response([
                'message' => 'Email & Password does not match with our records'
            ], 401);
        }

        $user = User::where('email', $data['email'])->first();

        return response([
            'message' => 'User Logged in Successfully',
            'token' => $user->createToken('API Token')->plainTextToken
        ], 200);
    }

    public function destroy()
    {
        auth('sanctum')
        ->user()
        ->tokens()
        ->delete()
        ;

        return response([
            'message' => 'User Logouted'
        ], 200);
    }
}
