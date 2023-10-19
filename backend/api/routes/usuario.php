<?php

require_once("router.php");

$router = new Router();

$router->addRoute('user','UsuarioController','registrarUsuario');