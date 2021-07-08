<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtendimentoRisco extends Model
{
    use HasFactory;

    protected $table = 'atendimento_riscos';

    protected $fillable = [
        'atendimento_id',
        'risco_id'
    ];
}
