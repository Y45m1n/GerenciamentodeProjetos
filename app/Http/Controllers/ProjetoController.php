<?php
// app/Http/Controllers/ProjetoController.php

namespace App\Http\Controllers;

use App\Models\Projeto;
use App\Models\User;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index()
    {
        // Recupera todos os projetos do banco de dados
        $projetos = Projeto::all();
        
        // Passa a lista de projetos para a visualização
        return view('projetos.indexProjetos', compact('projetos'));
    }

    public function create()
    {
        $users = User::all(); // Use User aqui
        return view('projetos.createProjeto', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'users' => 'array',
            'users.*' => 'exists:users,id',
        ]);

        $projeto = Projeto::create($request->only('nome', 'descricao', 'data_inicio', 'data_fim'));
        $projeto->users()->sync($request->input('users', []));

        return redirect()->route('projetos.index')->with('success', 'Projeto criado com sucesso!');
    }

    public function show(Projeto $projeto)
    {
        $projeto->load('users');
        return view('projetos.show', compact('projeto'));
    }

    public function edit(Projeto $projeto)
    {
        $users = User::all();
        return view('projetos.edit', compact('projeto', 'users'));
    }

    public function update(Request $request, Projeto $projeto)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'users' => 'array',
            'users.*' => 'exists:users,id',
        ]);

        $projeto->update($request->only('nome', 'descricao', 'data_inicio', 'data_fim'));
        $projeto->users()->sync($request->input('users', []));

        return redirect()->route('projetos.index')->with('success', 'Projeto atualizado com sucesso!');
    }

    public function destroy(Projeto $projeto)
    {
        $projeto->delete();
        return redirect()->route('projetos.index')->with('success', 'Projeto deletado com sucesso!');
    }
}
