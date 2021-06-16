## 💻 Como executar o projeto

Faça o clone do projeto, renomeie o arquivo `.env.example` para `.env`, e altere este arquivo com as credenciais do seu banco de dados MySQL local.

Em seguida, execute os seguintes comandos na pasta raíz do projeto:

1. Para instalar as dependências do projeto:
```
composer install
```
```
npm install
```

2. Carregar o arquivo .env no cache:
```
php artisan config:cache
```

3. Para criar o banco de dados:
```
php artisan migrate
```
<!-- ```
php artisan db:seed
``` -->

4. Para executar o projeto:
```
php artisan serve