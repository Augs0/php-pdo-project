<?php 
    include 'includes/autoloader.inc.php';

    if(isset($_POST['submit-btn'])){
        $activity = $_POST['activity'];
        $evidence = $_POST['evidence'];

        $addActivity = new ActivitiesController();
        echo $addActivity->createActivity($activity, $evidence);
        
        header('Location: done.php');
        die();
    }
?>