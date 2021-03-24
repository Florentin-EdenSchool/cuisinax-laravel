<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatIngredient extends Model
{
    protected $fillable = ['id_plat', 'id_ingredient'];
    use HasFactory;
}
