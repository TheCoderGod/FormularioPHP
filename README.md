Projeto de Login em PHP

Este é um projeto simples de formulário de login em HTML, CSS e PHP, com validação no frontend e autenticação no backend. Os dados dos usuários são armazenados em um banco de dados MySQL.
Estrutura do Projeto

    index.html: Página HTML que contém o formulário de login.
    style.css: Arquivo CSS para estilização da página.
    verifica.php: Script PHP que valida as credenciais do usuário.
    dump.sql: Dump do banco de dados MySQL.

Pré-requisitos

    Servidor web com suporte a PHP (como Apache ou Nginx)
    MySQL ou MariaDB

Configuração
Banco de Dados

    Importe o dump do banco de dados para seu servidor MySQL:


`mysql -u root -p curso_php < dump.sql`

O comando acima pressupõe que você já criou um banco de dados chamado curso_php. Caso contrário, crie o banco de dados antes de importar o dump:


    `CREATE DATABASE curso_php;`

    Verifique se a tabela cadastro foi criada e se o usuário marcos com a senha 1234 está presente.

Arquivos do Projeto

    Clone este repositório para o seu servidor web:

`git clone https://github.com/seu-usuario/seu-repositorio.git`

Configure o diretório do projeto no seu servidor web. Por exemplo, se estiver usando Apache, mova os arquivos para o diretório htdocs:


    `mv seu-repositorio /caminho/para/htdocs/`

    Verifique as permissões dos arquivos para garantir que o servidor web possa acessá-los.

Configuração do PHP

    Certifique-se de que o arquivo verifica.php contém as informações corretas para a conexão com o banco de dados:

    `<?php
    $servidor = '127.0.0.1';
    $usuario = 'root';
    $senha = '';
    $bancoDados = 'curso_php';
    ?>`

    Se você estiver usando um nome de usuário ou senha diferente para o MySQL, altere as variáveis $usuario e $senha conforme necessário.

Uso

    Acesse a página de login no seu navegador, por exemplo:

    arduino

    http://localhost/seu-repositorio/index.html

    Preencha o formulário de login com as credenciais marcos e 1234 para testar o login.

Funcionalidades

    Validação no frontend: O formulário de login valida os campos login e senha para garantir que não estejam vazios antes de enviar.
    Proteção contra SQL Injection: Os dados do formulário são escapados usando mysqli_real_escape_string antes de serem usados na consulta SQL.
    Autenticação: Verifica se as credenciais fornecidas correspondem a um usuário registrado no banco de dados.