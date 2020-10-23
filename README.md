## Itens que foram feitos na aplicação
A. Criar uma aplicação web PHP com Framework Laravel

B. Persistir os dados em um banco de dados Postgres SQL

C. Utilizar Eloquent ORM

D. Utilizar Bootstrap 4

G. Criar SPA com VueJS

H. Publicar projeto no Heroku

## Configurações local

Passo a passo para configuração da api REST Laravel:

- Git clone
```sh
$ git clone https://github.com/lucasmateus/api-todo-laravel.git
```
- Entrar no diretorio clonado
```sh
$ cd api-todo-laravel
```
- Instalação dos arquivos laravel
```sh
$ composer install
```
- Criar um database postgres

- Copiar o arquivo .env.example e depois renomear para .env

- Configurações do database postgres para o arquivo .env:

```sh
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=database (trocar o nome "database" para o nome do database que você  criou)
DB_USERNAME=postgres (trocar o nome "postgres" para o nome do seu usuario postgres que criou o database)
DB_PASSWORD=senha (trocar o nome "senha" para a senha do seu usuario postgres)
```
- Gerar key app laravel
```sh
$ php artisan key:generate
```
- Criar as tables do database (migration)
```sh
$ php artisan migrate
```
- Rodar a aplicação
```sh
$ php artisan serve
```
