<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultAndService extends Model
{
    protected $table = 'consults_and_services'; 
    protected $fillable = [
        'type',
        'price',
        'date',
        'description',
        'servicetype',
        'pet_id',
        'service_id'
    ];

    public function serviceType(){
        return $this->hasMany(ServiceType::class, 'service_id');
    }

    public function consultAndService(){
        return $this->belongsTo(Pet::class, 'service_id');
    }
}
 