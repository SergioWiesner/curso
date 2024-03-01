<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table="curso";
    protected $fillable=["id", "nombre", "edad", "telefono","id_jefe"];

    public function empleados(){
        return $this->hasMany(Curso::class, "id_jefe", "id");
    }

    public function jefe(){
        return $this->belongsTo(Curso::class, "id_jefe", "id");
    }
}
