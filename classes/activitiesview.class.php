<?php 
    include 'classes/activities.class.php';

    class ActivitiesView extends Activities{
        
        public function showActivity($activity){
            $results = $this->getActivity($activity);
            echo "Activity: " . $results[0]['activity'] . "<br/>" . "Evidence: " . $results[0]['evidence'] . "<br/>" . "Date: " . $results[0]['dateofactivity'];
        }
    }