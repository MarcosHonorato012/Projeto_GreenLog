# Projeto_GreenLog
Sistema web fullstack em Laravel, com frontend em Blade (HTML e CSS ) e banco PostgreSQL. Segue o conceito MVP para gerenciar veículos sustentáveis e registrar viagens logísticas da GreenLog.
#Como foi executado deploy:

Usando servido em nuvem, aws e o serviço EC2, a instância usa como SO Debian 13, o tipo da estância é m7i-flex.large, oferecendo 2 vCPUs, 8 GiB de RAM e Até 12.5 Gbps de largura de banda, com 16 de armazenamento. tendo como programas para executar o deploy foi: nginx + php-fpm. Para que o DNS ser executado foi usado o programa DDNS.noip, e também adicionar a URL.

#Como executar localmente:

Os requisitos para o sistema funciona:

•PHP 8.4+ •Composer •PostgreSQL •Nginx ou Apache

As extensões do PHP:

•BCMath •Ctype •Fileinfo •JSON •Mbstring •OpenSSL •PDO •PDO_PGSQL •Tokenizer •XML

Agora fazer "git clone URL desse repositórios"

Criar usuário e banco de dados PostgreSQL

Acesse o PostgreSQL:

sudo -u postgres psql

Crie um usuário:

CREATE USER greenlog_user WITH PASSWORD 123456

Crie o banco de dados:

CREATE DATABASE greenlog;

Dê permissão ao usuário no banco:

GRANT ALL PRIVILEGES ON DATABASE greenlog TO greenlog_user;

Configurar o arquivo .env

Caminho do arquivo: /Projeto-GreenLog/backend/.env

Copiar o arquivo: cp .env.example .env

DB_CONNECTION=pgsql DB_HOST=127.0.0.1 DB_PORT=5432 DB_DATABASE=greenlog DB_USERNAME=greenlog_user DB_PASSWORD=123456

obs: Tirar "#" do comando para funcionar definitivamente.

Permissão para os arquivos:

caso queira usar nginx + php-fpm:

sudo chown -R www-data:www-data storage sudo chown -R www-data:www-data bootstrap/cache

para laravel escrever as logs e caches:

sudo chmod -R 775 storage sudo chmod -R 775 bootstrap/cache

Dentro do arquivo Backend:

"composer install" Composer vai gerenciar as extensão do php

por fim:

"php artisan migrante" para criar as tabelas no banco de dados.

"php artisan serve" Vai no seu navegador e coloque 127.0.0.1:8000

OBS: Caso queira utilizar nginx ou apache coloque esse caminho no root dos arquivos do programa. /etc/nginx/sites-avalibles/default. add: caminho até public do seu laravel.

No caso do apache é parecido, porém Muda o caminho do arquivo default.
