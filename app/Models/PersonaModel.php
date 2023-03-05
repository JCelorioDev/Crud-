<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaModel extends Model
{
    protected $table = "persona";
    protected $fillable = ['nombre','apellidos','edad','peso','altura'];
    public $timestamps = false;
}
