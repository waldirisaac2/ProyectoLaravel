<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    public $timestamps = false;
    protected $primaryKey = 'empresa_id';
    protected $guarded = ["empresa_id"];
    protected $table ='empresa';
}
