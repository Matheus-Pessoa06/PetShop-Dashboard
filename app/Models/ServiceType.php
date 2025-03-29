<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $fillable = [
        'typeservice',
        'name'
    ];


    public function serviceType(){
        return $this->belongsTo(ConsultAndService::class, 'serviceType_id');
    }
}
