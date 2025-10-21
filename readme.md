## PROJETO DESENVOLVIMENTO WEB

* bibliotecas FRONTEND  
Bootstrap  

* bibliotecas BACKEND:  
Illuminate (Laravel - Eloquent/Illuminate)    
Dotenv  
Phinx  
Cloudinary.php  
  
* frameworks  
FLIGHT (microframework)  
  
# Guia de Instalação

---

## Requisitos

1.  **XAMPP:** Com os módulos Apache e MySQL.
2.  **Composer:** 
3.  **Git:**
---

## Passos para Instalação

**1. Obtenha o Código-Fonte**
   - No seu terminal, navegue até a pasta `htdocs` do seu XAMPP (geralmente `C:\xampp\htdocs`).
   - Clone o repositório do GitHub:
     ```bash
     git clone [URL_DO_SEU_REPOSITORIO_AQUI]
     ```
   - Entre na pasta do projeto que foi criada:
     ```bash
     cd nome-do-projeto
     ```

**2. Instale as Dependências do PHP**
   - Este comando irá baixar todas as bibliotecas necessárias (Flight, Eloquent, Phinx, etc.) para a pasta `vendor`.
     ```bash
     composer install
     ```

**3. Configure o Banco de Dados**
   - **a) Crie o Banco:** Abra o **phpMyAdmin** (`http://localhost/phpmyadmin`) e crie um novo banco de dados vazio com o nome exato: **`flight_projeto`**. Selecione o agrupamento `utf8mb4_unicode_ci`.
   - **b) Configure as Credenciais:** Se necessário, edite os arquivos `phinx.php` e `public/index.php` para garantir que as informações de `host`, `database`, `user` e `pass` correspondem às do seu ambiente XAMPP local. (Para uma instalação padrão, o `user` é 'root' e a `pass` é em branco).

**4. Construa as Tabelas (Execute as Migrations)**
   - Este comando vai ler as "plantas baixas" na pasta `db/migrations` e criar todas as tabelas no seu banco de dados.
     ```bash
     vendor\bin\phinx migrate
     ```

---

## Rodar o Projeto

1.  Garanta que os módulos **Apache** e **MySQL** estejam iniciados no painel de controle do XAMPP.
2.  Abra seu navegador e acesse a seguinte URL:

    `http://localhost/projeto-flight/public`

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
