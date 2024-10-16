<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 
        'password', 
        'ip',
        'type', 
        'created_at', 
        'updated_at' 
    ];
}
