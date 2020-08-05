<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'cursos_id';
    protected $guarded = ["cursos_id"];
    protected $table ='cursos';
}
