## Fiado Só Amanhã

Esse projeto foi desenvolvido para a disciplina de Modelagem de Sistemas pelos alunos:
- Antônio Medeiros
- Ary Neto
- Caio Cedrola
- Matheus Reis
- Samuel Abreu

## Requisitos
O usuário deve, em seu computador, ter:
- Composer
- MySQL
- PHP 7.4

## Instalação

- Clone o repositório:
- Crie um banco de dados usando o mysql.
- Copie o arquivo `.env.example` e cole com o nome `.env`, alterando as variáveis DB_DATABASE, DB_USERNAME e DB_PASSWORD para o nome do banco de dados criado, o username e a senha do mysql, respectivamente
- Execute o comando a seguir para preencher o banco de dados com as tabelas necessárias:

```bash
php artisan migrate
```
- Suba um servidor executando esse comando no terminal estando no diretório do projeto:

```bash
php artisan serve
```

