<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeNourriture extends Model
{
    protected $fillable = ['id_type_nourriture', 'libelle_type_nourriture'];
    protected $primaryKey = 'id_type_nourriture';
    use HasFactory;
}
