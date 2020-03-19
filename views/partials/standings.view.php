<table>
    <caption>Standings</caption>
    <thead>
    <tr>
        <th>&nbsp;</th>
        <th scope="col">Team</th>
        <th scope="col">Games</th>
        <th scope="col">Points</th>
        <th scope="col">Wins</th>
        <th scope="col">Losses</th>
        <th scope="col">Draws</th>
        <th scope="col">GF</th>
        <th scope="col">GA</th>
        <th scope="col">GD</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1;
    foreach ($scoresArray as $score): ?>
        <tr>
            <th scope="row"><?= $i++; ?></th>
            <th scope="row"><?= $score['name']; ?></th>
            <td><?= $score['games']; ?></td>
            <td><?= $score['points']; ?></td>
            <td><?= $score['wins']; ?></td>
            <td><?= $score['losses']; ?></td>
            <td><?= $score['draws']; ?></td>
            <td><?= $score['GF']; ?></td>
            <td><?= $score['GA']; ?></td>
            <td><?= $score['GD']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>