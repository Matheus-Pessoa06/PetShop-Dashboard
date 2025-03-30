<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $table = "servicestype";
    protected $fillable = [
        'typeService',
        'name',
        'service_id'
    ];


    public function serviceType(){
        return $this->belongsTo(ConsultAndService::class, 'service_id');
    }
}
