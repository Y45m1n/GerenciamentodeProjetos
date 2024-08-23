## ![Gerenciamento de Projetos](https://img.icons8.com/ios-filled/50/000000/project-management.png) Gerenciamento de Projetos 

### ESCOPO:
- O objetivo deste projeto desenvolvido em Laravel, consiste em um Sistema de Gerenciamento de Projetos que permita a colaboração eficiente entre equipes, atribuição de tarefas e acompanhamento do progresso dos projetos. O sistema deve atender às necessidades de gerentes e membros da equipe para otimizar o gerenciamento e a execução dos projetos.

### OBJETIVOS: 
-- Específicos:
- Desenvolver um sistema de cadastro e autenticação para gerentes e usuarios.
- Implementar funcionalidades para gerentes visualizarem quais integrantes são de quais projetos.
- Permitir que gerentes registrem os projetos.
- Permitir que usuarios participem dos projetos.
- Criar dashboards específicos para gerentes e usuarios, com funcionalidades relevantes para cada perfil.

-- Mensuráveis:
- Garantir que o sistema cadastre até 5 usuários.
- Garantir que o sistema cadastre até 2 gerentes.
- Garantir que um gerente cadastre pelo menos 5 projetos.
- Garantir que um usuario se cadastre em pelo menos 2 projetos.

-- Atingíveis:
- Utilizar frameworks e bibliotecas bem documentadas (como Laravel) para assegurar o cumprimento dos prazos e qualidade do código.

-- Relevantes:
- Facilitar o processo de criação de projetos entre equipes e gerentes, otimizando o processo.

### CRONOGRAMA:
<p><img src="/img/cronograma.png" width="1000px">

### RECURSOS:
- Laravel Framework
- PostgreSQL Database
- Visual Studio Code
- Pusher para notificações em tempo real
- Excel (cronograma)
- Miro (diagramas)
- Git/GitHub
- Equipe (Gerente de Projeto,Desenvolvedores Backend (2-3 membros),Desenvolvedores Frontend (2 membros),Designer UX/UI,Tester/QA (Controle de Qualidade))

### ANÁLISE DE RISCO:
-Atrasos no Cronograma devido a Requisitos Não Previstos:
--Mitigação: Realizar uma análise detalhada dos requisitos e envolver todas as partes interessadas desde o início. Adotar uma metodologia ágil (como Scrum) para permitir ajustes contínuos e flexibilidade no planejamento.
-Problemas Técnicos com Internet:
--Mitigação: Garantir que todos os membros da equipe tenham uma conexão de internet estável e fornecer alternativas de trabalho offline quando possível.
-Falta de Experiência da Equipe com as Ferramentas e Tecnologias Utilizadas:
--Mitigação: Investir em treinamentos e recursos de aprendizado para a equipe. Estabelecer um plano de desenvolvimento contínuo e promover a troca de conhecimentos e boas práticas entre os membros da equipe.
- Mudanças nos Requisitos do Projeto:
--Mitigação: Um escopo claro ajuda a estabelecer expectativas realistas e a minimizar mudanças inesperadas, facilitando o controle de alterações.

### DIAGRAMA DE CLASSE:
<p><img src="/img/DiagramaClasse.png" width="500px">


### DIAGRAMA DE USO:
<p><img src="/img/DiagramaUso.png" width="500px">

### DIAGRAMA DE FLUXO:
<p><img src="/img/DiagramaFluxo.png" width="1000px">

### MANUAL DE USO:

- Pagina Inicial que redireciona para as paginas de Login e Cadastro.
<p><img src="/img/pagInicial.png" width="1000px">

- Pagina de Login, para logar colocar email e senha.
<p><img src="/img/pagLogin.png" width="1000px">

- Pagina de Cadastro, para cadastrar colocar nome, email, senha, confirmar a senha e preencher se é gerente.
<p><img src="/img/pagCadastro.png" width="1000px">

- Dashboard de Gerente, com botão para cadastrar um projeto.
<p><img src="/img/dashboard.png" width="1000px">

- Pagina de cadastro de projeto, para cadastrar colocar nome do projeto, descrição, Data de Inicio e Data de Conclusão.
<p><img src="/img/pagProjeto.png" width="1000px">




