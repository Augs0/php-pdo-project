<?php 
    include 'includes/autoloader.inc.php';

    $deleteActivity = new ActivitiesController();
    $deleteActivity = $deleteActivity->deleteActivity($id);

    
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
       Welcome to the delete page
    </main>
</body>
</html>