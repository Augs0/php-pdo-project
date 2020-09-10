<?php 

    class ActivitiesController extends Activities{
        
        public function createActivity($activity, $evidence){
            $this->setActivity($activity, $evidence);
        }

    }