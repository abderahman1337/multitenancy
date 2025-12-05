<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class CentralUser extends Authenticatable
{
    protected $connection = 'central';
    protected $table = 'users'; // central users table
}
