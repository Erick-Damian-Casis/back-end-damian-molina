<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'app.cars';

    protected $fillable=[
        'photo',
        'available',
        'description',
    ];
    function travels(){
        return $this->hasMany(Travel::class);
    }
    function driver(){
        return $this->belongsTo(Driver::class);
    }
}
