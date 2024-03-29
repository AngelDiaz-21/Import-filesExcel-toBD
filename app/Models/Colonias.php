<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colonias extends Model
{
    use HasFactory;

    public $table = "colonia";

    protected $fillable = [
        'clave_Colonia',
        'clave_CodigoPostal',
        'nombre_Asentamiento',
    ];
}