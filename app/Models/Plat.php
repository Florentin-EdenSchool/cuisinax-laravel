<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    protected $fillable = ['id_plat', 'id_origine', 'id_type_plat', 'id_type_nourriture', 'prix', 'poids', 'libelle'];
    use HasFactory;
}
