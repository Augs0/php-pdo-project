<?php 

    class ActivitiesView extends Activities{
        public function showActivities(){
            return $this->getActivitiesFromDb();
        }
    }