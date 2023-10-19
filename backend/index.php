<?php
$request_uri = $_SERVER["REQUEST_URI"];

if ($request_uri === '/') {
    include ('api/views/home.php');
} else {
    include('api/routes/router.php');
}