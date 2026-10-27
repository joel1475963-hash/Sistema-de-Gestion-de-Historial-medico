<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionFisica extends Model
{
    protected $table = 'evaluacion_fisica';

    protected $primaryKey = 'idEvaluacion';

    protected $fillable = [
        'idPaciente',
        'idUsuario',
        'Descripcion',
        'fechaRegistro'
    ];

    public $timestamps = false;
}
