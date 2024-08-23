<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'data_inicio',
        'data_fim',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'projeto_user', 'projeto_id', 'user_id');
    }
    public function index()
{
    $projetos = Projeto::all();

    // Verifica se a data está sendo tratada corretamente
    foreach ($projetos as $projeto) {
        dd($projeto->data_inicio, $projeto->data_fim);
    }

    return view('projetos.indexProjetos', compact('projetos'));
}
}
