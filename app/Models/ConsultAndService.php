<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultAndService extends Model
{
    protected $fillable = [
        'type',
        'price',
        'date',
        'description',
        'servicetype',
        'pets'
    ];
}
