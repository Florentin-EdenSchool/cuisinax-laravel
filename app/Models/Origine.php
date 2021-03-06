<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origine extends Model
{
    protected $fillable = ['id_origine', 'libelle_origine'];
    protected $primaryKey = 'id_origine';
    use HasFactory;
}