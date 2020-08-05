<?php

namespace App\Repositories\API\Contracts;


interface AuthRepositoryInterface {
public function login($request);
public function logout($request);

}
