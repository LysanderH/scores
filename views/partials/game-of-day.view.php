<table>
    <caption>Games played at <?= date('d-m-Y'); ?></caption>
    <thead>
    <tr>
        <th scope="col">Date</th>
        <th scope="col">Home Team</th>
        <th scope="col">Home Team Goals</th>
        <th scope="col">Away Team Goals</th>
        <th scope="col">Away Team</th>
    </tr>
    </thead>
    <tbody>
    <?php /** @var stdClass $scores */
    foreach ($scores as $score): ?>
        <tr>
            <td><?= date('d-m-Y', strtotime($score->date)); ?></td>
            <td><?= $score->home_team_name; ?></td>
            <td><?= $score->home_team_goals; ?></td>
            <td><?= $score->away_team_goals; ?></td>
            <td><?= $score->away_team_name; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>