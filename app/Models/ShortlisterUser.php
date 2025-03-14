<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortlisterUser extends Model
{
    use HasFactory;

    protected $table = 'shortlister_users';
    
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'date_of_birth',
    ];
}