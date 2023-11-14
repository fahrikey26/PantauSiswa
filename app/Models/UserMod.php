<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMod extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = ['IdUser', 'Username', 'Password', 'Level'];
}
