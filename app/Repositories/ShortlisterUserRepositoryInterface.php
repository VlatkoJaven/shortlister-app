<?php

namespace App\Repositories;

interface ShortlisterUserRepositoryInterface
{
    public function all();
    public function create(array $data);
    public function paginate($perPage);
}