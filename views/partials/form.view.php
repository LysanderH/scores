<form action="/add" method="POST">
    <fieldset>
        <legend>Date</legend>
       <label for="date">Match date</label>
        <input type="date" id="date" name="date">
    </fieldset>
    <fieldset>
        <legend>Home Team</legend>
        <label for="h-team-name">Home Team</label>
        <select name="home-team-name" id="h-team-name">
            <?php foreach ($teams as $team): ?>
            <option value="<?= $team->id; ?>"><?= $team->name; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="new-h-team-name">Team not listed</label>
        <input type="text" name="new-h-team-name">
        <label for="home-team-goals">Home team goals</label>
        <input type="text" name="home-team-goals" id="home-team-goals">
    </fieldset>
    <fieldset>
        <legend>Away Team</legend>
        <label for="a-team-name">Away Team</label>
        <select name="away-team-name" id="a-team-name">
            <?php foreach ($teams as $team): ?>
                <option value="<?= $team->id; ?>"><?= $team->name; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="new-a-team-name">Team not listed</label>
        <input type="text" name="new-a-team-name">
        <label for="away-team-goals">Home team goals</label>
        <input type="text" name="away-team-goals" id="away-team-goals">
    </fieldset>
    <input type="submit">
</form>