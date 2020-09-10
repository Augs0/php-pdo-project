<?php 
    include 'includes/autoloader.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Wins</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1 class="title is-1">Small Wins</h1>
        <h2 class="subtitle">A record of my <span class="hilite-one">learning journey</span> as a <span class="hilite-two">developer</span></h2>
    </header>
    <main>
        <section class="container section">
        <form action="process.php" method="POST" id="activityForm">
            <label class="label" for="activity">Activity:</label>
            <input class="input is-primary is-large" type="text" name="activity" id="activity">
            <label class="label" for="evidence">Evidence:</label>
            <input class="input is-primary is-large" type="text" name="evidence" id="evicdence">
            <button class="button is-info is-light is-medium" name="submit-btn" id="submit-btn" type="submit">Submit</button>
        </form>
    </section>
        <section class="container section">
            <table class="table activities is-bordered">
                <caption class="title">My progress</caption>
                    <tr>
                        <th class="has-background-primary">Activity</th>
                        <th class="has-background-info">Evidence</th>
                        <th class="has-background-primary">Date</th>
                    </tr>
            <?php
              $activities = new ActivitiesView();
              $allActivities = $activities->showActivities();

              foreach($allActivities as $activity){
            ?>
                <tr>
                    <td class="activity"><?php echo $activity['activity'] ?></td>
                    <td class="evidence"><?php echo $activity['evidence'] ?></td>
                    <td class="dateofactivity"><?php echo $activity['dateofactivity'] ?></td>
                </tr>
               
            <?php      
              }
            ;?>
             </table>
            </section>
    </main>
</body>
</html>