<?php

namespace App\Services;

use App\Repositories\ShortlisterUserRepositoryInterface;

class ShortlisterUserService
{
    protected $repository;

    public function __construct(ShortlisterUserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllUsersPaginated($perPage)
    {
        return $this->repository->paginate($perPage); 
    }
    
    public function createUser(array $data)
    {
        return $this->repository->create($data);
    }

    public function getAllUsers()
    {
        return $this->repository->all();
    }
}