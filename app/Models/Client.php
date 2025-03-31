<?php

namespace App\Models;
use App\Models\Address;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'photo',
        'phoneNumber',
        'pets',
        'address',
        'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function address(){
        return $this->hasMany(Address::class, 'client_id');
    }

    public function pet(){
        return $this->hasMany(Pet::class, 'client_id');
    }
}
