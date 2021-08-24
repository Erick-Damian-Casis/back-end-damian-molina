<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Travel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'app.travels';

    protected $fillable=[
        'date',
        'cost',
    ];


    function address(){
        return $this->belongsTo(Address::class);
    }
    function car(){
        return $this->belongsTo(Car::class);
    }
    function user(){
        return $this->belongsTo(User::class);
    }
}
