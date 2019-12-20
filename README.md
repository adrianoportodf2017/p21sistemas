Seja bem vindo ao desafio P21 Sistemas

###################
Quem sou eu?
###################

https://www.youtube.com/watch?v=TygQWqYeHAc&feature=youtu.be

*******************
Sobre o desafio
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.


************
Installation
************


Instalação
Faça o download dos arquivos.

Extraia o pacote e copie para seu webserver.

Acesse sua URL e inicie a instalação, é bem simples, basta preencher as informações no assistente de instalação .

Configure o email de envio no arquivo email.php

Configurar cron jobs para envio de e-mail

Enviar emails pendentes a cada 2 minutos.
*/2 * * * * php /var/www/index.php email/process
Enviar emails com falha a cada 5 minutos.
*/5 * * * * php /var/www/index.php email/retry


Tecnologias usadas

bcit-ci/CodeIgniter

twbs/bootstrap

jquery/jquery

jquery/jquery-ui



Requerimentos
PHP >= 5.5.0
MySQL
