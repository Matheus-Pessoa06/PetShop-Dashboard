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
        'adress'
    ];

    public function users(){
        $this->belongsTo(User::class, 'client_id');
    }
}
