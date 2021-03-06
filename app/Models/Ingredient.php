<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $fillable = ['id_ingredient', 'libelle_ingredient'];
    protected $primaryKey = 'id_ingredient';
    use HasFactory;
}
