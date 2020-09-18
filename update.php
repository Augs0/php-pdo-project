<?php 
    include 'includes/autoloader.inc.php';


    if(isset($_POST['edit-btn'])){
        $activity = $_POST['activity'];
        $evidence = $_POST['evidence'];
        $message;

        if(empty($activity)){
            $message = 'Please do not leave activity blank';
        } else{
            $editActivity = new ActivitiesController();
            echo $editActivity->editActivity($activity, $evidence, $id);
            
            header('Location: index.php');
            die();
        }   
    }
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
        <h2 class="subtitle">A record of my <span class="span">learning journey</span> as a developer</h2>
    </header>
    <main class="container">
        <section class="section">
            <p><?php echo $message ;?></p>
            <a class="button is-primary is-medium" href="index.php">View Activities</a>
        </section>
    </main>
</body>
</html>