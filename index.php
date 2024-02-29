<?php
$request = $_SERVER['REQUEST_URI'];
$viewDir = '/api/';

switch ($request) {
    case '':
    case '/':
        echo "There is no index. Fool.";
        break;

    case '/nanoblog':
        require __DIR__ . $viewDir . 'nanoblog.php';
        break;

    case '/post':
        require __DIR__ . $viewDir . 'post.php';
        break;

    case '/feed':
        require __DIR__ . $viewDir . 'feed.php';
        break;

    case '/twtxt':
        require __DIR__ . $viewDir . 'twtxt.php';
        break;

    case '/edit':
        require __DIR__ . $viewDir . 'edit.php';
        break;

    case '/delete':
        require __DIR__ . $viewDir . 'edit.php';
        break;

    default:
        http_response_code(404);
        echo "Not found.";
}
?>