<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'photo',
        'phoneNumber',
        'pets',
        'adress',
        'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
