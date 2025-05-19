<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon
;



class Crud extends Model
{
    use HasFactory ,SoftDeletes;

    protected $table = 'crud';
    protected $fillable = [
        'name',
        'description',
        'old',
        'status',
        'show',
        'created_at',
        'updated_at'
    ];
    public function getCreatedAtAttribute($value){
        return date('m/d h:i' ,strtotime($value));
     }
}
