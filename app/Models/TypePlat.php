<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePlat extends Model
{
    protected $fillable = ['id_type_plat', 'libelle_type_plat'];
    protected $primaryKey = 'id_type_plat';
    use HasFactory;
}
