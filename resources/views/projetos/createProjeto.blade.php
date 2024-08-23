@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-2xl font-semibold mb-4">Criar Novo Projeto</h1>

    <form action="{{ route('projetos.store') }}" method="POST">
        @csrf

        <!-- Nome do Projeto -->
        <div class="mb-4">
            <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
            <input type="text" name="nome" id="nome" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <!-- Descrição do Projeto -->
        <div class="mb-4">
            <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
            <textarea name="descricao" id="descricao" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
        </div>

        <!-- Data de Início -->
        <div class="mb-4">
            <label for="data_inicio" class="block text-sm font-medium text-gray-700">Data de Início</label>
            <input type="date" name="data_inicio" id="data_inicio" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <!-- Data de Fim -->
        <div class="mb-4">
            <label for="data_fim" class="block text-sm font-medium text-gray-700">Data de Fim</label>
            <input type="date" name="data_fim" id="data_fim" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
        </div>

        <!-- Membros -->
        <!-- <div class="mb-4">
            <label for="users" class="block text-sm font-medium text-gray-700">Membros</label>
            <select name="users[]" id="users" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" multiple>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div> -->

        <!-- Botão de Envio -->
        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white font-semibold rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Salvar</button>
        </div>
    </form>
</div>
@endsection

