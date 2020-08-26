<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
	protected $table = 'turnos';
	protected $primaryKey = 'id';
    protected $fillable = [
        'nombre',
    ];
}
