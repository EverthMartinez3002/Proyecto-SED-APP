// router/index.php

require_once '../UsuarioController.php'; // Asegúrate de que el archivo del controlador esté correctamente incluido.

// Crea una instancia del controlador pasando el modelo y la conexión PDO.
$usuarioController = new UsuarioController($usuarioModel, $pdo);

// Obtén la ruta de la solicitud.
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Define las rutas y las acciones asociadas.
$routes = [
    '/' => 'mostrarFormulario', // Mostrar el formulario de registro
    '/registrar' => 'registrarUsuario', // Registrar un usuario
];

// Comprueba si la ruta solicitada existe en las rutas definidas.
if (array_key_exists($path, $routes)) {
    $action = $routes[$path];

    // Ejecuta la acción correspondiente en el controlador.
    $usuarioController->$action();
} else {
    // Mostrar una página de error o redirigir a una página de inicio.
    echo 'Página no encontrada';
}
