<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
        // Relación N:M (Un Servicio puede ser realizado por muchos Soldados y viceversa)
        public function soldiers()
        {
            return $this->belongsToMany(soldier::class, 'service_soldier', 'service_id', 'soldier_id')->withPivot('date');
        }
}
