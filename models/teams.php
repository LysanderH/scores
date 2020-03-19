<?php

$scoresArray = [];
/** @var stdClass $scores */

foreach ($scores as $score) {
    /** @var stdClass $teams */
    foreach ($teams as $team) {
        if (!array_key_exists($team->name, $scoresArray)) {
            $scoresArray[$team->name] = [
                'name' => $team->name,
                'games' => 0,
                'points' => 0,
                'wins' => 0,
                'losses' => 0,
                'draws' => 0,
                'GF' => 0,
                'GA' => 0,
                'GD' => 0,
            ];
            if ($team->name === $score->home_team_name) {
                $scoresArray[$team->name]['games']++;
                if ($score->home_team_goals > $score->away_team_goals) {
                    $scoresArray[$team->name]['wins']++;
                    $scoresArray[$team->name]['points'] += 3;
                } elseif ($score->home_team_goals === $score->away_team_goals) {
                    $scoresArray[$team->name]['draws']++;
                    $scoresArray[$team->name]['points'] += 1;
                } else {
                    $scoresArray[$team->name]['losses']++;
                }
                $dif = $score->home_team_goals - $score->away_team_goals;
                $scoresArray[$team->name]['GD'] += $dif;
                $scoresArray[$team->name]['GF'] += $score->home_team_goals;
                $scoresArray[$team->name]['GA'] += $score->away_team_goals;
            }
            if ($team->name === $score->away_team_name) {
                $scoresArray[$team->name]['games']++;
                if ($score->home_team_goals < $score->away_team_goals) {
                    $scoresArray[$team->name]['wins']++;
                    $scoresArray[$team->name]['points'] += 3;
                } elseif ($score->home_team_goals === $score->away_team_goals) {
                    $scoresArray[$team->name]['draws']++;
                    $scoresArray[$team->name]['points'] += 1;
                } else {
                    $scoresArray[$team->name]['losses']++;
                }
                $dif = $score->away_team_goals - $score->home_team_goals;
                $scoresArray[$team->name]['GD'] += $dif;
                $scoresArray[$team->name]['GF'] += $score->away_team_goals;
                $scoresArray[$team->name]['GA'] += $score->home_team_goals;
            }
        } else {
            if ($team->name === $score->home_team_name) {
                $scoresArray[$team->name]['games']++;
                if ($score->home_team_goals > $score->away_team_goals) {
                    $scoresArray[$team->name]['wins']++;
                    $scoresArray[$team->name]['points'] += 3;
                } elseif ($score->home_team_goals === $score->away_team_goals) {
                    $scoresArray[$team->name]['draws']++;
                    $scoresArray[$team->name]['points'] += 1;
                } else {
                    $scoresArray[$team->name]['losses']++;
                }
                $dif = $score->home_team_goals - $score->away_team_goals;
                $scoresArray[$team->name]['GD'] += $dif;
                $scoresArray[$team->name]['GF'] += $score->home_team_goals;
                $scoresArray[$team->name]['GA'] += $score->away_team_goals;
            }
            if ($team->name === $score->away_team_name) {
                $scoresArray[$team->name]['games']++;
                if ($score->home_team_goals < $score->away_team_goals) {
                    $scoresArray[$team->name]['wins']++;
                    $scoresArray[$team->name]['points'] += 3;
                } elseif ($score->home_team_goals === $score->away_team_goals) {
                    $scoresArray[$team->name]['draws']++;
                    $scoresArray[$team->name]['points'] += 1;
                } else {
                    $scoresArray[$team->name]['losses']++;
                }
                $dif = $score->away_team_goals - $score->home_team_goals;
                $scoresArray[$team->name]['GD'] += $dif;
                $scoresArray[$team->name]['GF'] += $score->away_team_goals;
                $scoresArray[$team->name]['GA'] += $score->home_team_goals;
            }
        }
    }
}

usort($scoresArray, function ($b, $a) {
    return $a['points'] <=> $b['points'];
});

