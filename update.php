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
