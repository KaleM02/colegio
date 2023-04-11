<?php

namespace App\Models;

use App\Models\Padre;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = "alumnos";

    protected $fillable = [
        'primernombre',
        'segundonombre',
        'primerapellido',
        'segundoapellido',
        'numerodeidentidad',
        'fechadenacimiento',
        'genero',
        'direccion',
        'numerodehermanosenicgc',
        'tiene_alergia',
        'alergia',
        'fotografias',
        'fotografiasdelpadre',
        'carnet',
        'certificadodeconducta',
        'ciudad',
        'depto',
        'pais',
        'gradoingresar',
        'escuelaanterior',
        'totalhermanos',
        'medico',
        'telefonoemergencia',
       

    ];
        public function padres()
        {
            return $this->belongsToMany(Padre::class,'alumno_padre','alumno_id','padre_id');
        }

        public function periodo(){
            return $this->hasOne('App\Models\Periodo');
        }

        public function matriculas()
        {
            return $this->hasMany('App\Models\Matriculado');
        }

}
