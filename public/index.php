<?php
session_start();

require __DIR__ . '/../vendor/autoload.php';  //composer
require __DIR__ . '/../src/Models/User.php';
require __DIR__ . '/../src/Models/Product.php';
require __DIR__ . '/../src/Controllers/InicioController.php';
require __DIR__ . '/../src/Controllers/UserController.php';
require __DIR__ . '/../src/Controllers/LoginController.php';
require __DIR__ . '/../src/Controllers/DashboardController.php';
require __DIR__ . '/../src/Controllers/ProductController.php';
require __DIR__ . '/../src/Services/ImageUpload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..'); //carrega o .env
$dotenv->load();

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Models\User;
use App\Models\Product; 
use App\Controllers\UserController;
use App\Controllers\LoginController;
use App\Controllers\DashboardController;
use App\Controllers\InicioController;
use App\Controllers\ProductController;

// função para verificar o usuário
function checkAdmin() {
    // verificação: O usuário está logado?
    if (!isset($_SESSION['user_id'])) {
        // se não estiver, expulsa para a página de login.
        Flight::redirect('/login');
        die();
    }

    // verificação: O usuário logado é um admin?
    $user = App\Models\User::find($_SESSION['user_id']); // busca o usuário no banco

    // se o usuário não for encontrado / se a coluna 'is_admin' não for = 1
    if (!$user || $user->is_admin != 1) {
        // expulsa para a página inicial, pois não tem permissão
        Flight::redirect('/public/');
        die();
    }
}

$userController = new UserController();
$loginController = new LoginController();
$dashboardController = new DashboardController();
$inicioController = new InicioController();
$productController = new ProductController();

Flight::set('flight.views.path', __DIR__ . '/../src/Views');

//database
$capsule = new Capsule;
$capsule->addConnection([   // essa é a conexão com o banco de dados
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'flight_projeto', // nome do banco de dados
    'username'  => 'root',           // usuário do banco de dados
    'password'  => '',               // senha do banco de dados
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent(); 

    /** rotas */

// página inicial
Flight::route('/', [$inicioController, 'index']);
//cadastro
Flight::route('GET /cadastro', [$userController, 'showRegistrationForm']);
Flight::route('POST /cadastro', [$userController, 'store']);
//login
Flight::route('GET /login', [$loginController, 'showLoginForm']);
Flight::route('POST /login', [$loginController, 'login']);
//dashboard
Flight::route('GET /dashboard', [$dashboardController, 'index']);
//logout
Flight::route('GET /logout', [$loginController, 'logout']);

// rotas de produtos

// (READ) mostra a lista de todos os produtos - pública
Flight::route('GET /products', [$productController, 'index']);

// (CREATE) mostra o formulário para criar um novo produto - só pra admin
Flight::route('GET /products/create', function(){
    checkAdmin(); //protege
    (new App\Controllers\ProductController())->create();
});

// (CREATE) salva o novo produto no banco - só pra admin
Flight::route('POST /products', function(){
    checkAdmin(); //protege
    (new App\Controllers\ProductController())->store();
});

// (UPDATE) mostra o formulário para editar - só pra admin
Flight::route('GET /products/@id/edit', function($id){
    checkAdmin(); //protege
    (new App\Controllers\ProductController())->edit($id);
});

// (UPDATE) salva as alterações no banco - só pra admin
Flight::route('POST /products/@id/update', function($id){
    checkAdmin(); //protege
    (new App\Controllers\ProductController())->update($id);
});

// (DELETE) apaga um produto do banco - só pra admin
Flight::route('POST /products/@id/delete', function($id){
    checkAdmin(); //protege
    (new App\Controllers\ProductController())->destroy($id);
});

Flight::start();