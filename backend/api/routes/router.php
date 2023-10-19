<?php
class Router
{
    private $routes = [];

    public function addRoute($uri, $controller, $method)
    {

        if (!class_exists($controller)) {
            throw new Exception('El controlador no existe: ' . $controller);
        }

        if (!method_exists($controller, $method)) {
            throw new Exception('El método no existe: ' . $controller . '->' . $method);
        }

        echo 'hola';

        $this->routes[$uri] = [
            "controller" => $controller,
            "method" => $method,
        ];
    }

    public function dispatch()
    {
        try {
            $uri = $_SERVER["REQUEST_URI"];
            $method = $_SERVER["REQUEST_METHOD"];

            if (array_key_exists($uri, $this->routes)) {
                $controller = $this->routes[$uri]["controller"];
                $method = $this->routes[$uri]["method"];

                // Llamar al controlador y al método correspondiente.
                $controller = new $controller();
                $controller->$method();
            } else {
                throw new Exception('Ruta no encontrada.');
            }
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}