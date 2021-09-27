<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Teste da Pontue

Uma API criada para tentar uma vaga de emprego na Pontue. API com funcionalidades de CRUD e que funcionam a partir de um usuário autenticado.


Utilizando Laravel/Sanctum para autenticação.

A coleção de testes do Postman está em um arquivo .JSON dentro deste repositório. Basta importar este arquivo para o postman e todos os testes poderão ser realizados.

```
arnoldian2003@gmail.com
```



### Como rodar este projeto?
1. Clone este repositório usando esse comando:
```terminal
$ git clone  https://github.com/ianarnold/TesteAPI_Pontue
```
2. Acesse a pasta do projeto em seu terminal:
```terminal
$ cd TesteAPI_Pontue
```
3. Rode o comando de instalação das bibliotecas PHP do composer para que possamos ter todas nossas depedências do projeto instaladas.
```terminal
$ composer install
``` 

4. Copie o arquivo de configuração de exemplo para um arquivo de configuração real:
```terminal
$ cp .env.example .env
```

5. Altere os valores a seguir dentro do arquivo .env:
    * **DB_DATABASE**: Que é o nome do Banco de Dados (BD) que você precisa criar previamente.
    * **DB_USERNAME**: O nome do usuário do seu BD.
    * **DB_PASSWORD**: A senha desse usuário.
Configurações padrão (de exemplo):
```
DB_DATABASE=testeapi_pontue
DB_USERNAME=root
DB_PASSWORD=root
```



<hr>


* Rode `php artisan key:generate`
* Rode `php artisan migrate`

* Inicie o servidor `php artisan serve`




#### Pronto! Agora basta acessar [http://localhost/](http://localhost/) e começar os trabalhos.