Seja bem vindo ao desafio P21 Sistemas

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
Matrix Admin
Requerimentos
PHP >= 5.5.0
MySQL
