<?php

namespace App\Repositories;

use App\Models\ShortlisterUser;

class ShortlisterUserRepository implements ShortlisterUserRepositoryInterface
{
    public function all()
    {
        return ShortlisterUser::all();
    }

    public function create(array $data)
    {
        return ShortlisterUser::create($data);
    }
    public function paginate($perPage)
    {
        return ShortlisterUser::orderBy('created_at', 'desc')->paginate($perPage); 
    }
}