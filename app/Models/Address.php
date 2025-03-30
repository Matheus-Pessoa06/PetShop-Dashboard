<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'cep',
        'city',
        'district',
        'number',
        'client_id'
    ];


    public function client(){
        return $this->belongsTo(Client::class, 'client_id');
    }
}
