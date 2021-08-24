<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'app.drivers';

    protected $fillable=[
        'photo',
        'license',
    ];

    function user(){
        return $this->belongsTo(User::class);
    }
    function cars(){
        return $this->hasMany(Car::class);
    }
}
