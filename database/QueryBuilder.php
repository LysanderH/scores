<?php


class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function selectAllScores($table)
    {
        $statement = $this->pdo->prepare("SELECT g.date, t1.name AS home_team_name, g.home_team_goals, g.away_team_goals, t2.name as away_team_name 
FROM games g 
JOIN teams t1 on g.home_team_id = t1.id 
JOIN teams t2 on g.away_team_id = t2.id; ");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function getId($name)
    {
        var_dump($name);
        $statement = $this->pdo->prepare("SELECT id FROM teams WHERE name = '{$name}'");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function storeTeam($teamName)
    {
        $statement = $this->pdo->prepare("INSERT INTO teams(name) VALUES ('{$teamName}');");
        $statement->execute();
    }

    public function storeAll($homeTeam, $awayTeam, $homeTeamGoals, $awayTeamGoals, $date)
    {
//        var_dump($homeTeam, $awayTeam, $homeTeamGoals, $awayTeamGoals, $date);
        $statement = $this->pdo->prepare("INSERT INTO games(date, home_team_id, home_team_goals, away_team_goals, away_team_id) 
                     VALUES ('{$date}','{$homeTeam}', '{$homeTeamGoals}', '{$awayTeamGoals}', '{$awayTeam}');");
//        var_dump($statement);
        $statement->execute();
    }
}