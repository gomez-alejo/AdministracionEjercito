<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class army_corps extends Model
{
    use HasFactory;
    protected $table = 'army_corps';
    protected $fillable= ['denomination'];

        // Relación 1:N con Soldados
        public function soldiers()
        {
            return $this->hasMany(soldiers::class, 'army_corps_id');
        }
    
        // Relación 1:N con Cuarteles
        public function barracks()
        {
            return $this->hasMany(barracks::class, 'army_corps_id');
        }
}
