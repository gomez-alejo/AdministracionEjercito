<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barracks extends Model
{
    use HasFactory;
    protected $table= 'barracks';
    protected $fillable = ['name', 'location'];

        // Relación 1:N inversa (Un Cuartel pertenece a un ArmyCorps)
        public function armyCorps()
        {
            return $this->belongsTo(army_corps::class, 'army_corps_id');
        }
    
        // Relación 1:N (Un Cuartel tiene muchos Soldados)
        public function soldiers()
        {
            return $this->hasMany(soldiers::class, 'barrack_id');
        }
    
        // Relación N:M (Un Cuartel puede tener muchas Compañías y viceversa)
        public function companies()
        {
            return $this->belongsToMany(companies::class, 'barrack_company', 'barrack_id', 'company_id');
        }
}
