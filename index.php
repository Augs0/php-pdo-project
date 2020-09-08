<?php 
    include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Wins</title>
</head>
<body>
    <header>
        <h1>Small Wins</h1>
    </header>
    <main>
        <article>
        <form action="">
            <label for="activity">Activity:</label>
            <input type="text" name="activity" id="activity">
            <label for="evidence">Evidence:</label>
            <input type="text" name="evidence" id="evicdence">
            <label for="date">Date:</label>
            <input type="date" name="date" id="date">
        </form>
        </article>
        <article class="diary">
            <h2>Your progress so far</h2>
            <?php
                $activityObj = new ActivitiesView();
                $activityObj->showActivity('completed first version of python exercise');

            ?>
        </article>
    </main>
</body>
</html>