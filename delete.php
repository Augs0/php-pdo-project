<?php 
    include 'includes/autoloader.inc.php';

    $findActivityToDelete = new ActivitiesController();
    $activityToDelete = $findActivityToDelete->deleteActivity($id);

    
?>

