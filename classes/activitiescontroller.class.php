<?php 

    class ActivitiesController extends Activities{
        
        public function createActivity($activity, $evidence){
            $this->setActivity($activity, $evidence);
        }

        public function editActivity($activity, $evidence){
            $this->editActivity($activity,$evidence);
        }

        public function deleteActivity($id){
            $this->deleteActivity($id);
        }
    }