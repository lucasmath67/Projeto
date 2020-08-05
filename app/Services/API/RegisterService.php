<?php

namespace  App\Services\API;

use App\Repositories\API\Contracts\RegisterRepositoryInterface;

class RegisterService{
    private $registerRepository;

public function __construct(RegisterRepositoryInterface $registerRepository)
{
    $this->registerRepository=$registerRepository;

}


public function register($request){
 return $this->registerRepository->register($request);

}
}
