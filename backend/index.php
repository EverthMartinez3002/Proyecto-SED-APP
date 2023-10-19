<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo 'Esto es una respuesta GET';
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 'Esto es una respuesta POST';
}