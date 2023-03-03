# NOME DOIDO DO SITE

## Feature
- Sistema de Login e Cadastro
- Cadastrar series e animes
- Painel de Controle de Usuario
- Painel de Controle da Administração
- Exibição de Lista de Series e Animes (All)

### Backend
    -> Banco de Dados: Mysql
    -> APIs: OMDB (Seris e Filmes), Kitsu (Animes)
- CRUD de Usuarios
    -> Table User: id, Username, Senha, E-mail
    -> Table Profile User (Extends User): uid
- CRUD de Filmes e Series e outros
- Token de validacao

### Frontend
- Tela de Login;Cadastro
- Tela de Perfil
- Tela de Series e Outros

### STATUS CODE
- Criação sem retorno 201
- sucesso com/sem retorno - 200 
- erro gerais com retorno - 400 
- não conseguiu autenticar sem retorno - 401
- não tem permissão de acesso - 403
- não encontrado com/sem retorno 404 
- erro do servidor sem retorno 500 