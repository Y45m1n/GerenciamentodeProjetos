<!-- resources/views/projetos/indexProjetos.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lista de Projetos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Projetos</h1>

        <a href="{{ route('projetos.create') }}" class="btn btn-primary mb-4">Criar Novo Projeto</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Data de Início</th>
                    <th>Data de Fim</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projetos as $projeto)
                    <tr>
                        <td>{{ $projeto->id }}</td>
                        <td>{{ $projeto->nome }}</td>
                        <td>{{ $projeto->descricao }}</td>
                        <td>{{ $projeto->data_inicio->format('d/m/Y') }}</td>
                        <td>{{ $projeto->data_fim->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('projetos.edit', $projeto) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('projetos.destroy', $projeto) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Nenhum projeto encontrado.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
