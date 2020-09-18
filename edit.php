<?php 
    include 'includes/autoloader.inc.php';

    $editActivityView = new ActivitiesView();
    $activityToEdit = $editActivityView->showActivityToEdit();

    $message = '';
   

    if(isset($_POST['edit-btn'])){
        
        $activity = $_POST['activity'];
        $evidence = $_POST['evidence'];
     
        if(empty($activity)){
            $message = 'Please do not leave activity blank';
        } else{
            $activityController = new ActivitiesController();
            
            $activityController->editActivity($activity, $evidence);
            
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
        <h2 class="subtitle">A record of my <span class="hilite-one">learning journey</span> as a <span class="hilite-two">developer</span></h2>
    </header>
    <main>
       <section class="container section">
        <form  method="POST" id="activityForm">
            <label class="label" for="activity">Activity:</label>
            <?php echo $message ;?>
            <input value="<?php echo $activityToEdit->activity ?>" class="input is-primary is-large" type="text" name="activity" id="activity"/>
            <label class="label" for="evidence">Evidence:</label>
            <input value="<?php echo $activityToEdit->evidence ?>" class="input is-primary is-large" type="text" name="evidence" id="evicdence"/>
            <button class="button is-info is-light is-medium" name="edit-btn" id="edit-btn" type="submit">Edit record</button>
        </form>
    </section>
    </main>
</body>
</html>