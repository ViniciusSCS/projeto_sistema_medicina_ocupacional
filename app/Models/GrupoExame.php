<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoExame extends Model
{
    use HasFactory;

    protected $table = 'grupo_exames';

    protected $fillable = [
        'grupo_id',
        'exame_id'
    ];
}
