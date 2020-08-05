<?php


namespace App\Repositories\Api;

use App\Models\Client;
use App\Repositories\API\Contracts\RegisterRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class  RegisterRepository implements RegisterRepositoryInterface{

    public function register($request)
    {
         
        $validator =  Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8',],
            'telephone' => ['required', 'numeric','digits:11','unique:clients,telephone'],
            'address' => ['required', 'string','min:3', 'max:255'],]);

            if($validator->fails()){
                  return response()->json(['error'=>$validator->errors()],400);
            }

            $client=Client::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'telephone'=>$request->telephone,
                'address'=>$request->address,
                ]);


              $user = $client->user()->create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'client_id'=>$client->id,
            ]);

              $token = $user->createToken('auth_token')->plainTextToken;

                return response()->json(['Client'=>$client,'token'=>$token]);

    }



}
