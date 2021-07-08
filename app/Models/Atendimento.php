<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;

    protected $table = 'atendimentos';

    protected $fillable = [
        'apto',
        'grupo_id',
        'setor_id',
        'funcao_id',
        'empregado_id',
        'coordenador_id',
        'trabalho_altura',
        'data_atendimento',
        'espaco_confinado',
        'tipo_atendimento_id',
    ];
}
