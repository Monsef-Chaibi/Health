<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;
    // In Time model
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    protected $fillable = ['service_id', 'date_from', 'date_to'];

}
