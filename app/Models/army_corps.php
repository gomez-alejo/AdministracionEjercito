<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class army_corps extends Model
{
    use HasFactory;
    protected $table = 'army_corps';
    protected $fillable= ['denomination'];
}
