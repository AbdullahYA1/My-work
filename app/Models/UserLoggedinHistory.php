<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class UserLoggedinHistory extends Model
{
    use HasFactory;

    protected  $fillable = [
        'id',
        'name',
        'ip',
        'email',
        'user_agent',
    ];
}
