<?php
//var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['new-h-team-name']) || $_POST['new-h-team-name'] === '') {
        $homeTeam = (int)$_POST['home-team-name'];
    } else {
        $homeTeam = $_POST['new-h-team-name'];
        $query->storeTeam($homeTeam);
//        var_dump($homeTeam);
        $homeTeam = $query->getId($homeTeam);
        $homeTeam = $homeTeam[0]->id;
//        var_dump($homeTeam);
    }

    if (!isset($_POST['new-a-team-name']) || $_POST['new-a-team-name'] === '') {
        $awayTeam = (int)$_POST['away-team-name'];
    } else {
        $awayTeam = $_POST['new-a-team-name'];
        $query->storeTeam($awayTeam);
        $awayTeam = $query->getId($awayTeam);
        $awayTeam = $awayTeam[0]->id;
//        var_dump($awayTeam);
    }

    if (isset($_POST['date'])) {
        $date = date('Y-m-d', strtotime($_POST['date']));
//        var_dump('date');
        if (isset($_POST['home-team-goals'])) {
            $homeTeamGoals = (int)$_POST['home-team-goals'];
//            var_dump('home-t-g');
            if (isset($_POST['away-team-goals'])) {
//                var_dump('away-t-g');
                $awayTeamGoals = (int)$_POST['away-team-goals'];
                $query->storeAll($homeTeam, $awayTeam, $homeTeamGoals, $awayTeamGoals, $date);
                header('Location: /');
            }
        }

    }

} else {
    header('Location: /views/error.view.php');
}

