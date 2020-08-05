<?php


namespace App\Repositories\API;

use App\Models\User;
use App\Repositories\API\Contracts\AuthRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthRepository implements  AuthRepositoryInterface{

public function login($request)
{

    $validator =  Validator::make($request->all(), [
        'email' => 'required',
        'password' => 'required', ]);

        if($validator->fails()){
              return response()->json(['error'=>$validator->errors()],400);
        }

   $user = User::where('email', $request->email)->first();

   if (!$user || !Hash::check($request->password, $user->password)) {
       return response()->json(['message' => trans('messages.invalid_credentials')], 404);
   }

   $token = $user->createToken('auth_token')->plainTextToken;

   return response()->json(['token' => $token]);
}

public function logout($request)
{
    $client = $request->user();

    // Revoke all tokens client...
    $client->tokens()->delete();

    return response()->json([], 204);
}

}
