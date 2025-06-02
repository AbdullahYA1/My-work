<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;



class Crud extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'crud';
    protected $fillable = [
        'name',
        'description',
        'old',
        'status',
        'show',
        'created_at',
        'updated_at',
        'photo',
    ];
    public function getCreatedAtAttribute($value)
    {
        return date('m/d h:i', strtotime($value));
    }

    public static function boot()
    {
        parent::boot();
        //create s
        static::creating(function ($model) {});
        static::created(function ($model) {});
        //Update 
        static::updating(function ($model) {});
        static::updated(function ($model) {});
        //save 
        static::saving(function ($model) {});
        static::saved(function ($model) {});
        //delete 
        static::deleting(function ($model) {});
        static::deleted(function ($model) {});
        //restore 
        static::restoring(function ($model) {});
        static::restored(function ($model) {});
        static::retrieved(function ($model) {});
        static::replicating(function ($model) {
            $model->notifyed_at = now();
        });
    }
}
