<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    // In Service model
    public function times()
    {
        return $this->hasMany(Time::class);
    }

    // In Time model
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
