<?php


namespace App\Services\API;

use App\Repositories\API\Contracts\AuthRepositoryInterface;

class AuthService{

    private $authRepository;

public function __construct(AuthRepositoryInterface $authRepository)
{
        $this->authRepository=$authRepository;
}


        public function login($request){

          return  $this->authRepository->login($request);
        }
        public function logout($request){

          return  $this->authRepository->logout($request);
        }
}
