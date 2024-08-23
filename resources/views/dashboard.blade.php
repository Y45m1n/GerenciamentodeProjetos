<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerente Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Adicione seu CSS personalizado aqui -->
    <style>
        body {
            background-color: #f8f9fa; /* Cor de fundo clara */
        }
        .dashboard-header {
            margin-bottom: 20px;
            background-color: #007bff; /* Cor de fundo do cabeçalho */
            color: #ffffff; /* Cor do texto do cabeçalho */
            padding: 10px;
            border-radius: 5px;
        }
        .dashboard-content {
            padding: 20px;
            background-color: #ffffff; /* Cor de fundo do conteúdo */
            border: 1px solid #dee2e6; /* Cor da borda */
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra para profundidade */
        }
        .create-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <div class="container dashboard-header">
                <h2 class="font-semibold text-xl">
                    {{ __('Dashboard') }}
                </h2>
            </div>
     

        <div class="container py-4">
            <div class="card dashboard-content">
                <div class="card-body">
                    <p>{{ __("Você está logado") }}</p>
                    
                    <!-- Botão para Criar Novo Projeto -->
                    <div class="create-button">
                        <a href="{{ route('projetos.create') }}" class="btn btn-primary">
                            {{ __('Criar Novo Projeto') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </x-slot>
    </x-app-layout>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.1/js/bootstrap.min.js"></script>
</body>
</html>
