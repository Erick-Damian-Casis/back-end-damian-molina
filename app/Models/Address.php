<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'app.addresses';

    protected $fillable=[
        'start_long_travel',
        'start_lat_travel',
        'end_long_travel',
        'end_lat_travel',
    ];

    function travels(){
        return $this->hasMany(Travel::class);
    }
}
