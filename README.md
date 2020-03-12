Seja Bem vindo 
---------------------------------------


## Documentação do sistema
 * [Doc. Desafio](https://desafiop21.000webhostapp.com/documentacao/classes/Dashboard.html) - 
 
 
## Arquivos necessários
 * [Planilha excel](https://github.com/p21sistemas/vikings/blob/master/Cart%C3%B3rios.xlsx) - Planilha atualizada com a lista de cartórios
 * [Arquivo XML](https://github.com/p21sistemas/vikings/blob/master/Cart%C3%B3rios-CNJ.xml) - Arquivo XML para importação


************
* Caso não consiga instalar o sistema por favor entre em contato pelo email: adrianobr00@gmail.com
* Você pode  acessar o link abaixo para ver o sistema em funcionamento em uma hospedagem web.
* [Link Sistema](https://desafiop21.000webhostapp.com) 
* O sistema já esta com modulo de login para segurança, vc pode cadastrar um novo usuário pelo proprio sistema ou acessar com os dados abaixo.
* login: admin@admin.com
* Senha: 123456

************

************
Intruções de instalação e configuração
---------------------------------------

************



* Requerimento

    - PHP >= 5.5
    - MySQL

    Extensões 
        - cURL
        - GD
        - MySQLi

Instalando com o assistente de instalação

    Ambiente Linux 
        - Atribua www-data como dono dos arquivos e pastas do sistema (sudo chown www-data -R *) - Execute dentro da raiz da pasta do sistema 
        - Atribua permissão nos arquivos (sudo chmod 755 -R *) - Execute dentro da raiz da pasta do sistema 
        - Crie o banco de dados no MySQL e um usuário dedicado ao banco
        - Acesse a url do sistema e inicie o processo de instalação

    Ambiente Windows
        - Crie o banco de dados no MySQL e um usuário dedicado ao banco
        - Acesse a url do sistema e inicie o processo de instalação

Em caso de falha do instaldor vc pode instalar o sistema manualmente, seguindo o passo a passo abaixo.

    - Crie o banco de dados no MySQL e um usuário dedicado ao banco
    - Remova as linhas 540 e 541 do arquivo banco.sql e adicione o comando abaixo

        INSERT INTO `usuarios` (`idUsuarios`, `nome`, `rg`, `cpf`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `email`, `senha`, `telefone`, `celular`, `situacao`, `dataCadastro`, `permissoes_id`) VALUES
            (1, 'Admin', 'MG-25.502.560', '600.021.520-87', 'Rua Acima', '12', 'Alvorada', 'Teste', 'MG', 'admin@admin.com', '$2y$10$lAW0AXb0JLZxR0yDdfcBcu3BN9c2AXKKjKTdug7Or0pr6cSGtgyGO', '0000-0000', '', 1, '2018-09-09', 1);
    
    - Execute o script de criação das tabelas - arquivo banco.sql 
    - Dentro da pasta 'Application/Config' edite o arquivo 'database.php' e coloque os dados de acesso ao banco de dados.     
    - Adiciente a url do sistema no arquivo 'Application/Config/config.php' na seguinte linha.  $config['base_url']	= 'http://localhost/p21sistema/'; --> A url deve terminar com /
    - Altere a linha 332 no mesmo arquivo anterior para $config['encryption_key'] = '6f;~d5df;.s.d.fwe';
    - Altere no arquivo index.php na raiz a linha 59 para -> define('ENVIRONMENT', 'production')
    - Acesse a url do sistema

    Dados de acesso instalando manualmente
        - Email: admin@admin.com
        - Senha: 123456


Configurando cron job para envio de e-mail 

    Enviar emails pendentes a cada 2 minutos.
        - */2 * * * * php /var/www/index.php email/process
    Enviar emails com falha a cada 5 minutos.
        - */5 * * * * php /var/www/index.php email/retry





----------------------------------------
@adrianoportodf2017- adrianobr00@gmail.com
----------------------------------------


Quem sou eu? clique na imagem abaixo.
---------------------------------------

[![quem sou eu](http://lounge.obviousmag.org/um_ponto_no_infinito/quem-sou-eu.jpg)](https://www.youtube.com/watch?v=TygQWqYeHAc&feature=youtu.be)

