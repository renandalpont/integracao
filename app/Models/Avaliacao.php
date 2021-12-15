<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;
    protected $fillable = ['nr_nota', 'ds_avaliacao', 'nm_usuario', 'cd_local']; 

}
