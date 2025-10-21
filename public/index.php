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

// função global para verificar se o usuário é adm
function checkAdmin() {
    // 1º Verificação: O usuário está logado?
    if (!isset($_SESSION['user_id'])) {
        // Se não estiver, expulsa para a página de login.
        Flight::redirect('/login');
        die();
    }

    // 2º Verificação: O usuário logado é um admin?
    $user = App\Models\User::find($_SESSION['user_id']); // Busca o usuário no banco

    // Se o usuário não for encontrado OU se a coluna 'is_admin' não for 1...
    if (!$user || $user->is_admin != 1) {
        // ...expulsa para a página inicial, pois ele não tem permissão.
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
//

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

// --- ROTAS DE PRODUTOS ---

// (READ) Mostra a lista de todos os produtos - ROTA PÚBLICA
Flight::route('GET /products', [$productController, 'index']);

// (CREATE) Mostra o formulário para criar um novo produto - ROTA PROTEGIDA
Flight::route('GET /products/create', function(){
    checkAdmin(); // <-- O SEGURANÇA NA PORTA!
    (new App\Controllers\ProductController())->create();
});

// (CREATE) Salva o novo produto no banco - ROTA PROTEGIDA
Flight::route('POST /products', function(){
    checkAdmin(); // <-- O SEGURANÇA NA PORTA!
    (new App\Controllers\ProductController())->store();
});

// (UPDATE) Mostra o formulário para editar - ROTA PROTEGIDA
Flight::route('GET /products/@id/edit', function($id){
    checkAdmin(); // <-- O SEGURANÇA NA PORTA!
    (new App\Controllers\ProductController())->edit($id);
});

// (UPDATE) Salva as alterações no banco - ROTA PROTEGIDA
Flight::route('POST /products/@id/update', function($id){
    checkAdmin(); // <-- O SEGURANÇA NA PORTA!
    (new App\Controllers\ProductController())->update($id);
});

// (DELETE) Apaga um produto do banco - ROTA PROTEGIDA
Flight::route('POST /products/@id/delete', function($id){
    checkAdmin(); // <-- O SEGURANÇA NA PORTA!
    (new App\Controllers\ProductController())->destroy($id);
});

Flight::start();