<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    // Especificar la tabla en caso de que no siga la convención de nombres
    protected $table = 'companies';

    // Deshabilitar la auto-incrementación de la clave primaria
    public $incrementing = false;

    // Especificar el tipo de clave primaria (porque id es un string)
    protected $keyType = 'string';

    // Permitir asignación masiva de los siguientes campos
    protected $fillable = [
        'id',
        'primary_activity',
    ];

        // Relación 1:N (Una Compañía tiene muchos Soldados)
        public function soldiers()
        {
            return $this->hasMany(soldiers::class, 'company_id');
        }
    
        // Relación N:M (Una Compañía puede estar en muchos Cuarteles y viceversa)
        public function barracks()
        {
            return $this->belongsToMany(barracks::class, 'barrack_company', 'company_id', 'barrack_id');
        }
}
