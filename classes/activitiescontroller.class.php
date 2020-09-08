<?php 

    class ActivitiesController extends Activities{
        
        public function createActivity($activity, $evidence, $dateofactivity){
            $this->setActivity($activity, $evidence, $dateofactivity);
        }

    }