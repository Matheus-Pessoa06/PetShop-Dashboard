<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'client_id',
        'type',
        'name',
        'photo',
        'description',
       // 'servicestype'
    ];

    public function client(){
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function consultAndService(){
        return $this->hasMany(consultAndService::class, 'service_id');
    }
}
