<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Services\API\AuthService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
        private $authService;

        public function __construct(AuthService $authService)
        {
                $this->authService=$authService;
        }

        public function login(Request $request)
        {
                return $this->authService->login($request);
        }

        public function logout(Request $request)
        {
            return $this->authService->logout($request);

        }
}
