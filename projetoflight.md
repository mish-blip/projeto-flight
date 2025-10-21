## PROJETO DESENVOLVIMENTO WEB

* bibliotecas FRONTEND
![](https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/2560px-Bootstrap_logo.svg.png)
Bootstrap

* bibliotecas BACKEND:
![](https://imgur.com/a/o6Cysly)
Illuminate (Laravel - Eloquent/Illuminate)  
Dotenv  
Phinx  
Cloudinary.php

* frameworks
FLIGHT (microframework)

## INSTALAÇÃO \- GUIA

1. pull do github (ou baixar), 
2. abrir a pasta do projeto no vscode
3. no terminal no diretório do projeto *ou cmd com a pasta aberta;
   install composer 
4. criar o DB vazio no phpmyadmin com o nome ‘flight\_projeto’
   ver se os arquivos abaixo estão ok/editar:
   
## CONFIGURAR DATABASE/CLOUDINARY  
editar :  
   config.php - credenciais do cloudinary
   index.php - configurações do banco de dados
   phinx.php - configuraçoes do banco de dados ##
   
5. no terminal do projeto;
   vendor\bin\phinx
   phinx migrate 


## EXPLICAÇÃO

**public:**
* public/index.php  
  * “arquivo principal”, estabelece as URLs e rotas

**src:**
* controllers  
  * são a comunicação php entre as Views (html, frontend) com o backend (Models e banco de dados)  
* models   
  * são as permissões diretas e estabelecem ‘como’ a comunicação com o banco de dados ocorre  
* views  
  * são o html e frontend  
* services  
  * só o serviço que conecta ao bd da nuvem (Cloudinary)
user-controller e login-controller : lógica da autenticação   
product-controller: lógica do CRUD (create, read, upload, delete)
