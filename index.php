<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
    case '':
    case '/index':
    case '/index.php':
        require __DIR__ . '/pages/home.php';
        break;
        // case '/events' :
        //     require __DIR__ . '/pages/events.php';
        //     break;
    default:
        http_response_code(404);
        require __DIR__ . '/pages/404.php';
        break;
}
