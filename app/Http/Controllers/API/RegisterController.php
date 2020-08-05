<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Services\API\RegisterService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{   private $registerService;
    public function __construct(RegisterService $registerService)
    {
            $this->registerService=$registerService;
    }

    public function register(Request $request){

      return   $this->registerService->register($request);

    }


}
