<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegimenFiscal extends Model
{
    protected $connection = 'claves_sat';
    use HasFactory;

    public $table = "regimenFiscal";



    protected $fillable = [
        'clave_regimenFiscal',
        'descripcion',
        'tipo_personaFisica',
        'tipo_personaMoral'
    ];

}
