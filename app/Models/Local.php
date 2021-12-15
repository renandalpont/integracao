<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $fillable = ['nm_local', 'ds_local', 'ds_endereco', 'ds_tarifa', 'pg_entrada', 'cd_cidade', 'cd_estado', 'cd_categoria', 'img_link'];
}
