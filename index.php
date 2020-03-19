<?php

require 'bootstrap.php';

$teams = $query->selectAll('teams');

$scores = $query->selectAllScores('games');

require 'models/teams.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.view.php';
        break;
    case '' :
        require __DIR__ . '/views/index.view.php';
        break;
    case '/add' :
        require __DIR__ . '/controllers/scoresController.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/error.view.php';
        break;
}


